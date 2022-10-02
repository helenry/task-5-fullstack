

<?php $__env->startSection("container"); ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Articles</h1>
  </div>

  <?php if(session()->has("success")): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo e(session("success")); ?>

      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/articles/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create new post</a>

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($article->title); ?></td>
            <td><?php echo e($article->category->name); ?></td>
            <td>
              <a href="/dashboard/articles/<?php echo e($article->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
              <a href="/dashboard/articles/<?php echo e($article->slug); ?>/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form action="/dashboard/articles/<?php echo e($article->slug); ?>" method="POST" class="d-inline">
                <?php echo method_field("delete"); ?>
                <?php echo csrf_field(); ?>
                <button class="badge bg-danger border-0" onclick="return confirm('Delete article?');"><span data-feather="trash"></span></button>
              </form>
            </td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("dashboard.layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/dashboard/articles/index.blade.php ENDPATH**/ ?>