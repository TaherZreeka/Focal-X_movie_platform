<?php $__env->startSection('title', 'تقرير الأفلام'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
    <section class="content-header">
        <div class="container-fluid mx-4">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Film report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Film report </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content mx-3">

        <!-- الأفلام الأعلى مشاهدة -->
        <div class="card mb-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center"
                    style="height: 100px;">

                    <h3 class="text-white text-capitalize m-0" style="font-size: 32px;">Most watched movies</h3>
                </div>
                <div class="card-body p-4">
                    <table class="table table-striped text-center py-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Movie title</th>
                                <th>Number of views</th>
                                <th>the language</th>
                                <th>Year of release</th>
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
            <div class="card p-3">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center"
                        style="height: 100px;">

                        <h3 class="text-white text-capitalize m-0" style="font-size: 32px;">Highest rated movies</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> Movie title</th>
                                    <th>Average rating</th>
                                    <th>the language</th>
                                    <th> Year of release</th>
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
                                    <td colspan="5" class="text-muted">There are no reviews currently</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/admin/reports/index.blade.php ENDPATH**/ ?>