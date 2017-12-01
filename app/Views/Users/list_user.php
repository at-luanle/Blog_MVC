<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>List All User</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>STT</th>
        <th>Avatar</th>
        <th>Full Name</th>
        <th>User Name</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ( $users as $key => $u ) :?>
          <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $u["avata"];?></td>
            <td><?php echo $u["fullname"];?></td>
            <td><?php echo $u["username"];?></td>
          </tr>
        <?php   endforeach ?>
    </tbody>
  </table>
</div>

</body>
</html>
