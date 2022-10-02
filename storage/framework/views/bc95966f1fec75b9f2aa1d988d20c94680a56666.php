

<?php $__env->startSection("container"); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2><?php echo e($article->title); ?></h2>
        <p>By <a href="/articles?user<?php echo e($article->user->username); ?>" class="text-decoration-none"><?php echo e($article->user->name); ?></a> in <a href="/articles?category=<?php echo e($article->category->slug); ?>" class="text-decoration-none"><?php echo e($article->category->name); ?></a></p>

        <img src="https://images.unsplash.com/photo-1470075801209-17f9ec0cada6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1587&q=80" class="img-fluid" width="800" alt="">

        <article class="my-3">
          <?php echo $article->content; ?>

        </article>

        <a href="/articles" class="d-block mt-5 mb-4">Back to Articles</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/article.blade.php ENDPATH**/ ?>