
<div class="container">
    <?php foreach ( $posts as $post) : ?>
    <h1><?php echo $post["title"];?></h1>
      <p><?php echo $post["description"];?></p>
      <p><?php echo $post["data_create"];?></p>
  <?php endforeach ?>
</div>
