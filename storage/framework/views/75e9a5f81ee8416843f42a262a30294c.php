<?php $__env->startSection('title', 'Edit movie'); ?>

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
  <!-- Header -->
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
        <form method="POST" action="<?php echo e(route('movies.update', $movie->id)); ?>"  enctype="multipart/form-data">
             
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
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
                                <label for="title">title</label>
                                <input type="text" id="title" name="title" class="form-control"value="<?php echo e(old('title',$movie->title)); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="duration">duration</label>
                                <input type="number" id="duration" name="duration" class="form-control" value="<?php echo e(old('duration',$movie->duration)); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" id="description" name="description" class="form-control" value="<?php echo e(old('description',$movie->description)); ?>"
                                    required>
                            </div>
                             <div class="form-group">
                                <label for="poster_url">poster</label>
                                <input type="url" id="poster" name="poster_url"accept="image/*" class="form-control" value="<?php echo e(old('poster_url',$movie->poster_url)); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="trailer_url">trailer</label>
                                <input type="url" id="trailer_url" name="trailer_url"accept="video/*" class="form-control" value="<?php echo e(old('trailer_url',$movie->trailer_url)); ?>"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="movie_url">movie</label>
                                <input type="url" id="movie_url" name="movie_url"accept="video/*" class="form-control" value="<?php echo e(old('movie_url',$movie->movie_url)); ?>"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="year">year</label>
                                <input type="number"  id="year" name="year" class="form-control"
                                    value="<?php echo e(old('year',$movie->year)); ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="language">language</label>
                                <select id="language" name="language" class="form-control custom-select" required>
                                    <option disabled <?php echo e(is_null($movie->language) ? 'selected' : ''); ?>>Select one</option>
                                    <option value="Arabic" <?php echo e($movie->language === 'Arabic' ? 'selected' : ''); ?>>Arabic</option>
                                    <option value="English" <?php echo e($movie->language === 'English' ? 'selected' : ''); ?>>English</option>
                                    <option value="Franch" <?php echo e($movie->language === 'Franch' ? 'selected' : ''); ?>>Franch</option>
                                    
                              
                                
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="age_rating">age_rating</label>
                                <select id="age_rating" name="age_rating" class="form-control custom-select" required>
                                    <option disabled <?php echo e(is_null($movie->age_rating) ? 'selected' : ''); ?>>Select one</option>
                                    <option value="PG-13" <?php echo e($movie->age_rating === 'PG-13' ? 'selected' : ''); ?>>PG-13</option>
                                    <option value="R" <?php echo e($movie->age_rating === 'R' ? 'selected' : ''); ?>>R</option>
                                    <option value="NC-17" <?php echo e($movie->age_rating === 'NC-17' ? 'selected' : ''); ?>>NC-17</option>
                                    <option value="G" <?php echo e($movie->age_rating === 'G' ? 'selected' : ''); ?>>G</option>
                                    <option value="PG" <?php echo e($movie->age_rating === 'PG' ? 'selected' : ''); ?>>PG</option>
                                    
                              
                                
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
                                          <?php echo e(in_array($genre->id,$selectGenres ) ? 'selected' : ''); ?>>
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
                    <button type="submit" class="btn btn-success float-right">save change</button>
                </div>
            </div>
        </form>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('content_admin.layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\mo\Focal-X_movie_platform\resources\views\content_admin\movies\edit.blade.php ENDPATH**/ ?>