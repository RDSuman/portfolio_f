<?php require_once('../../../private/initialize.php'); ?>
<?php include(INCLUDE_PATH_ADM.'/header.php'); ?>

<?php include(INCLUDE_PATH_ADM.'/navigation.php'); ?>



<div class="container">
  <h2>Portfolio list: </h2>
  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Header</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Ocean project</td>
        <td><button type="button" class="btn btn-warning"><a href="<?php echo url_for('/admin/portfolio/edit.php?id=' . h(u(1))); ?>">Edit</a></button></td>
        <td><button type="button" class="btn btn-danger"><a href="#">Delete</a></button></td>
      </tr>
    </tbody>
  </table>
</div>



<?php include(INCLUDE_PATH_ADM.'/footer.php'); ?>
