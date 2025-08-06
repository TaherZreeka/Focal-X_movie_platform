# توثيق واجهة برمجة التطبيقات (API) | API Documentation

---

## مقدمة | Introduction

توفر هذه الواجهة نقاط نهاية RESTful لإدارة الأفلام، المراجعات، والمستخدمين. جميع الاستجابات بصيغة JSON.
This API provides RESTful endpoints for managing movies, reviews, and users. All responses are in JSON format.

---

## المصادقة | Authentication

- التسجيل وتسجيل الدخول لا يتطلب توكن.
- جميع العمليات المحمية تتطلب إرسال التوكن في الهيدر:
  - `Authorization: Bearer {token}`

---

## نقاط النهاية الرئيسية | Main Endpoints

### التسجيل وتسجيل الدخول | Auth
- `POST /api/register`  
  **الوصف:** تسجيل مستخدم جديد.  
  **المتطلبات:** name, email, password  
  **استجابة ناجحة:**
  ```json
  { "user": { ... }, "message": "user registerd successfully" }
  ```
- `POST /api/login`  
  **الوصف:** تسجيل الدخول.  
  **المتطلبات:** email, password  
  **استجابة ناجحة:**
  ```json
  { "user": { ... }, "token": "...", "message": "Login successfully" }
  ```
- `POST /api/logout`  
  **الوصف:** تسجيل الخروج (يتطلب توكن).

---

### الأفلام | Movies
- `GET /api/movies`  
  **الوصف:** قائمة الأفلام (مع ترقيم).
- `GET /api/movies/{movie}`  
  **الوصف:** تفاصيل فيلم.

#### مثال استجابة:
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

---

### المراجعات | Reviews
- `GET /api/movies/{movie}/reviews`  
  **الوصف:** كل مراجعات الفيلم.
- `GET /api/movies/{movie}/reviews/{review}`  
  **الوصف:** مراجعة محددة.
- `POST /api/movies/{movie}/reviews`  
  **الوصف:** إضافة مراجعة (يتطلب توكن).
  **المتطلبات:** rating, comment
- `PUT /api/movies/{movie}/reviews/{review}`  
  **الوصف:** تعديل مراجعة (يتطلب توكن).
- `DELETE /api/movies/{movie}/reviews/{review}`  
  **الوصف:** حذف مراجعة (يتطلب توكن).

#### مثال استجابة مراجعة:
```json
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
```

---

## الأخطاء الشائعة | Common Errors
- 401 Unauthorized: بيانات الدخول غير صحيحة أو التوكن مفقود.
- 403 Forbidden: ليس لديك صلاحية.
- 404 Not Found: لم يتم العثور على المورد.
- 422 Validation Error: بيانات غير صالحة.

---

> لمزيد من التفاصيل حول كل نقطة نهاية، راجع الكود أو استخدم أدوات مثل Postman/Scribe.