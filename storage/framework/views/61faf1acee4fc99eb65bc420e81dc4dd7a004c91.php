<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Mynameis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === 'Home') ? 'active' : ''); ?>"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === 'About') ? 'active' : ''); ?>" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo e(($title === 'Blog') ? 'active' : ''); ?>" href="/blog">Blog</a>
        </li>

        <?php if(auth()->guard()->check()): ?>
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Welcome <?php echo e(auth()->user()->name); ?>

  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><form action="/logout" method=post>
      <?php echo csrf_field(); ?>
      <button type="submit" class="dropdown-item">Logout</button>
    <!-- <a class="dropdown-item" href="/logout">Logout</a> -->
    </form></li>


    <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
  </ul>
</div>
        <?php else: ?>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a href="/login" class="nav-link" <?php echo e(($active === 'login') ? 'active' : ''); ?>><i class="bi bi-box-arrow-in-right"></i> Login</a> 
            </li>

        </ul> 
        <?php endif; ?>
        
        
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav><?php /**PATH C:\Users\Johnny\Documents\New folder\new\resources\views/partials/navbar.blade.php ENDPATH**/ ?>