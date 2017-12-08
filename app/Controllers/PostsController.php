<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Model;
use App\Models\Post;
use App\Core\Session;

class PostsController extends Controller
{
  //dislpay post in page index with user when login
  public function add_post()
  {
    $user           = new User();
    $data['users']  = $user->all();
  	return view('Post.add_post', $data);
  }

  //display detail Post
  public function detail()
  {
    $id           = $_GET["id"];
    $post         = new Post();
    $data['post'] = $post->find_by_id($id);
    return view('Post.detail', $data);
  }

  //add post
  public function add()
  {
    if ( isset ( $_POST["Save"]) ){
      $title       = $_POST["title"];
      $description = $_POST["description"];
      $date        = $_POST["date_create"];

      $date_format = date("Y-m-d", strtotime($date));
      $user        = $_POST["user"];

      Session::set('title', $title);
      Session::set('description', $description);
      Session::set('date_create', $date);

      $post = new Post();
      $add_post = $post->insert($title, $description, $date_format, $user);
      if ($title != '' && $description != '' && $date != '') {
        if (isset($add_post)) {
          header("Location: /");
        }
        else {
          header("Location: /posts/add_post");
        }
      }
      else {
        Session::set('error_title', 'Enter title');
        Session::set('error_description', 'Enter description');
        Session::set('error_date_create', 'Enter date');
        header("Location: /posts/add_post");
      }
    }
  }

  //delete post by id and User
  public function delete()
  {
    $id      = $_GET["id"];
    $post    = new Post();
    if ($post->delete($id)) {
      header("Location: /");
    } else {
      Session::set('error_delete_post', 'Delete Failture a Post');
      header("Location: /");
    }
  }

  //display form edit post
  public function edit()
  {
    $id           = $_GET["id"];
    $post         = new Post();
    $data['post'] = $post->find_by_id($id);
    return view("Post.edit", $data);
  }

  //edit post
  public function update()
  {



  }

}
