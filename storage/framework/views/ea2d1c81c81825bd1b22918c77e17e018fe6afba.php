<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <main class="container">
            <ul class="headings-ul">
                <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="headings-li"><a class="headings-li-a" name="<?php echo e($heading->id); ?>"
                                               href="<?php echo e(route('index.search',$heading->id)); ?>"><?php echo e($heading->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="row row-cols-1">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="col-md-12">
                        <hr class="tm-hr-primary">
                        <a href="<?php echo e(route ('article', [$article->id, 'en'])); ?>" class="effect-lily tm-post-link tm-pt-20">
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
                            <span class="tm-color-primary"><?php echo e(Counter::show('article',$article->id)); ?></span>
                            <span class="tm-color-primary"><?php echo e($article->created_at); ?></span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span><?php echo e(count($article->comments)); ?> comments</span>
                            <span>опубликовано <?php echo e($article->user->name); ?></span>
                        </div>
                    </article>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-paging-wrapper">
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <?php echo e($articles->links()); ?>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/mole.loc/blog/resources/views/admin/index_admin.blade.php ENDPATH**/ ?>