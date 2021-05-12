<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row tm-row">
            <div class="col-lg-8 tm-post-col">
                <div class="tm-post-full">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-color-primary tm-post-title"><?php echo e($article->title); ?></h2>
                        <div class="col-12">
                            <hr class="tm-hr-primary tm-mb-55">
                            <img
                                src="/<?php echo e($article->image); ?>"
                                alt="Image" class="img-fluid" style="width: 500px;">
                        </div>
                        <p class="tm-mb-40"><?php echo e($article->created_at); ?>, опубликовано
                            пользователем <?php echo e($article->user->name); ?></p>
                        <p>
                        <?php echo e($article->description); ?>

                        <p>
                            <?php echo e($article->text); ?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php echo e(route('admin.moderate', $article->id)); ?>" class="mb-5 tm-comment-form" method="post">
            <div class="text-center">
                <?php echo csrf_field(); ?>
                <button class="btn-secondary" name="approve">Опубликовать</button>
                <button class="btn-outline-danger" name="delete">Удалить</button>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/course.loc/blog/resources/views/admin/article.blade.php ENDPATH**/ ?>