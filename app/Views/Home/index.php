<?php use App\Core\Session;?>
<?php
  if(!isset($_GET["page"])){
    $_GET["page"] = 1;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="/css/clean-blog.min.css" rel="stylesheet">

  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <?php  if (!Session::get('user_name')) { ?>
                <a class="nav-link" href="/users/register">Register</a>
            <?php }?>
                <a class="nav-link" href="/users/register" style="display:none">Register</a>
          </li>
          <li class="nav-item">
            <?php  if (!Session::get('user_name')) { ?>
                <a class="nav-link" href="/users/login">Login</a>
            <?php }?>
                <a class="nav-link" href="/users/login" style="display:none">Login</a>
          </li>
          <li class="nav-item">
            <?php  if (Session::get('user_name')) { ?>
                <a class="nav-link" href="/posts/add_post">Add Post</a>
            <?php }?>
                <a class="nav-link" href="/posts/add_post" style="display:none">Add Post</a>
          </li>
          <li class="nav-item">
            <?php  if (Session::get('user_name')) { ?>
                <a class="nav-link" href="/users/logout">Logout</a>
                      <?php }?>
                <a class="nav-link" href="/posts/add_post" style="display:none">Add Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts/add_post">
            <?php if (Session::get('user_name')) {
                  echo Session::get('user_name');
                }
                else {
                  echo "";
                }
              ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Clean Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- display list post of user -->
        <?php foreach ( $posts as $post) : ?>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
              <?php echo $post["title"];?>
              </h2>
            </a>
            <p class="post-subtitle">
              <?php echo $post["description"];?>
            </p>

            <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on <?php echo $post["date_create"];?></p>
          </div>
        <?php endforeach ?>
        <hr>

        <div class="pagination">
          <?php for ($i = 1; $i <= $amount_page; $i++):?>
            <p><a href="/home/index?page=<?php echo $i;?>">   Page  <?php echo $i; ?> </a></p>
          <?php endfor?>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
</body>

</html>
