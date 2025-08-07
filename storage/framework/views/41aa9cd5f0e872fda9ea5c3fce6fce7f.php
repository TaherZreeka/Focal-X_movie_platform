<!-- Navbar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<nav class="main-header navbar navbar-expand navbar-light bg-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav me-auto mx-3">
       <li class="nav-item">
    <a class="nav-link text-dark bg-white rounded-circle d-flex align-items-center justify-content-center"
       data-widget="pushmenu"
       href="#"
       style="width: 38px; height: 38px;">
       <i class="fas fa-bars" style="font-size: 24px; color: rgb(87, 87, 87);"></i>
    </a>
</li>
        
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto-navbav">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            </li>
            <?php endif; ?>

            <?php if(Route::has('register')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            </li>
            <?php endif; ?>
            <?php else: ?>
            

                
            </li>
            <?php endif; ?>
        </ul>
    </ul>
</nav>
<!-- /.navbar -->
<?php /**PATH C:\mo\Focal-X_movie_platform\resources\views\content_admin\layout\navbar.blade.php ENDPATH**/ ?>