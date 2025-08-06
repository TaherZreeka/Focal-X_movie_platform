<?php $__env->startSection('content'); ?>
<style>
.small-box .icon {
    left: 10px !important;
    right: auto !important;
  }

</style>
<div class="content-wrapper" dir="ltr">
    <!-- Content Header (Page header) -->
    <div class="content-header d-flex justify-content-between align-items-center">
        <div class="container-fluid flex">
         <ol class="breadcrumb float-sm-left"style="text-align: right;">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                <div class="col-sm-6">

                    <h1 class="m-3 text-dark "style="text-align: left;">Dashboard</h1>
                </div>
                <div class="card-header p-0 position-relative mt-n4 m-3 z-index-2 m-3">
                <div class="alert alert-primary d-flex justify-content-center align-items-center mt-4" role="alert">
            <div class="text-capitalize m-0 text-center" style="font-size: 32px;">
         Welcome <?php echo e(Auth::user()->name); ?>

         <br> to the Movie Management Dashboard 🎬👋
              </div>

</div>
                </div>

        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row m-4 d-flex align-items-center justify-content-between">
                <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success ">
              <div class="inner d-flex flex-column align-items-start" style="direction: ltr;">
               <h3 ><?php echo e($userCount); ?></h3>
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="<?php echo e(route('admin.users.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
               <div class="inner d-flex flex-column align-items-start" style="direction: ltr;">
                <h3><?php echo e($movieCount); ?></h3>

                <p>Number of movies</p>
              </div>
              <div class="icon">
                <i class="ion ion-film-marker"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" >
                <div class="inner d-flex flex-column align-items-start" style="direction: ltr;">
                <h3><?php echo e($reviewCount); ?><sup style="font-size: 20px">%</sup></h3>

                <p> reviews</p>
              </div>
              <div class="icon">
                <i class="ion ion-star"></i>
              </div>
              <a href="#" class="small-box-footer">More info
                 <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
            </div>
             <div class="card mx-3">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
          <h1 class="text-white text-capitalize m-0"style="font-size: 32px;"> Latest updates</h1>
        </div>
      </div>
             </div>
             <div class="card my-3">
  <div class="card-body">
    
     <div class="float-sm-left"style="text-align: right;">
  <h6 class="mb-0"><?php echo e($latestReview?->user?->name ?? 'لا يوجد تعليق'); ?> </h6>

</div>
    </div>

    <p class="mb-2 mx-2"><?php echo e($latestReview->comment); ?></p>
    <small class="text-muted mx-3">على الفيلم: <?php echo e($latestReview->movie->title); ?></small>
    <div class="mb-2 mx-3">
      <!-- تقييم بالنجوم -->
     <p class="mb-1">
    <?php for($i = 1; $i <= 5; $i++): ?>
        <?php if($i <= $latestReview->rating): ?>
            <i class="fas fa-star text-warning"></i> 
        <?php else: ?>
            <i class="far fa-star text-warning"></i> 
        <?php endif; ?>
    <?php endfor; ?>
</p>
    </div>
  </div>
</div>
<?php if($latestMovie): ?>
<div class="card my-4 mx-3">
    <div class="card-header ">
        <h4>🎬 Latest Movie Release</h4>
    </div>
    <div class="card-body d-flex flex-column align-items-end">
        <div class="float-sm-left"style="text-align: right;">
        <h5 class="card-title"><?php echo e($latestMovie->title); ?></h5>
        </div>
        <br>
        <p class="card-text"><?php echo e(Str::limit($latestMovie->description, 150)); ?></p>

        <?php if($latestMovie->poster): ?>
            <img src="<?php echo e(asset('storage/' . $latestMovie->poster)); ?>" alt="<?php echo e($latestMovie->title); ?>" class="img-fluid" style="max-height: 300px;">
        <?php endif; ?>

        <p class="mt-2"><strong>Release Date:</strong> <?php echo e($latestMovie->release_date); ?></p>
        
    </div>
</div>
<?php endif; ?>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\rag\focla-x\Focal-X_movie_platform\resources\views/content_admin/dashboard.blade.php ENDPATH**/ ?>