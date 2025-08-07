<?php $__env->startSection('title', 'Add movies'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper" dir="ltr">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add movies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Add movies</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form action="<?php echo e(route('movies.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Movies Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="duration">duration</label>
                                <input type="number" id="duration" name="duration" class="form-control" value="<?php echo e(old('duration')); ?>"
                                    required>
                            </div>
                             
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" id="description" name="description" class="form-control" value="<?php echo e(old('description')); ?>"
                                    required>
                            </div>
                             <div class="form-group">
                                <label for="poster_url">poster</label>
                                <input type="url" id="poster" name="poster_url"aaccept="image/*" class="form-control" value="<?php echo e(old('poster_url')); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="trailer_url">trailer</label>
                                <input type="url" id="trailer_url" name="trailer_url"aaccept="video/*" class="form-control" value="<?php echo e(old('trailer_url')); ?>"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="movie_url">movie</label>
                                <input type="file" id="movie_url" name="movie_url"aaccept="video/*" class="form-control" value="<?php echo e(old('movie_url')); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="year">year</label>
                                <input type="number"  id="year" name="year" class="form-control"
                                    value="<?php echo e(old('year')); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="language">language</label>
                                <select id="language" name="language" class="form-control custom-select" required>
                                    <option selected disabled>Select one</option>
                                    <option value="Arabic" <?php echo e(old('language')=='Arabic' ? 'selected' : ''); ?>>Arabic
                                    </option>
                                    <option value="English" <?php echo e(old('language')=='English' ? 'selected' : ''); ?>>English
                                    </option>
                                    <option value="Franch" <?php echo e(old('language')=='Franch' ? 'selected' : ''); ?>>Franch
                                    </option>
                                
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="age_rating">age_rating</label>
                                <select id="age_rating" name="age_rating" class="form-control custom-select" required>
                                    <option selected disabled>Select one</option>
                                    <option value="G" <?php echo e(old('age_rating')=='G' ? 'selected' : ''); ?>>G
                                    </option>
                                    <option value="R" <?php echo e(old('age_rating')=='R' ? 'selected' : ''); ?>>R
                                    </option>
                                    <option value="NC-17" <?php echo e(old('age_rating')=='NC-17' ? 'selected' : ''); ?>>NC-17
                                    </option>
                                    <option value="PG-13" <?php echo e(old('age_rating')=='PG-13' ? 'selected' : ''); ?>>PG-13
                                    </option>
                                    <option value="PG" <?php echo e(old('age_rating')=='PG' ? 'selected' : ''); ?>>PG
                                    </option>
                                
                                    G,PG,PG-13,R,NC-17'
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Genre</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        
                            
                   
                        
                         <div class="card-body">
                            <label for="genres">genres</label>
                             <select name="genres[]" multiple required class="w-full border rounded px-3 py-2">
                                     <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($genre->id); ?>"
                                          <?php echo e(in_array($genre->id, old('genres', [])) ? 'selected' : ''); ?>>
                                                   <?php echo e($genre->name); ?>

                                         </option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           </select>
                                           <p class="text-sm text-gray-500 mt-1">اضغط</p>
        </div>

                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row">
                <div class="col-12">
                    <a href="<?php echo e(route('movies.index')); ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success float-right">Create movies</button>
                </div>
            </div>
        </form>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\mo\Focal-X_movie_platform\resources\views/content_admin/movies/create.blade.php ENDPATH**/ ?>