

<?php $__env->startSection("container"); ?>
  <div class="container">
    <div class="row">
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
          <a class="text-decoration-none text-white" href="/articles?category=<?php echo e($category->slug); ?>">
            <div class="card bg-dark text-white">
              <img src="https://images.unsplash.com/photo-1453791052107-5c843da62d97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img" alt="...">
              <div class="card-img-overlay d-flex align-items-center">
                <h3 class="text-center flex-fill fs-2">
                  <?php echo e($category->name); ?>

                </h3>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/categories.blade.php ENDPATH**/ ?>