<?php use App\Core\Session;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register User</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .example{
        margin: 20px;
    }
  </style>
</head>
<body>
  <div class="example">
    <div class="container">
      <div class="row">
        <h2>ADD NEWS POST</h2>
        <form class="form-horizontal" action="/posts/add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label class="control-label col-xs-2">Title</label>
            <div class="col-xs-10">
              <input type="text" name="title" class="form-control" placeholder="User Name"
              value="<?php if (!isset($_POST["title"])) {
                        echo Session::get('title');
                      }
                    ?>">
            </div>
            <?php if (Session::get('title') == '') {
                echo Session::get('error_title');
              }
              else {
                echo "";
              }
            ?>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-2">Description</label>
            <div class="col-xs-10">
              <textarea name="description" class="form-control" rows="10" id="comment"
              placeholder="<?php if (!isset($_POST["description"])) {
                        echo Session::get('description');
                      }
                    ?>"></textarea>
            </div>
            <?php if (Session::get('description') == '') {
                echo Session::get('error_description');
              }
              else {
                echo "";
              }
            ?>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-2">Date</label>
            <div class="col-xs-10">
              <input type="date" name="date_create" class="form-control" placeholder="Password"
              value="<?php if (!isset($_POST["date_create"])) {
                        echo Session::get('date_create');
                      }
                    ?>">
            </div>
            <?php if (Session::get('date_create') == '') {
                echo Session::get('error_date_create');
              }
              else {
                echo "";
              }
            ?>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-2">Author</label>
            <div class="col-xs-10">
              <select name="user" class="form-control">
                <?php foreach ($users as $user) : ?>
                <option value="<?php echo $user["id"];?>"><?php echo $user["username"];?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
              <button type="submit" name="Save" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
