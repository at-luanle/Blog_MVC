<?php

namespace App\Models;

class Post extends Model
{
  protected $table = 'posts';

  public function insert ( $title, $description, $datecreate, $user)
  {
    $sql = "INSERT INTO $this->table ( title, description, data_create, user_id)
    VALUES ( :title, :description, :data_create, :user_id)";
    $stmt = static::$db->prepare($sql);

    $stmt->bindParam( ":title", $title);
    $stmt->bindParam( ":description", $description);
    $stmt->bindParam( ":data_create", $datecreate);
    $stmt->bindParam( ":user_id", $user);

    $stmt->execute();
  }
}
