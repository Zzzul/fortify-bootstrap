
# Laravel + Fortify + Bootstrap
A Laravel fortify starter project template using bootstrap 4.

<p align="center">
    <img src="https://user-images.githubusercontent.com/62506582/102316179-0b34d700-3fa8-11eb-86a4-4f22d6e0a924.png" width="100%" height="auto" />
     <img src="https://user-images.githubusercontent.com/62506582/102316181-0bcd6d80-3fa8-11eb-932f-c8195b4ccb07.png" width="100%" height="auto" />
     <img src="https://user-images.githubusercontent.com/62506582/102316177-0a03aa00-3fa8-11eb-8ea0-6ae2752a2218.png" width="100%" height="auto" />
     <img src="https://user-images.githubusercontent.com/62506582/102316172-0839e680-3fa8-11eb-9447-061a9b4e4cdf.png" width="100%" height="auto" />
     <img src="https://user-images.githubusercontent.com/62506582/102316190-0e2fc780-3fa8-11eb-8ab9-080faadcda5b.png" width="100%" height="auto" />
</p>

## What inside?
- Laravel ^8.x - [Laravel 8](https://laravel.com/docs/8.x)
- Laravel Fortify ^1.x - [Fortify](https://github.com/laravel/fortify)
- Laravel UI ^3.x - [Laravel/ui](https://github.com/laravel/ui/tree/3.x)


## Installation
Clone or download this repository
```shell
$ git clone https://github.com/Zzzul/fortify-bootstrap.git
```

Install all dependencies
```shell
# install composer dependency
$ composer install

# install npm packages
$ npm install

# build dev 
$ npm run dev
```

Generate app key, configure `.env` file and do migration.
```shell
# create copy of .env
$ cp .env.example .env

# create laravel key
$ php artisan key:generate

# laravel migrate
$ php artisan migrate

# Start local development server
$ php artisan migrate
```

## What next ?
If you want some similar to this, but it's more "powerful" and I was inspired by that too :
- [@nyancodeid](https://github.com/nyancodeid)  | [laravel 8-stisla-jetstream](https://github.com/nyancodeid/laravel-8-stisla-jetstream)
- [@fukigenmedia](https://github.com/fukigenmedia)  | [laravel-stisla-fortify](https://github.com/fukigenmedia/laravel-stisla-fortify)
- [@zacksmash](https://github.com/zacksmash)  | [fortify-ui](https://github.com/zacksmash/fortify-ui)
