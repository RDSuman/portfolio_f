<?php require_once('../../../private/initialize.php'); ?>
<?php include(INCLUDE_PATH_ADM.'/header.php'); ?>


<?php include(INCLUDE_PATH_ADM.'/navigation.php'); ?>

<?php include(INCLUDE_PATH_PUB.'/about.php'); ?>
<div class="row">
  <div class="col-md-12 text-center">
    <button type="button" class="btn btn-lg btn-warning" name="Edit"><a href="<?php echo h(url_for('/admin/about/edit.php')); ?>">Edit</a></button>
  </div>
</div>

<?php include(INCLUDE_PATH_ADM.'/footer.php'); ?>
