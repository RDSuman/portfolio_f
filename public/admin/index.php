<?php require_once('../../private/initialize.php'); ?>
<?php include(INCLUDE_PATH_ADM.'/header.php'); ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Suman Das</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="url_for('/admin/index.php');">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">About</a></li>
          <li><a href="#">Masthead</a></li>
          <li><a href="#">Portfolio</a></li>
        </ul>
      </li>
      <li><a href="#">Message</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<div class="container">
  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div>

<?php include(INCLUDE_PATH_ADM.'/footer.php'); ?>
