# Movie Platform Management System

نظام إدارة منصة أفلام متكامل يتيح للمستخدمين استعراض الأفلام، تقييمها، وكتابة مراجعات، مع لوحة تحكم للإدارة ومديري المحتوى.

## :rocket: فكرة المشروع

نظام ويب متكامل لإدارة منصة أفلام، يتيح للمستخدمين:

-   التسجيل وتسجيل الدخول.
-   استعراض قائمة الأفلام وتفاصيلها.
-   كتابة مراجعات وتقييمات.
-   لوحة تحكم للإدارة ومديري المحتوى لإدارة الأفلام، الأنواع، العروض، والمستخدمين.

## :gear: المتطلبات

-   PHP >= 8.2
-   Composer
-   Laravel 12.x
-   قاعدة بيانات MySQL أو SQLite
-   Node.js (لتشغيل الواجهة الأمامية)

## :cd: التثبيت والتشغيل

```bash
# تثبيت الحزم
composer install
npm install

# إعداد ملف البيئة
cp .env.example .env

# إنشاء قاعدة البيانات وتشغيل الهجرات
php artisan migrate --seed

# تشغيل السيرفر
php artisan serve

# تشغيل Vite للواجهة الأمامية
npm run dev
```

## :busts_in_silhouette: الأدوار في النظام

-   **مدير (admin):** إدارة المستخدمين، التقارير، كل شيء.
-   **مدير محتوى (content):** إدارة الأفلام، العروض، الأنواع، مراجعة التقييمات.
-   **مستخدم (user):** استعراض الأفلام، كتابة مراجعات وتقييمات.

## :file_folder: بنية قاعدة البيانات (أهم الجداول)

-   **users:** id, name, email, password, role
-   **movies:** id, title, genre_id, year, duration, language, poster_url, description, trailer_url, age_rating, views, movie_url
-   **reviews:** id, user_id, movie_id, rating, comment, approved
-   **genres:** id, name

## :link: روابط مهمة

-   لوحة تحكم المدير: `/admin`
-   لوحة تحكم مدير المحتوى: `/content_admin`
-   استعراض الأفلام: `/movies`

## :book: توثيق API (مختصر)

### التسجيل وتسجيل الدخول

-   `POST /api/register` تسجيل مستخدم جديد
-   `POST /api/login` تسجيل الدخول
-   `POST /api/logout` تسجيل الخروج (يتطلب توكن)

### الأفلام

-   `GET /api/movies` قائمة الأفلام (مع ترقيم)
-   `GET /api/movies/{movie}` تفاصيل فيلم

### المراجعات

-   `GET /api/movies/{movie}/reviews` كل مراجعات الفيلم
-   `GET /api/movies/{movie}/reviews/{review}` مراجعة محددة
-   `POST /api/movies/{movie}/reviews` إضافة مراجعة (يتطلب توكن)
-   `PUT /api/movies/{movie}/reviews/{review}` تعديل مراجعة (يتطلب توكن)
-   `DELETE /api/movies/{movie}/reviews/{review}` حذف مراجعة (يتطلب توكن)

### مثال استجابة فيلم:

```json
{
    "id": 1,
    "title": "Inception",
    "genre_id": 2,
    "genre_name": "Action",
    "year": 2010,
    "duration": 148,
    "language": "English",
    "poster_url": "...",
    "description": "...",
    "trailer_url": "...",
    "age_rating": "PG-13"
}
```

### مثال استجابة مراجعة:

````json
{
  "id": 1,
  "rating": 5,
  "comment": "فيلم رائع!",
  "approved": true,
  "user": {
    "id": 2,
    "name": "أحمد",
    "email": "ahmed@email.com"
  },
  "movie_id": 1,
  "movie_name": "Inception"
}
=======
# 🎬 Movie Platform Management System

> An integrated movie platform management system that allows users to browse movies, rate them, and write reviews, with an admin dashboard for administrators and content managers.

---

## 📸 Screenshots

<div align="center">

![Movie Platform Management System](screenshot/Focal%20X%20.png)

*Movie Platform Management System Interface*

</div>

---

## 📋 Table of Contents

- [Screenshots](#-screenshots)
- [Project Idea](#-project-idea)
- [Requirements](#-requirements)
- [Installation & Setup](#-installation--setup)
- [System Roles](#-system-roles)
- [Database Structure](#-database-structure)
- [Interfaces & Links](#-interfaces--links)
- [API Documentation](#-api-documentation)
- [Login Information](#-login-information)

---

## 🚀 Project Idea

An integrated web system for managing a movie platform that allows users to:

- ✅ **Registration and Login** - Secure authentication system
- 🎭 **Movie Browsing** - Comprehensive list with complete details
- ⭐️ **Ratings and Reviews** - Interactive rating system
- 📊 **Advanced Dashboard** - Comprehensive content and user management
- 🔐 **Multi-level Permissions** - Different roles for administrators and users

---

## ⚙️ Requirements

| Component | Required Version |
|-----------|------------------|
| PHP | >= 8.2 |
| Composer | Latest version |
| Laravel | 12.x |
| Database | MySQL or SQLite |
| Node.js | Latest version |

---

## 🛠 Installation & Setup

### 1. Clone the Project
```bash
git clone https://github.com/TaherZreeka/Focal-X_movie_platform.git
cd Movie_Platform_Management_System
````

### 2. Install Dependencies

```bash
# Install PHP packages
composer install

# Install Node.js packages
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Setup

```bash
# Create database and run migrations
php artisan migrate --seed
```

### 5. Run the Application

```bash
# Start development server
php artisan serve

# Run Vite for frontend (in separate terminal)
npm run dev
```

---

## 👥 System Roles

| Role              | Permissions                  | Access           |
| ----------------- | ---------------------------- | ---------------- |
| **Admin**         | Full system management       | `/admin`         |
| **Content Admin** | Movie and content management | `/content_admin` |
| **User**          | Browse movies and reviews    | `/movies`        |

---

## 🗄 Database Structure

### Main Tables

#### `users` - Users Table

```sql
- id (Primary Key)
- name
- email
- password
- role (admin, content_admin, user)
```

#### `movies` - Movies Table

```sql
- id (Primary Key)
- title
- genre_id (Foreign Key)
- year
- duration
- language
- poster_url
- description
- trailer_url
- age_rating
- views
- movie_url
```

#### `reviews` - Reviews Table

```sql
- id (Primary Key)
- user_id (Foreign Key)
- movie_id (Foreign Key)
- rating
- comment
- approved
```

#### `genres` - Genres Table

```sql
- id (Primary Key)
- name
```

---

## 🔗 Interfaces & Links

| Interface               | Link             | Description                  |
| ----------------------- | ---------------- | ---------------------------- |
| Admin Dashboard         | `/admin`         | Full system management       |
| Content Admin Dashboard | `/content_admin` | Movie and content management |
| Movies Page             | `/movies`        | Browse movies                |
| Login Page              | `/login`         | User login                   |

---

## 📚 API Documentation

### 🔐 Authentication

| Method | Endpoint        | Description                  |
| ------ | --------------- | ---------------------------- |
| `POST` | `/api/register` | Register new user            |
| `POST` | `/api/login`    | User login                   |
| `POST` | `/api/logout`   | User logout (requires token) |

### 🎬 Movies

| Method | Endpoint              | Description                   |
| ------ | --------------------- | ----------------------------- |
| `GET`  | `/api/movies`         | List movies (with pagination) |
| `GET`  | `/api/movies/{movie}` | Get specific movie details    |

### ⭐️ Reviews

| Method   | Endpoint                               | Description                    |
| -------- | -------------------------------------- | ------------------------------ |
| `GET`    | `/api/movies/{movie}/reviews`          | All movie reviews              |
| `GET`    | `/api/movies/{movie}/reviews/{review}` | Specific review                |
| `POST`   | `/api/movies/{movie}/reviews`          | Add review (requires token)    |
| `PUT`    | `/api/movies/{movie}/reviews/{review}` | Edit review (requires token)   |
| `DELETE` | `/api/movies/{movie}/reviews/{review}` | Delete review (requires token) |

### 📝 Response Examples

#### Movie Response Example:

```json
{
    "id": 1,
    "title": "Inception",
    "genre_id": 2,
    "genre_name": "Action",
    "year": 2010,
    "duration": 148,
    "language": "English",
    "poster_url": "...",
    "description": "...",
    "trailer_url": "...",
    "age_rating": "PG-13"
}
```

#### Review Response Example:

```json
{
    "id": 1,
    "rating": 5,
    "comment": "Amazing movie!",
    "approved": true,
    "user": {
        "id": 2,
        "name": "Ahmed",
        "email": "ahmed@email.com"
    },
    "movie_id": 1,
    "movie_name": "Inception"
}
```

---

## 🔑 Login Information

### 👨‍💼 System Administrator

```
Email: admin@gmail.com
Password: 12345678
```

### 👨‍💻 Content Administrator

```
Email: content_admin@gmail.com
Password: 12345678
```

---

> # لمزيد من التفاصيل حول نقاط النهاية، راجع ملف التوثيق الكامل أو استخدم أدوات مثل Postman/Scribe.

## 📞 Support & Contribution

If you encounter any issues or have suggestions, please contact us or create an issue in the repository.

---

<div align="center">

**🎬 Movie Platform Management System**  
_Integrated Movie Platform Management System_

</div>
