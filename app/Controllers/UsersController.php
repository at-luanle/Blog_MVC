<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Model;
use App\Core\Session;


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
      return view('Home.index', $data);
    }

    //register user
    public function register()
    {
        return view('Users.register');
    }

    //save on database
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

      if ( isset ($_POST["register"])) {
        $user = new User();

        if ( count($user->insert($fullname, $username, $avata, $password ) > 0)) {
          header("Location: /home/index");
        }
        else {
          echo "failture";
        }
      }
    }

    //display login page
    public function login()
    {
      return view('Users.login');
    }

    //login a user
    public function save_login()
    {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $user = new User();
      $login = $user->login($username, $password);
      if (isset($_POST["login"])) {
        if (empty($username) && empty($password)) {
          if ($login) {
              Session::set('user_name', $username);
              header("Location: /");
          }
          else {
              header("Location: /users/login");
          }
        }
        else {
          SESSION::set('error_username', 'enter value');
          SESSION::set('error_password', 'enter value');
          header("Location: /users/login");
        }
      }
    }

    public function logout()
    {
      Session::destroy();
      header("Location: /");
    }
}
