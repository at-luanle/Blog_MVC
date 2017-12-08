<?php require_once '../app/Views/Layouts/asset_header.php'?>
<body>
  <!-- Navigation -->
  <?php require_once '../app/Views/Layouts/nav.php'?>
  <!-- Page Header -->
  <?php require_once '../app/Views/Layouts/header.php'?>
    <div class="container">
      <div class="row">
        <h2>ADD NEWS POST</h2>
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-xs-4">Title</label>
            <div class="col-xs-8">
              <input type="text" name="title" class="form-control" placeholder="User Name"
              value="<?php echo post["title"];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">Description</label>
            <div class="col-xs-8">
              <textarea name="description" class="form-control" rows="10" id="comment"
              placeholder="<?php echo post["description"];?>"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">Date</label>
            <div class="col-xs-8">
              <input type="date" name="date_create" class="form-control" placeholder="Password"
              value="<?php echo post["date_create"];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-4">Author</label>
            <div class="col-xs-8">
              <select name="user" class="form-control">
                <option value="<?php echo post["user_id"];?>"><?php echo post["username"];?></option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
              <button type="submit" name="edit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
  </div>
  <!-- Footer -->
  <?php require_once '../app/Views/Layouts/footer.php'?>
</body>
<!-- Display  -->
<?php require_once '../app/Views/Layouts/asset_footer.php'?>
