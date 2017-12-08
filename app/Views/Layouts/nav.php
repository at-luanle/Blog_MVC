<?php use App\Core\Session;?>
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
