<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Model;


class UsersController extends Controller
{
    public function show($id)
    {
        $data['id'] = $id;
        view('Users.show', $data);
    }

    public function get_user()
    {
      $user = new User();
      $data['users'] = $user->all();
      return view('Users.list_user', $data);
    }

    public function register(){
        return view('Users.register');
    }

    public function save_register()
    {
      $fullname = $_POST["fullname"];
      $username = $_POST["username"];

      $file_name = $_FILES['avatar']['name'];
      $file_tmp =$_FILES['avatar']['tmp_name'];
      $path_upload = $_SERVER["DOCUMENT_ROOT"].'/img/'.$file_name;
      move_uploaded_file($file_tmp, $path_upload);

      $avata = $file_name;
      $password = $_POST["password"];

      if( isset ($_POST["register"])){
        $user = new User();

        if( count($user->insert($fullname, $username, $avata, $password ) > 0)) {
          header("Location: /users/get_user");
        }
        else {
          echo "failture";
        }
      }
    }

    public function login()
    {
      return view('Users.login');
    }

    public function save_login()
    {
      $username = $_POST["username"];
      $password = $_POST["password"];
      if(isset($_POST["login"]))
      {
        $user = new User();
        $loUser = $user->login($username, $password);
        if(!empty($username) && empty(!$password)){
          if(count($loUser) > 0)
          {
              header("Location: /users/get_user");
          }
          else {
              header("Location: /users/login");
          }
        }
        else {
          echo "Enter Value";
        }
      }
    }
}
