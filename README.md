# opencart-api

### Plugins

The plugins that I used in this projects.

| Plugin | README |
| ------ | ------ |
| jwt-auth | [JSON Web Token Authentication for Laravel & Lumen](https://github.com/tymondesigns/jwt-auth) |
| laravel-cors | [Adds CORS (Cross-Origin Resource Sharing) headers support in your Laravel application](https://github.com/barryvdh/laravel-cors) |


Creating Restful Controller
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
