<?php require_once('../../../private/initialize.php');

    if(!isset($_GET['id']))
    {
      redirect_to((url_for('/admin/portfolio/index.php')));
    }
    $id = $_GET['id'];
    if(is_post_request())
    {
      $args=$_POST['portfolio'];
      die(var_dump($args));
    }


 ?>



<?php include(INCLUDE_PATH_ADM.'/header.php'); ?>
<?php include(INCLUDE_PATH_ADM.'/navigation.php'); ?>
<div class="row">
  <div class="col">
    <div class="container">
      <form  action="edit.php" method="post">
          <?php include('form_field.php'); ?>
          <button type="submit" class="btn btn-success " name="button">Edit</button>
      </form>
    </div>
  </div>
</div>



<?php include(INCLUDE_PATH_ADM.'/footer.php'); ?>
