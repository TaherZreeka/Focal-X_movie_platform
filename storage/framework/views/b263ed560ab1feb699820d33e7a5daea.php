

<?php $__env->startSection('title', 'تقرير الأفلام'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>تقرير الأفلام</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="/home">الرئيسية</a></li>
            <li class="breadcrumb-item active">تقرير الأفلام</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <!-- الأفلام الأعلى مشاهدة -->
    <div class="card mb-4">
      <div class="card-header bg-info">
        <h3 class="card-title text-white">الأفلام الأعلى مشاهدة</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped text-center">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>عنوان الفيلم</th>
              <th>عدد المشاهدات</th>
              <th>اللغة</th>
              <th>سنة الإصدار</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $mostViewed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($movie->title); ?></td>
                <td><?php echo e($movie->views); ?></td>
                <td><?php echo e($movie->language); ?></td>
                <td><?php echo e($movie->year); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="5" class="text-muted">لا توجد بيانات مشاهدة حالياً.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- الأفلام الأعلى تقييماً -->
    <div class="card">
      <div class="card-header bg-success">
        <h3 class="card-title text-white">الأفلام الأعلى تقييماً</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped text-center">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>عنوان الفيلم</th>
              <th>متوسط التقييم</th>
              <th>اللغة</th>
              <th>سنة الإصدار</th>
            </tr>
          </thead>
          <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $topRated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($movie->title); ?></td>
                <td><?php echo e(number_format($movie->ratings_avg_rating, 1)); ?></td>
                <td><?php echo e($movie->language); ?></td>
                <td><?php echo e($movie->year); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <tr>
                <td colspan="5" class="text-muted">لا توجد تقييمات حالياً.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>

  </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Focal-X_movie_platform\resources\views/admin/reports/index.blade.php ENDPATH**/ ?>