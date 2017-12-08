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
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- display list post of user -->
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
              <?php echo $post["title"];?>
              </h2>
            </a>
            <p class="post-subtitle">
              <?php echo $post["description"];?>
            </p>

            <p class="post-meta">Posted by
            <a href="#"><?php echo $post['username'];?></a>
            on <?php echo $post["date_create"];?> <a href="/posts/delete?id=<?php echo $post["id"]?>">Delete</a>
          | <a href="/posts/edit?id=<?php echo $post["id"]?>">Edit</a>
          </p>
            <a href="/home/index">Comeback</a>
          </div>
        <hr>
      </div>
    </div>
  </div>

  <hr>
  <!-- Footer -->
  <?php require_once '../app/Views/Layouts/footer.php'?>
</body>
<!-- Display  -->
<?php require_once '../app/Views/Layouts/asset_footer.php'?>
