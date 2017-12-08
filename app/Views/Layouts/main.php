<?use App\Core\Session;?>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <!-- display message delete succss -->
      <p>
      </p>
      <!-- display list post of user -->
      <?php foreach ( $posts as $post) : ?>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
            <a href="/posts/detail?id=<?php echo $post['id'];?>"><?php echo $post["title"];?></a>
            </h2>
          </a>
          <p class="post-subtitle">
            <a href="/posts/detail?id=<?php echo $post['id'];?>"><?php echo $post["description"];?></a>
          </p>

          <p class="post-meta">Posted by
          <a href="#"><?php echo $post['username'];?></a>
          on <?php echo $post["date_create"];?></p>
        </div>
      <?php endforeach ?>
      <hr>
      <div class="pagination">
        <?php for ($i = 1; $i <= $amount_page; $i++):?>
          <p><a href="/home/index?page=<?php echo $i;?>" style="text-decoration:none"> Page  <?php if($i == $amount_page) { echo $i; } else { echo $i.'-';} ?> </a></p>
        <?php endfor?>
      </div>
    </div>
  </div>
</div>
