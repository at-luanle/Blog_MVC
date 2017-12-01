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
                <h2>Register User</h2>
                <form class="form-horizontal" action="/users/save_register" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-xs-2">Full Name</label>
                        <div class="col-xs-10">
                            <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">User Name</label>
                        <div class="col-xs-10">
                            <input type="text" name="username" class="form-control" placeholder="User Name">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="control-label col-xs-2">Avata</label>
                        <div class="col-xs-10">
                            <input type="file" name="avatar" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">Password</label>
                        <div class="col-xs-10">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
