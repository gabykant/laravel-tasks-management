# Laravel Task Management API (Sanctum)

A secure and scalable **Task Management REST API** built with **Laravel** and **Laravel Sanctum**.

This project showcases how to design a clean, API-first backend that allows authenticated users to manage their own tasks securely, following Laravel best practices and real-world backend architecture.

---

## 🚀 Features

-   Secure authentication using Laravel Sanctum
-   Token-based API access
-   Task CRUD (Create, Read, Update, Delete)
-   Tasks linked to authenticated users
-   Access control to prevent unauthorized access
-   Request validation using Form Requests
-   Swagger (OpenAPI) documentation
-   Clean, maintainable, production-ready architecture

---

## 🛠 Tech Stack

-   Laravel 12
-   PHP 8+
-   Laravel Sanctum
-   MySQL / PostgreSQL
-   Swagger (L5-Swagger)
-   RESTful API architecture

---

## 📌 API Endpoints

### Authentication

-   POST /api/register
-   POST /api/login
-   POST /api/logout
-   GET /api/user

### Task Management

-   GET /api/tasks
-   POST /api/tasks
-   GET /api/tasks/{id}
-   PUT /api/tasks/{id}
-   DELETE /api/tasks/{id}

---

## 🔐 Authentication & Security

This API uses **Laravel Sanctum** for secure token-based authentication.
After login, include the access token in request headers:
Authorization: Bearer YOUR_ACCESS_TOKEN
All task-related endpoints are protected using the `auth:sanctum` middleware.

---

## 🧪 Task Status Values

Each task supports the following status values:

-   `pending`
-   `in_progress`
-   `completed`

---

## 📖 API Documentation (Swagger)

Interactive API documentation is available via Swagger:
_http://localhost:8050/api/documentation_

Use the **Authorize** button to test secured endpoints.

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/gabykant/laravel-tasks-management.git
cd laravel-task-management

### 2️⃣ Install dependencies
composer install

### 3️⃣ Environment configuration
cp .env.example .env
php artisan key:generate

Update database credentials in the .env file.

### 4️⃣ Run migrations
php artisan migrate

(Optional, if seeders are available)

_php artisan db:seed_

### 5️⃣ Start the development server
php artisan serve --port=8050

Application will be available at:

http://localhost:8050
```

## 🧠 Architecture Notes

-   API-first design (no frontend)
-   Authentication handled by Laravel Sanctum
-   Validation handled via Form Request classes
-   Authorization ensures users can only access their own tasks

Clean separation of concerns:

-   Controllers
-   Requests
-   Models

## 👨‍💻 Author

-   Gabriel Kwaye
    _Senior Laravel Developer – APIs & Authentication_
-   GitHub: https://github.com/your-username
-   Email: your.email@example.com

## 📄 License

This project is open-source and available under the MIT License.
