<ul class="headings-ul">
    <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="headings-li"><a class="headings-li-a" href=""><?php echo e($heading->name); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /var/www/course.loc/blog/resources/views/layouts/categories.blade.php ENDPATH**/ ?>