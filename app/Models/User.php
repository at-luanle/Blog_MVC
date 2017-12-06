<?php

namespace App\Models;

class User extends Model
{
    protected $table = 'users';

    public function insert( $fullname, $username , $avatar, $password)
    {
       $sql  = "INSERT INTO $this->table (fullname, username, avata, password)
       VALUES ('$fullname', '$username', '$avatar', $password)";
       $stmt = static::$db->prepare($sql);
       $stmt->execute();
    }

    public function login( $username, $password)
    {
      $sql  = "SELECT username FROM $this->table WHERE username = '$username' AND password = '$password'";
      $stmt = static::$db->prepare($sql);
      $stmt->execute();
      $user = $stmt->fetch();
      return $user;
    }

}
