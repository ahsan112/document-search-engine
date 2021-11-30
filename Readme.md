### Overview

this is a simple search engine application to query the contents of uploaded files. 
meilisearch with laravel scout is used to query the documents data

### Usage

Using docker to get started

``` bash
docker-compose up --build 
```

migrate the tables  
``` bash
docker-compose run --rm artisan migrate   
```

should be running on localhost:8000