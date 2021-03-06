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
                        <p class="tm-mb-40"><?php echo e($article->created_at); ?>, <?php echo app('translator')->getFromJson('article.published_by'); ?> <?php echo e($article->user->name); ?></p>
                        <p>
                        <?php echo e($article->description); ?>

                        <p>
                            <?php echo e($article->text); ?>

                        </p>
                        <span class="d-block text-left tm-color-primary">
                            <?php $__currentLoopData = $article->headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                #<?php echo e($heading->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </span>
                        <span
                            class="d-block text-right tm-color-primary"><?php echo e(Counter::showAndCount('article', $article->id)); ?></span>
                        <iframe width="600" height="500"
                                src="https://www.youtube.com/embed/UEFgW--0094" allowfullscreen>
                        </iframe>
                    </div>

                    <!-- Comments -->

                    <div id="comment_list">
                        <h2 class="tm-color-primary tm-post-title">Comments</h2>
                        <?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment tm-mb-45" id="end_form">
                                <figure class="tm-comment-figure">
                                    <figcaption
                                        class="tm-color-primary text-center"><?php echo e($comment->user->name); ?></figcaption>
                                </figure>
                                <div>
                                    <p>
                                        <?php echo e($comment->text); ?>

                                    </p>
                                    <div class="d-flex justify-content-between" style="margin-top: 60px;width: 470px;">
                                        <a href="#" class="tm-color-primary">Reply</a>
                                        <a href="#" class="tm-color-primary"
                                           style="float: right;margin-left: 20%;"><?php echo e($comment->created_at); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Login to comment')); ?></a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <div class="alert alert-success d-none" id="msg_div">
                                <span id="res_message"></span>
                            </div>
                            <form action="javascript:void(0)" method="post" id="comment_form" role="form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="article_id" id="article_id" value="<?php echo e($article->id); ?>">
                                <input type="hidden" name="user_id" id="user_id" value="<?php echo e(Auth::id()); ?>">
                                <div class="mb-4">
                                    <label for="text" class="tm-color-primary tm-post-title mb-4">Your comment</label>
                                    <textarea class="form-control" name="text" id="text" rows="6"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit"
                                            class="btn btn-success"
                                            id="create_comment_button">Send
                                    </button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            $('#comment_form').validate({
                                rules: {
                                    article_id: {
                                        required: true
                                    },
                                    user_id: {
                                        required: true
                                    },
                                    text: {
                                        required: true,
                                        rangelength: [5, 200]
                                    }
                                },
                                submitHandler: function () {
                                    var article_id = $('#article_id').val();
                                    var user_id = $('#user_id').val();
                                    var text = $('#text').val();
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $('#comment_form').html('????????????????..');
                                    $.ajax({
                                        url: "<?php echo e(route('comment.store')); ?>",
                                        method: "POST",
                                        dataType: 'json',
                                        cache: false,
                                        data: {
                                            _token: $("#csrf").val(),
                                            type: 1,
                                            article_id: article_id,
                                            user_id: user_id,
                                            text: text
                                        },
                                        success: function (response) {
                                            $('#create_comment_button').html('??????????????????');
                                            $('#res_message').show();
                                            $('#res_message').html(response.msg);

                                            document.getElementById('comment_form').reset();
                                            $('#comment_list').load(' #comment_list', {}, function () {});
                                            setTimeout(function () {
                                                $('#res_message').hide();
                                            }, 5000);
                                        }
                                    })
                                }
                            })
                        })
                        jQuery.extend(jQuery.validator.messages, {
                            required: "?????? ???????? ??????????????????????",
                            rangelength: jQuery.validator.format("?????????? ?????????????????? ???????????? ???????? ?? ???????????????? {0} - {1} ????????????????.")
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/mole.loc/blog/resources/views/article.blade.php ENDPATH**/ ?>