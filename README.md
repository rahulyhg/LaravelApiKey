# LaravelApiKey

[![Build Status](https://travis-ci.org/Tony133/LaravelApiKey.svg?branch=master)](https://travis-ci.org/Tony133/LaravelApiKey)

Simple Example Laravel 5.5 LTS with Api Key

## Install with Composer

```
    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install or composer install
```

## Getting with Curl

```
    $ curl -H 'content-type: application/json' -v -X GET http://localhost:8000/api/books
    $ curl -H 'content-type: application/json' -v -X GET http://localhost:8000/api/books/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"title":"Foo bar","price":"19.99","author":"Foo author","editor":"Foo editor"}' http://localhost:8000/api/books
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"title":"Foo bar","price":"19.99","author":"Foo author","editor":"Foo editor"}' http://localhost:8000/api/books/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://localhost:8000/api/books/:id
```

## Example User Authentication Api Key with Curl

```
	$ curl -H 'content-type: application/json' -v -X GET http://localhost:8000/api/books?api_token:token
```
