<?php $__env->startSection('content'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&amp;display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

    <div class="container">
        <div class="row tm-row">
            <div class="col-lg-8 tm-post-col">
                <div class="tm-post-full">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-color-primary tm-post-title"><?php echo e($article->title); ?></h2>
                        <div class="col-12">
                            <hr class="tm-hr-primary tm-mb-55">
                            <img
                                src="https://images.ctfassets.net/hrltx12pl8hq/3MbF54EhWUhsXunc5Keueb/60774fbbff86e6bf6776f1e17a8016b4/04-nature_721703848.jpg?fit=fill&w=480&h=270"
                                alt="Image" class="img-fluid" style="width: 500px;">
                        </div>
                        <p class="tm-mb-40"><?php echo e($article->created_at); ?>, posted by <?php echo e($article->user->name); ?></p>
                        <p>
                        <?php echo e($article->description); ?>

                        <p>
                            <?php echo e($article->text); ?>

                        </p>
                        <span class="d-block text-right tm-color-primary">Creative . Design . Business</span>
                    </div>

                    <!-- Comments -->
                    <div>
                        <h2 class="tm-color-primary tm-post-title">Комментарии</h2>
                        <hr class="tm-hr-primary tm-mb-45">
                        <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                    <img
                                        src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80"
                                        alt="Image" class="mb-2 rounded-circle img-thumbnail"
                                        style="width:100px;height:100px;">
                                    <figcaption
                                        class="tm-color-primary text-center"><?php echo e($comment->user->name); ?></figcaption>
                                </figure>
                                <div>
                                    <p>
                                        <?php echo e($comment->text); ?>

                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="tm-color-primary">REPLY</a>
                                        <span class="tm-color-primary"><?php echo e($comment->created_at); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(route('comment.store')); ?>" class="mb-5 tm-comment-form" method="post">
                            <input type="hidden" name="article_id" value="<?php echo e($article->id or ''); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                            <?php echo e(csrf_field()); ?>

                            <h2 class="tm-color-primary tm-post-title mb-4">Ваш комментарий</h2>
                            <div class="mb-4">
                                <textarea class="form-control" name="text" rows="6"></textarea>
                            </div>
                            <div class="text-right">
                                <button class="tm-btn tm-btn-primary tm-btn-small">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <aside class="col-lg-4 tm-aside-col">
                <div class="tm-post-sidebar">
                    <hr class="mb-3 tm-hr-primary">
                    <h2 class="mb-4 tm-post-title tm-color-primary">Категории</h2>
                    <ul class="tm-mb-75 pl-5 tm-category-list">
                        <li><a href="#" class="tm-color-primary">Visual Designs</a></li>
                        <li><a href="#" class="tm-color-primary">Travel Events</a></li>
                        <li><a href="#" class="tm-color-primary">Web Development</a></li>
                        <li><a href="#" class="tm-color-primary">Video and Audio</a></li>
                        <li><a href="#" class="tm-color-primary">Etiam auctor ac arcu</a></li>
                        <li><a href="#" class="tm-color-primary">Sed im justo diam</a></li>
                    </ul>
                    <hr class="mb-3 tm-hr-primary">
                    <h2 class="tm-mb-40 tm-post-title tm-color-primary">Похожие посты</h2>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="https://cdn.pixabay.com/photo/2019/02/15/11/04/book-3998252__340.jpg" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">Duis mollis diam nec ex viverra scelerisque a sit
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="https://cdn.pixabay.com/photo/2019/02/15/11/04/book-3998252__340.jpg" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">Integer quis lectus eget justo ullamcorper
                                ullamcorper
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="https://cdn.pixabay.com/photo/2019/02/15/11/04/book-3998252__340.jpg" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary">Nam lobortis nunc sed faucibus commodo</figcaption>
                        </figure>
                    </a>
                </div>
            </aside>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/course.loc/blog/resources/views/user/article.blade.php ENDPATH**/ ?>