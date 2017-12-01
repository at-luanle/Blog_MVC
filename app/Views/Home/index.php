<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BLOG MVC</title>
    <?php require_once(APP_PATH . 'Views/Layouts/asset_css.php');?>
  </head>

  <body>
    <section class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <?php require_once(APP_PATH . 'Views/Layouts/left_layout.php');?>
      </nav>

      <div style="padding-left: 700px;" >
        <?php require_once(APP_PATH . 'Views/Layouts/right_layout.php');?>
      </div>
    </section>
    <?php require_once(APP_PATH . 'Views/Layouts/asset_script.php');?>

  </body>

</html>
