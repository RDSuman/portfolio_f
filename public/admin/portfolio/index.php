<?php require_once('../../../private/initialize.php'); ?>
<?php include(INCLUDE_PATH_ADM.'/header.php'); ?>

<?php include(INCLUDE_PATH_ADM.'/navigation.php'); ?>


<?php include(INCLUDE_PATH_PUB.'/portfolio.php'); ?>
<div class="row">
  <div class="col-md-12 text-center">
    <button type="button" class="btn btn-lg btn-warning" name="Edit"><a href="<?php echo url_for('/admin/portfolio/edit.php'); ?>">Edit</a></button>
  </div>
</div>

<<<<<<< HEAD
=======
<?php echo substr_count(__FILE__,'admin') ?>

>>>>>>> e0a6f1de97a30bba69dea014e51ef33ae5a4f1eb
<?php include(INCLUDE_PATH_ADM.'/footer.php'); ?>
