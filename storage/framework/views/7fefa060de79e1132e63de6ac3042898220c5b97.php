

<?php $__env->startSection("container"); ?>
  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="mb-4">
      <h2>
        <a href="/articles/<?php echo e($article->slug); ?>"><?php echo e($article->title); ?></a>
      </h2>

      <p>By <a href="/users/<?php echo e($article->user->username); ?>" class="text-decoration-none"><?php echo e($article->user->name); ?></a> in <a href="/categories/<?php echo e($article->category->slug); ?>" class="text-decoration-none"><?php echo e($article->category->name); ?></a></p>

      <p><?php echo e($article->excerpt); ?></p>
    </article>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/category.blade.php ENDPATH**/ ?>