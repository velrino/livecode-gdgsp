# LiveCode API


Livecode API is the project developed for livecode in GDG-SP

## Installation

After cloning:
- composer update


### Require to run:

 - Docker
	 - https://docs.docker.com/engine/installation/

 -  Image apache2, php 7 for run Lumen in Ubuntu:

 -  Image mongo:
	 - https://hub.docker.com/_/mongo

Command:


1. Create container with mongo:

    docker run --name some-mongo -d mongo

2. Create container with project:
Project required env variable for mongo


MONGO_ENV_USERNAME
MONGO_ENV_PASSWORD
MONGO_ENV_PORT

docker run -d --name=NAME-p PORT:80 --link=mongodb --restart=unless-stopped -e MONGO_ENV_HOST='mongodb' -e MONGO_ENV_USERNAME='' -e MONGO_ENV_PASSWORD='' -v $(pwd):/var/www/html velrino/lumen:lumen

### Others
- file: "***Livecode.postman_collection.json***" is a file with all routes from API

----------


# Lumen Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

#### Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

#### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
