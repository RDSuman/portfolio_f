
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo url_for('/admin/index.php'); ?>">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/admin/about/index.php'); ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/admin/masthead/index.php'); ?>">Masthead</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url_for('/admin/portfolio/index.php'); ?>">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Message</a>
      </li>
    </ul>
  </div>
</nav>
