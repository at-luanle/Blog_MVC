<?php use App\Core\Session; ?>
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
                <h2>Login User</h2>
                <form class="form-horizontal" action="/users/save_login" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label class="control-label col-xs-2">User Name</label>
                        <div class="col-xs-10">
                            <input type="text" name="username" class="form-control" placeholder="User Name"
                             value="<?php if (Session::get("username") != "") { echo Session::get("username"); } else { echo "";}?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Password</label>
                        <div class="col-xs-10">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                            value="<?php if (Session::get("password") != "") {echo Session::get("password");} else {echo "";}?>"
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <?php if(Session::get("username") == '' || Session::get("password") == '') {
                                    echo "<span>".Session::get("enter_error_username")."</span>";
                                    echo "<span>".Session::get("enter_error_password")."</span>";
                                  }
                                  else {
                                    echo "";
                                  }
                            ?>
                            <span>
                              <?php 
                                echo Session::get('errors_user');
                              ?>

                            </span>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
