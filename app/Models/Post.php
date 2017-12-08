<?php

namespace App\Models;

class Post extends Model
{
  protected $table = 'posts';

  public function insert ( $title, $description, $date_create, $user_id)
  {
    $sql  = "INSERT INTO $this->table ( title, description, date_create, user_id)
    VALUES ( :title, :description, :date_create, :user_id)";
    $stmt = static::$db->prepare($sql);
    $stmt->bindValue(":title", $title);
    $stmt->bindValue(":description", $description);
    $stmt->bindValue(":date_create", $date_create);
    $stmt->bindValue(":user_id", $user_id);
    $stmt->execute();

    $post = $stmt->fetch();
    return $post;
  }

  public function update ($id, $title, $description, $date_create, $user_id)
  {
    $sql  = "UPDATE $this->table
            SET title        = :tilte,
                description  = :description,
                date_create  = :date_create,
                user_id      = :user_id
            WHERE id = :id";
    $stmt = static::$db->prepare($sql);
    $stmt->bindValue(":title", $title);
    $stmt->bindValue(":description", $description);
    $stmt->bindValue(":date_create", $date_create);
    $stmt->bindValue(":user_id", $user_id);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    $post = $stmt->fetch();
    return $post;
  }

  public function load_page_pagination($page, $amount_one_page)
  {
    //select page, display page has limit from to amount need dislpay
    $from = ($page -1) * $amount_one_page;

    $sql  = "SELECT *, users.username as username FROM $this->table join users on posts.user_id = users.id
    ORDER BY date_create desc LIMIT $from, $amount_one_page " ;
    $stmt = static::$db->prepare($sql);
    $stmt->execute();

    $posts = $stmt->fetchAll();
    return $posts;
  }

  public function find_by_id($id)
  {
    $sql  = "SELECT *, users.username as username
    FROM $this->table join users on posts.user_id = users.id WHERE posts.id = :id";
    $stmt = static::$db->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    $post = $stmt->fetch();
    return $post;
  }

  public function delete($id)
  {
    $sql  = "DELETE FROM $this->table WHERE id = '$id'";
    $stmt = static::$db->prepare($sql);
    $stmt->execute();
  }
}
