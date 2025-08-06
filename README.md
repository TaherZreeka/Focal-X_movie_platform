# Movie Platform Management System

نظام إدارة منصة أفلام متكامل يتيح للمستخدمين استعراض الأفلام، تقييمها، وكتابة مراجعات، مع لوحة تحكم للإدارة ومديري المحتوى.

## :rocket: فكرة المشروع
نظام ويب متكامل لإدارة منصة أفلام، يتيح للمستخدمين:
- التسجيل وتسجيل الدخول.
- استعراض قائمة الأفلام وتفاصيلها.
- كتابة مراجعات وتقييمات.
- لوحة تحكم للإدارة ومديري المحتوى لإدارة الأفلام، الأنواع، العروض، والمستخدمين.

## :gear: المتطلبات
- PHP >= 8.2
- Composer
- Laravel 12.x
- قاعدة بيانات MySQL أو SQLite
- Node.js (لتشغيل الواجهة الأمامية)

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
- **مدير (admin):** إدارة المستخدمين، التقارير، كل شيء.
- **مدير محتوى (content):** إدارة الأفلام، العروض، الأنواع، مراجعة التقييمات.
- **مستخدم (user):** استعراض الأفلام، كتابة مراجعات وتقييمات.

## :file_folder: بنية قاعدة البيانات (أهم الجداول)
- **users:** id, name, email, password, role
- **movies:** id, title, genre_id, year, duration, language, poster_url, description, trailer_url, age_rating, views, movie_url
- **reviews:** id, user_id, movie_id, rating, comment, approved
- **genres:** id, name

## :link: روابط مهمة
- لوحة تحكم المدير: `/admin`
- لوحة تحكم مدير المحتوى: `/content_admin`
- استعراض الأفلام: `/movies`

## :book: توثيق API (مختصر)

### التسجيل وتسجيل الدخول
- `POST /api/register` تسجيل مستخدم جديد
- `POST /api/login` تسجيل الدخول
- `POST /api/logout` تسجيل الخروج (يتطلب توكن)

### الأفلام
- `GET /api/movies` قائمة الأفلام (مع ترقيم)
- `GET /api/movies/{movie}` تفاصيل فيلم

### المراجعات
- `GET /api/movies/{movie}/reviews` كل مراجعات الفيلم
- `GET /api/movies/{movie}/reviews/{review}` مراجعة محددة
- `POST /api/movies/{movie}/reviews` إضافة مراجعة (يتطلب توكن)
- `PUT /api/movies/{movie}/reviews/{review}` تعديل مراجعة (يتطلب توكن)
- `DELETE /api/movies/{movie}/reviews/{review}` حذف مراجعة (يتطلب توكن)

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

> لمزيد من التفاصيل حول نقاط النهاية، راجع ملف التوثيق الكامل أو استخدم أدوات مثل Postman/Scribe.
