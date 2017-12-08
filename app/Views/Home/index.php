<?php use App\Core\Session;?>
<?php
  if(!isset($_GET["page"])){
    $_GET["page"] = 1;
  }
?>
<?php require_once '../app/Views/Layouts/asset_header.php'?>
<body>
  <!-- Navigation -->
  <?php require_once '../app/Views/Layouts/nav.php'?>
  <!-- Page Header -->
  <?php require_once '../app/Views/Layouts/header.php'?>
  <!-- Main Content -->
  <?php require_once '../app/Views/Layouts/main.php'?>
  <hr>
  <!-- Footer -->
  <?php require_once '../app/Views/Layouts/footer.php'?>
</body>
<!-- Display  -->
<?php require_once '../app/Views/Layouts/asset_footer.php'?>
