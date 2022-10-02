

<?php $__env->startSection("container"); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <a href="/dashboard/articles" class="btn btn-success my-4"><span data-feather="arrow-left"></span> Back to my posts</a>
        <a href="/dashboard/articles/<?php echo e($article->slug); ?>/edit" class="btn btn-warning my-4"><span data-feather="edit"></span> Edit post</a>
        <form action="/dashboard/articles/<?php echo e($article->slug); ?>" method="POST" class="d-inline">
          <?php echo method_field("delete"); ?>
          <?php echo csrf_field(); ?>
          <button class="btn btn-danger border-0" onclick="return confirm('Delete article?');"><span data-feather="trash"></span> Delete post</button>
        </form>

        <h2><?php echo e($article->title); ?></h2>

        <img src="https://images.unsplash.com/photo-1470075801209-17f9ec0cada6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1587&q=80" class="img-fluid mt-3" width="800" alt="">

        <article class="my-3">
          <?php echo $article->content; ?>

        </article>

        <a href="/dashboard/articles" class="d-block mt-5 mb-4">Back to Articles</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("dashboard.layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/dashboard/articles/show.blade.php ENDPATH**/ ?>