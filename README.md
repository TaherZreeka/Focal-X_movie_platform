# 🎬 Movie Platform Management System

> A comprehensive and integrated platform for browsing, reviewing, and managing movies, with robust features for both users and administrators.

---

##  Presented by

<div align="center">

![Presented by](screenshot/focal%20x.png)  

</div>

---
## 📸 Screenshots

<div align="center">

![Movie Platform Management System](screenshot/Screenshot%20(137).png)  
![Movie Platform Management System](screenshot/Screenshot%20(138).png)  
![Movie Platform Management System](screenshot/Screenshot%20(138).png)  
![Movie Platform Management System](screenshot/Screenshot%20(139).png)  
![Movie Platform Management System](screenshot/Screenshot%20(140).png)  
![Movie Platform Management System](screenshot/Screenshot%20(141).png)  
![Movie Platform Management System](screenshot/Screenshot%20(142).png)  
![Movie Platform Management System](screenshot/Screenshot%20(143).png)  
![Movie Platform Management System](screenshot/Screenshot%20(144).png)  

</div>

## 📚 Table of Contents

- [🎬 Movie Platform Management System](#-movie-platform-management-system)
  - [Presented by](#presented-by)
  - [📸 Screenshots](#-screenshots)
  - [📚 Table of Contents](#-table-of-contents)
  - [🚀 Project Overview](#-project-overview)
  - [⚙️ Requirements](#️-requirements)
  - [🛠 Installation \& Setup](#-installation--setup)
    - [1. Clone the Repository](#1-clone-the-repository)
    - [2. Install Dependencies](#2-install-dependencies)
    - [3. Configure Environment](#3-configure-environment)
    - [4. Set Up the Database](#4-set-up-the-database)
    - [5. Run the Application](#5-run-the-application)
  - [👥 System Roles](#-system-roles)
  - [🗄 Database Structure](#-database-structure)
    - [`users`](#users)
    - [`movies`](#movies)
    - [`reviews`](#reviews)
    - [`genres`](#genres)
  - [🔗 Interfaces \& Routes](#-interfaces--routes)
  - [📚 API Documentation](#-api-documentation)
    - [🔐 Authentication](#-authentication)
    - [🎬 Movies](#-movies)
    - [⭐ Reviews](#-reviews)
    - [🧾 Sample Responses](#-sample-responses)
      - [Movie Response:](#movie-response)
      - [Review Response:](#review-response)
  - [🔑 Sample Credentials](#-sample-credentials)
    - [👨‍💼 Admin](#-admin)
    - [👨‍💻 Content Admin](#-content-admin)
  - [📞 Support \& Contributions](#-support--contributions)
  - [🏆 Acknowledgments](#-acknowledgments)
    - [🎉 Special Thanks](#-special-thanks)
    - [👨‍💻 Development Team](#-development-team)

---

## 🚀 Project Overview

The **Movie Platform Management System** is a full-stack Laravel application designed to:

- ✅ Allow user **registration and authentication**
- 🎥 Enable **movie browsing** with detailed information
- ⭐ Let users **rate and review** movies
- 📊 Provide an **admin dashboard** for content and user management
- 🔐 Enforce **role-based access control** for admins, content managers, and users

---

## ⚙️ Requirements

| Component   | Version           |
|------------|-------------------|
| PHP        | ≥ 8.2             |
| Composer   | Latest            |
| Laravel    | 12.x              |
| Database   | MySQL / SQLite    |
| Node.js    | Latest (v18+)     |

---

## 🛠 Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/TaherZreeka/Focal-X_movie_platform.git
cd Movie_Platform_Management_System
```

### 2. Install Dependencies
```bash
composer install      # PHP dependencies
npm install           # JS dependencies
```

### 3. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Set Up the Database
```bash
php artisan migrate --seed
```

### 5. Run the Application
```bash
php artisan serve     # Start Laravel dev server
npm run dev           # Compile frontend assets with Vite
```

---

## 👥 System Roles

| Role            | Permissions                    | Dashboard Route   |
|-----------------|--------------------------------|-------------------|
| **Admin**       | Full system access             | `/admin`          |
| **Content Admin** | Manage movies & content      | `/content_admin`  |
| **User**        | View movies, post reviews      | `/movies`         |

---

## 🗄 Database Structure

### `users`
- `id`, `name`, `email`, `password`, `role`

### `movies`
- `id`, `title`, `genre_id`, `year`, `duration`, `language`, `poster_url`, `description`, `trailer_url`, `age_rating`, `views`, `movie_url`

### `reviews`
- `id`, `user_id`, `movie_id`, `rating`, `comment`, `approved`

### `genres`
- `id`, `name`

---

## 🔗 Interfaces & Routes

| Page                  | Route             | Description                      |
|-----------------------|------------------|----------------------------------|
| Admin Dashboard       | `/admin`         | Full system management           |
| Content Admin Panel   | `/content_admin` | Manage movie content             |
| Movie Browsing Page   | `/movies`        | Public user movie interface      |
| Login Page            | `/login`         | Login for all roles              |

---

## 📚 API Documentation

### 🔐 Authentication

| Method | Endpoint        | Description           |
|--------|-----------------|-----------------------|
| POST   | `/api/register` | Register a new user   |
| POST   | `/api/login`    | User login            |
| POST   | `/api/logout`   | Logout (with token)   |

### 🎬 Movies

| Method | Endpoint                | Description                      |
|--------|-------------------------|----------------------------------|
| GET    | `/api/movies`           | List all movies (paginated)     |
| GET    | `/api/movies/{id}`      | Fetch movie details             |

### ⭐ Reviews

| Method | Endpoint                                      | Description                      |
|--------|-----------------------------------------------|----------------------------------|
| GET    | `/api/movies/{id}/reviews`                    | Get all reviews for a movie     |
| GET    | `/api/movies/{id}/reviews/{review_id}`        | View specific review            |
| POST   | `/api/movies/{id}/reviews`                    | Submit a review (auth required) |
| PUT    | `/api/movies/{id}/reviews/{review_id}`        | Update review (auth required)   |
| DELETE | `/api/movies/{id}/reviews/{review_id}`        | Delete review (auth required)   |

### 🧾 Sample Responses

#### Movie Response:
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

#### Review Response:
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

## 🔑 Sample Credentials

### 👨‍💼 Admin
```
Email: admin@gmail.com  
Password: 12345678
```

### 👨‍💻 Content Admin
```
Email: content_admin@gmail.com  
Password: 12345678
```

---

## 📞 Support & Contributions

If you find bugs, need help, or would like to contribute:

- Open an issue on the [GitHub repo](https://github.com/TaherZreeka/Focal-X_movie_platform)
- Fork and submit a pull request
- Contact the team for feedback or collaboration

---

## 🏆 Acknowledgments

<div align="center">

### 🎉 Special Thanks

**Focal X  Agency**  
For their commitment to student growth and learning opportunities.

**Mentors**  
**Ms. Tuka**  
- Technical guidance  
- Concept clarification  
- Inspirational mentorship

**Mr. Ali Mohamad**  
- Support throughout development

**Focal X Team**  
- For building and supporting this educational journey

---

### 👨‍💻 Development Team

| Role               | Name                      |
|--------------------|---------------------------|
| Lead Developer     | Taher Saleh Zreeka        |
| Vice Lead          | Nour Sohil Alkinj       |
| Frontend Specialist| Raghad Omar Shawish       |
| Backend Developer  | Khalid Ayman Thakrallah   |
| Database Specialist| Ibrahim Sarour            |

---

**Thank you to all educators, mentors, and contributors who made this project a reality.**

</div> 
