<?php $__env->startSection('title', 'review Management'); ?>
<?php $__env->startSection('content'); ?>

<div class="content-wrapper "dir="ltr">
<div class="container-fluid">
     <div class="card-header d-flex align-items-center ">
     <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left"style="text-align: right;">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">reviews </li>
          </ol>
        </div>
     </div>
      <div class="card">
   <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center" style="height: 100px;">
                <h6 class="text-white text-capitalize m-0"style="font-size: 32px;">reviews</h6>
              </div>
            </div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if($reviews->count()): ?>
     <div class="container-fluid">
    <div class="table-responsive transition-table" id="reviewTableWrapper">
        <table class="table table-bordered table-striped">
            <thead class=" text-center">
                <tr>
                    <th>movie</th>
                    <th>user</th>
                    <th>review</th>
                    <th>the condition</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class=" text-center">
                    <td><?php echo e($review->movie->title ?? 'unknown'); ?></td>
                    <td><?php echo e($review->user->name ?? ' unknown'); ?></td>
                    <td><?php echo e($review->rating); ?></td>
                    <td>
                        <?php if($review->approved): ?>
                            <span class="badge bg-success"> approved</span>
                        <?php else: ?>
                            <span class="badge bg-warning text-dark">Not approved</span>
                        <?php endif; ?>
                    </td>
                    <td class=" text-center">
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <?php if(!$review->approved): ?>
                        <form action="<?php echo e(route('reviews.approve', $review)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>

                            <button type="submit" class="btn btn-sm btn-success mx-2 "><i class="fas fa-check"></i></button>
                        </form>
                        <?php endif; ?>


                        <?php if($review->approved): ?>
                        <form action="<?php echo e(route('reviews.reject', $review)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            
                            <button type="submit" class="btn btn-sm btn-warning mx-2"><i class="fas fa-times"></i></button>
                        </form>
                        <?php endif; ?>


                        <form action="<?php echo e(route('reviews.destroy', $review)); ?>" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete the rating?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger mx-2"><i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
     </div>
        <?php echo e($reviews->links()); ?>


    <?php else: ?>
        <p>There are no reviews currently.</p>
    <?php endif; ?>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/content_admin/reviews/index.blade.php ENDPATH**/ ?>