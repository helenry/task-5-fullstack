

<?php $__env->startSection("container"); ?>
  <article class="mb-4">
    <h2>
      <?php echo e($post->title); ?>

    </h2>
    <?php echo $post->body; ?>

  </article>

  <a href="/blog">Back to Blog</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/post.blade.php ENDPATH**/ ?>