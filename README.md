## Laravel 11 Auth Scaffolding using Livewire Jetstream

- Create laravel project: ```composer create-project laravel/laravel laravel_jetstream```
- Install Jetstream: ```composer require laravel/jetstream```
- Create Auth with Livewire: ```php artisan jetstream:install livewire --dark```

## Laravel 11 Jetstream Features

- all features are configurable in files: ```fortify.php``` and ```jetstream.php```

## Livewire CRUD using Jetstream & Tailwind CSS

<h3>Create Auth with Jetstream Livewire</h3>

- Install Jetstream:```composer require laravel/jetstream```
- Create Auth with Livewire:```php artisan jetstream:install livewire```
- run the migration:```php artisan migrate```
- Create Migration, Model, Component,Update Component File,Blade Files, Config Template Layout and Add Route:

```
php artisan make:migration create_posts_table
php artisan migrate
php artisan make:model Post
php artisan make:livewire posts
php artisan livewire:publish --config
```