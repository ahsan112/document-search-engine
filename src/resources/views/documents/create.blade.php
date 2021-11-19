<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Document</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Please upload the document and provide a filename.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form 
                            method="POST" 
                            action="{{ route('documents.store') }}" 
                            enctype="multipart/form-data"
                        >
                            @csrf
                            
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3">
                                        <x-label>Filename</x-label>
                                        <div class="flex mt-1 rounded-md shadow-sm">
                                            <x-input 
                                                name="name" 
                                                type="text" 
                                                class="w-full"
                                                value="{{ old('filename') }}"
                                            />
                                            
                                        </div>
                                        @error('filename')
                                            <p class="mt-1 text-xs text-red-500">{{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                    
                                <div>
                                    <x-label>File</x-label>
                                    <div class="flex justify-center px-6 pt-5 pb-6 mt-1 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="document" type="file" class="sr-only">
                                            </label>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                            .txt file only
                                            </p>
                                        </div>
                                    </div>
                                    @error('document')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }} </p>
                                    @enderror
                                </div>
                                </div>
                                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
