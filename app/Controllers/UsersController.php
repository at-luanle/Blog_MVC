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
    return view('Layouts.nav', $data);
  }

  //register user
  public function register()
  {
      return view('Users.register');
  }

  //save on database
  public function save_register()
  {
    if ( isset ($_POST["register"])) {
      $fullname     = $_POST["fullname"];
      $username     = $_POST["username"];

      $file_name    = $_FILES['avatar']['name'];
      $file_tmp     = $_FILES['avatar']['tmp_name'];
      $path_upload  = $_SERVER["DOCUMENT_ROOT"].'/img/'.$file_name;
      move_uploaded_file($file_tmp, $path_upload);

      $avata        = $file_name;
      $password     = $_POST["password"];
      $con_password = $_POST["con_password"];

      Session::set('fullname', $fullname);
      Session::set('username', $username);
      Session::set('password', $password);
      Session::set('con_password', $con_password);

      if ($fullname != '' && $username != '' && $password != '' && $con_password != '') {
        if ($password == $con_password) {
          $user = new User();

          if ( count($user->insert($fullname, $username, $avata, $password ) > 0)) {
            header("Location: /users/login");
          }
          else {
            Session::set("error_register", "Register has prolem");
            header("Location: /users/register");
          }
        }
        else {
          Session::set("error_dublicate_password", "Can password error not duplicate");
          header("Location: /users/register");
        }
      }
      else {
        Session::set("error_fullname", "You not yet enter full name");
        Session::set("error_username", "You not yet enter user name");
        Session::set("error_password", "You not yet enter password name");
        header("Location: /users/register");
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
      if (!empty($username) || !empty($password)) {
        if ($login) {
          Session::set('user_id', $login['id']);
          Session::set('user_name', $username);
          header("Location: /");
        }
        else {
          Session::set('errors_user', 'Errorr user name OR password');
          header("Location: /users/login");
        }
      }
      else {
        Session::set('username', $username);
        Session::set('password', $password);
        SESSION::set('enter_error_username', 'Enter user name');
        SESSION::set('enter_error_password', 'Enter password');
        header("Location: /users/login");
      }
    }
  }

  //function logout user
  public function logout()
  {
    Session::destroy();
    header("Location: /");
  }
}
