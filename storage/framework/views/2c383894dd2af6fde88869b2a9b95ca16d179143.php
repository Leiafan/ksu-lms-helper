<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row row-cols-1">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article class="col-md-12">
                    <hr class="tm-hr-primary">
                    <a href="<?php echo e(route ('moderator.article', [$article->id])); ?>" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="/<?php echo e($article->image); ?>"
                                 alt="Image" class="img-fluid" style="width: 500px;">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo e($article->title); ?></h2>
                    </a>
                    <p class="tm-pt-30">
                        <?php echo e($article->description); ?>

                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary"><?php echo e($article->created_at); ?></span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span><?php echo e(count($article->comments)); ?> comments</span>
                        <span>by <?php echo e($article->user->name); ?></span>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('moderator.layouts.app_moderator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/course.loc/blog/resources/views/moderator/approve_article.blade.php ENDPATH**/ ?>