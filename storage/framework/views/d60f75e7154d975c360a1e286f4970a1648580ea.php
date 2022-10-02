<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/">SBwL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "Simple Blog with Laravel") ? "active" : ""); ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "About") ? "active" : ""); ?>" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "Articles") ? "active" : ""); ?>" href="/articles">Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === "Categories") ? "active" : ""); ?>" href="/categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <?php if(auth()->guard()->check()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, <?php echo e(auth()->user()->name); ?>

            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  <?php echo csrf_field(); ?>
                  
                  <button class="dropdown-item" type="submit">
                    <i class="bi bi-box-arrow-right"></i> Log Out
                  </button>
                </form>
              </li>
            </ul>
          </li>
        <?php else: ?>
            <li class="nav-item">
              <a href="/login" class="nav-link <?php echo e(($title === "Log In") ? "active" : ""); ?>"><i class="bi bi-box-arrow-in-right"></i> Log In</a>
            </li>
            <li class="nav-item">
              <a href="/signup" class="nav-link <?php echo e(($title === "Sign Up") ? "active" : ""); ?>"> Sign Up</a>
            </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav><?php /**PATH D:\Documents\Belajar\Coding\Framework\Laravel\coba\resources\views/partials/navbar.blade.php ENDPATH**/ ?>