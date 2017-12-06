<?php

namespace App\Models;

class Post extends Model
{
  protected $table = 'posts';

  public function insert ( $title, $description, $date_create, $user)
  {
    $sql  = "INSERT INTO $this->table ( title, description, date_create, user_id)
    VALUES ( '$title', '$description', '$date_create', $user)";
    $stmt = static::$db->prepare($sql);
    $stmt->execute();

    $post = $stmt->fetch();
    return $post;
  }
  public function load_page_pagination($from, $amount_one_page)
  {
    //select page, display page has limit from to amount need dislpay
    $sql  = "SELECT * FROM $this->table LIMIT $from, $amount_one_page";
    $stmt = static::$db->prepare($sql);
    $stml->execute();

    $posts = $stmt->fetchAll();
    return $posts;
  }
}
