<?php $__env->startSection('title', 'إضافة مسؤول محتوى'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-wrapper" dir="rtl">
    <section class="content-header ">
        <div class="container-fluid ">
            <div class="row m-2">
                <div class="col-sm-6">
                    <h1> Create Content Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Create Content Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content mx-3">
        <div class="card p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="w-100 bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-center align-items-center"
                style="height: 100px;">
                <h3 class="text-white text-capitalize m-0" style="font-size: 32px;">New content admin details</h3>
            </div>
            <form action="<?php echo e(route('admin.content.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email"> Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password </label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" class="form-control">
                            <option value="user">User</option>
                            <option value="content"> Content Admin</option>

                        </select>
                    </div>
                </div>

                <div class="card-footer text-left">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\focal x\Focal_X-Graduation-Project\Movie_Platform_Management_System\resources\views/admin/content/create.blade.php ENDPATH**/ ?>