# opencart-api

### Plugins

The plugins that I used in this projects.

| Plugin | README |
| ------ | ------ |
| jwt-auth | [JSON Web Token Authentication for Laravel & Lumen](https://github.com/tymondesigns/jwt-auth) |
| laravel-cors | [Adds CORS (Cross-Origin Resource Sharing) headers support in your Laravel application](https://github.com/barryvdh/laravel-cors) |
| reliese/laravel | [Laravel Components for code generation](https://github.com/reliese/laravel) |
| esbenp/heimdal |[Heimdal is a Laravel exception handler build specifically for APIs.](https://github.com/esbenp/heimdal)|

Notes: http://esbenp.github.io/2017/01/14/modern-rest-api-laravel-part-3/

### POSTMAN Configurations

| Key | Value |
| ------ | ------ |
| Content-Type | application/json |
| X-Requested-With | XMLHttpRequest |
| Authorization| Bearer: [YOUR_SECRET_TOKEN] |

For Authorization token, you can use :
```
www.domain.com/api/v1/products?token=[YOUR_SECRET_TOKEN]
```


Creating Restful Controller

```
php artisan make:controller v1\PostController --resource (With directory name)
```

```
php artisan make:controller PostController --resource
```

Create Controller:
```sh
php artisan make:controller RegistrationController
```

Create Model
```sh
php artisan make:model Post –m
php artisan make:migration PostTableMigration
```

Manage Migrations
```sh 
php artisan migrate // Create database table
php artisan migrate:rollback // Rollback latest migrations
php artisan migrate:reset // Rollback all migrations
php artisan migrate:refresh // Rollback & migrate again

```

Actions Handled By Resource Controller

| Verb | URI | Action | Route Name|
| ------ | ------ | ------ | ------ | 
| GET | /photos | index |	photos.index |
| GET | /photos/create | create | photos.create |
| POST | /photos | store | photos.store |
| GET |	/photos/{photo} | show | photos.show |
| GET | /photos/{photo}/edit | edit | photos.edit |
| PUT/PATCH | /photos/{photo} | update | photos.update |
| DELETE | 	/photos/{photo}| destroy | photos.destroy |
