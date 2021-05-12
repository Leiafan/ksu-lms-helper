<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-sm-6">
            <div class="jumbotron">
                <form action="<?php echo e(route('admin.heading')); ?>" id="upload_heading" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <input class="form-control" name="name">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-block btn-secondary">Создать категорию</button>
                    </div>
                </form>
            </div>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#upload_heading').validate({
                        rules: {
                            name: {
                                required: true
                            }
                        }
                    });
                });
                jQuery.extend(jQuery.validator.messages, {
                    required: "Это поле обязательно"
                });
            </script>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/course.loc/blog/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>