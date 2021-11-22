<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class DocumentSearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $documents = Document::search($request->term)
                ->query(function(Builder $builder) {
                    $builder->with('user');
                })
                ->paginate();

        return view('documents.index', compact('documents'));
    }
}
