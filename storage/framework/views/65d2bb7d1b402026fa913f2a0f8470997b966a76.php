

<?php $__env->startSection("container"); ?>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Article</h1>
  </div>

  <div class="col-lg-8">
    <form method="POST" action="/dashboard/articles/<?php echo e($article->slug); ?>">
      <?php echo method_field("put"); ?>
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input required autofocus type="text" class="form-control <?php $__errorArgs = ["title"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" value="<?php echo e(old("title", $article->title)); ?>">
        <?php $__errorArgs = ["title"];
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
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input required type="text" class="form-control <?php $__errorArgs = ["slug"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="slug" name="slug" value="<?php echo e(old("slug", $article->slug)); ?>">
        <?php $__errorArgs = ["slug"];
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
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(old("category_id", $article->category_id) == $category->id): ?>
              <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
            <?php else: ?>
              <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <?php $__errorArgs = ["content"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input id="content" type="hidden" name="content" value="<?php echo e(old("content", $article->content)); ?>">
        <trix-editor input="content"></trix-editor>
      </div>
      
      <button type="submit" class="btn btn-primary mb-5">Update Article</button>
    </form>
  </div>
  
  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function() {
      fetch("/dashboard/articles/checkSlug?title=" + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener("trix-file-accept", function(e) {
      e.preventDefault();
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("dashboard.layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/dashboard/articles/edit.blade.php ENDPATH**/ ?>