

<?php $__env->startSection("container"); ?>
  <p><?php echo e($name); ?></p>
  <p><?php echo e($email); ?></p>
  <img src="img/<?php echo e($image); ?>" class="img-thumbnail rounded-circle" width="200" alt="<?php echo e($name); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/about.blade.php ENDPATH**/ ?>