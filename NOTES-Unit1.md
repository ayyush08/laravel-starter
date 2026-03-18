# 📘 Getting Started with MVC & Laravel

---

## 📌 1. What is MVC Framework?

**MVC (Model-View-Controller)** is a design pattern used to organize code in web applications.

### 🔹 Components

- **Model**
  - Handles data and database logic
  - Example: fetching users from database

- **View**
  - User interface layer (what the user sees)
  - Example: HTML pages, Blade templates

- **Controller**
  - Handles request and response logic
  - Connects Model and View

### 🔹 Flow
User Request → Controller → Model → Controller → View → Response


### 🔹 Advantages

- Separation of concerns  
- Easier maintenance  
- Reusable code  
- Scalable architecture  

---

## 🚀 2. Overview of Laravel Framework

**Laravel** is a popular PHP web framework based on MVC architecture.

### 🔹 Key Features

- Clean and elegant syntax  
- Built-in authentication & authorization  
- Eloquent ORM  
- Routing system  
- Blade templating engine  
- Middleware support  
- RESTful API support  
- Task scheduling  
- Security (CSRF, XSS protection)  

---

## 📦 3. Introduction to Composer

**Composer** is a dependency manager for PHP.

### 🔹 Why use Composer?

- Install libraries/packages  
- Manage project dependencies  
- Autoload classes  

### 🔹 Basic Commands

```bash
composer install
composer update
composer require package-name
```

## ⚙️ 4. Installing Composer (Latest)

### 🔹 Steps

1. Go to https://getcomposer.org
2. Download Composer installer
3. Install and link with PHP
4. Verify installation:
```bash
composer -v
```

## 🧱 5. Installing Laravel (Latest)

### 🔹 Using Composer
```bash
composer create-project laravel/laravel project-name
```

### 🔹 Using Laravel Installer
```bash
composer global require laravel/installer
laravel new project-name
```

### 🔹 Run the Project
```bash
cd project-name
php artisan serve
```

### 🔹 Open in Browser
Go to `http://localhost:8000` to see the Laravel welcome page.

## 📁 6. Laravel Directory Structure

project-name/
│── app/            # Core application logic
│── bootstrap/      # App bootstrapping
│── config/         # Configuration files
│── database/       # Migrations & seeds
│── public/         # Entry point (index.php)
│── resources/      # Views, CSS, JS
│── routes/         # Route definitions
│── storage/        # Logs & cache
│── tests/          # Test files
│── vendor/         # Composer dependencies

### 🔹 Important Folders
- app/ → Models, Controllers
- routes/web.php → Web routes
- resources/views/ → Blade templates
- public/ → Public assets

## 🛠️ 7. Artisan (Laravel CLI)

Artisan is Laravel's command-line interface.

### 🔹 Common Commands

```bash
php artisan serve
php artisan make:controller UserController
php artisan make:model User
php artisan make:migration create_users_table
php artisan migrate
php artisan route:list
```

### 🔹 Why Artisan?

- Automates repetitive tasks
- Speeds up development
- Helps manage project efficiently

