<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Model;
use App\Models\Post;

class PostsController extends Controller
{
    public function add_post()
    {
      $user = new User();
      $data['users'] = $user->all();
    	return view('Post.add_post', $data);
    }

    public function add()
    {
      $post = new Post();
      if ( isset ( $_POST["Save"]) )
      {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $date = $_POST["date"];
        $user =($_POST["user"]);

        if ( count( $post->insert($title, $description, $date, $user)) > 0){
          header("Location: home/index");
        }
        else {
          header("Location: /posts/add_post");
        }
      }
    }


}
