<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Model;
use App\Models\Post;

class PostsController extends Controller
{
    //dislpay post in page index with user when login
    public function add_post()
    {
      $user           = new User();
      $data['users']  = $user->all();
    	return view('Post.add_post', $data);
    }

    //add post
    public function add()
    {
      $post = new Post();
      if ( isset ( $_POST["Save"]) )
      {
        $title       = $_POST["title"];
        $description = $_POST["description"];
        $date        = $_POST["date_create"];
        $user        = $_POST["user"];

        $post_register = $post->insert($title, $description, $date, $user);
        if (isset($post_register)) {
          header("Location: /");
        }
        else {
          header("Location: /posts/add_post");
        }
      }
    }
}
