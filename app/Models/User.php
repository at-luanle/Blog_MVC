<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'users';

    public function insert( $fullname, $username , $avatar, $password)
    {
       $sql = "INSERT INTO $this->table (fullname, username, avata, password)
       VALUES (:fullname, :username, :avata, :password)";

       $stmt = static::$db->prepare($sql);
       $stmt->bindParam(":fullname", $fullname);
       $stmt->bindParam(":username", $username);
       $stmt->bindParam(":avata", $avatar);
       $stmt->bindParam(":password", $password);

       $stmt->execute();
    }

    public function login( $username, $password)
    {
      $sql = "SELECT * FROM $this->table WHERE username = :username AND password = :password";
      $stmt = static::$db->prepare($sql);
      $stmt->bindParam( ":username", $username);
      $stmt->bindParam( ":password", $password);

      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }

}
