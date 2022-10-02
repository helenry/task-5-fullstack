

<?php $__env->startSection("container"); ?>
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/articles">
        <?php if(request("category")): ?>
          <input type="hidden" name="category" value="<?php echo e(request("category")); ?>">
        <?php endif; ?>
        <?php if(request("user")): ?>
          <input type="hidden" name="user" value="<?php echo e(request("user")); ?>">
        <?php endif; ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search articles" aria-label="Search articles" aria-describedby="button-addon2" name="search" value="<?php echo e(request("search")); ?>" autocomplete="off">
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  <?php if($articles->count()): ?>
    <div class="card mb-3">
      <img src="https://images.unsplash.com/photo-1471180625745-944903837c22?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="/articles/<?php echo e($articles[0]->slug); ?>" class="text-decoration-none text-dark"><h3 class="card-title"><?php echo e($articles[0]->title); ?></h3></a>
        <p>
          <small class="text-muted">
            By
            <a href="/articles?user=<?php echo e($articles[0]->user->username); ?>" class="text-decoration-none">
              <?php echo e($articles[0]->user->name); ?>

            </a>
            in
            <a href="/articles?category=<?php echo e($articles[0]->category->slug); ?>" class="text-decoration-none">
              <?php echo e($articles[0]->category->name); ?>

            </a>
            <?php echo e($articles[0]->created_at->diffForHumans()); ?>

          </small>
        </p>
        <p class="card-text"><?php echo e($articles[0]->excerpt); ?></p>
        <a href="/articles/<?php echo e($articles[0]->slug); ?>" class="text-decoration-none btn btn-primary">Read more</a>
      </div>
    </div>
  
    <div class="container">
      <div class="row">
        <?php $__currentLoopData = $articles->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-4 mb-4">
            <div class="card">
              <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.75)">
                <a href="/articles?category=<?php echo e($article->category->slug); ?>" class="text-decoration-none text-white"><?php echo e($article->category->name); ?></a>
              </div>
              <img src="https://images.unsplash.com/photo-1569511166187-97eb6e387e19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1510&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <h2>
                  <a href="/articles/<?php echo e($article->slug); ?>" class="text-decoration-none"><?php echo e($article->title); ?></a>
                </h2>
                <p>By <a href="/articles?user=<?php echo e($article->user->username); ?>" class="text-decoration-none"><?php echo e($article->user->name); ?></a> <?php echo e($article->created_at->diffForHumans()); ?>

                </small></p>

                <p><?php echo e($article->excerpt); ?></p>

                <a href="/articles/<?php echo e($articles[0]->slug); ?>" class="btn btn-primary">Read more</a>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  <?php else: ?>
    <p class="text-center fs-4">No articles found</p>
  <?php endif; ?>

  <div class="d-flex justify-content-end">
    <?php echo e($articles->links()); ?>

  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/articles.blade.php ENDPATH**/ ?>