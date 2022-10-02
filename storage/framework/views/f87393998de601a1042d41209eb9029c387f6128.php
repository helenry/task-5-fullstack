

<?php $__env->startSection("container"); ?>
  <div class="row justify-content-center">
    <div class="col-md-5">
      <?php if(session()->has("success")): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo e(session("success")); ?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <?php if(session()->has("loginError")): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo e(session("loginError")); ?>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <main class="form-login">
        <h1 class="h3 mb-3 fw-normal">Please log in</h1>

        <form action="/login" method="post">
          <?php echo csrf_field(); ?>

          <div class="form-floating">
            <input type="email" value="<?php echo e(old("email")); ?>" name="email" class="form-control <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="name@example.com" autofocus required>
            <label for="email">Email</label>
            <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback mb-2">
                <?php echo e($message); ?>

              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback mb-2">
                <?php echo e($message); ?>

              </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
        </form>

        <small class="justify-content-center d-flex mt-3">Not signed up? <a href="/signup" class="text-decoration-none ms-1">Sign up now</a></small>
      </main>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/login/index.blade.php ENDPATH**/ ?>