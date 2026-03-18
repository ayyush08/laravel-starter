# Routing in Laravel
A path for opening a page in Laravel is called a route. It is defined in the `routes/web.php` file. A route consists of a URI and a callback function that returns a response.

# Controller in Laravel
A controller is a class that handles the logic for a specific route. It is defined in the `app/Http/Controllers` directory. A controller can have multiple methods that handle different routes.

## How to create a controller

Run the following command in the terminal to create a controller:

```
php artisan make:controller ControllerName
```

# Views in Laravel
A view is a file that contains the HTML code for a page. It is defined in the `resources/views` directory. A view can be returned from a controller method to display a page.

## How to create a view using CLI

Run the following command in the terminal to create a view:

```php artisan make:view viewName
```

For Nested Views:
```php artisan make:view folderName.viewName
```