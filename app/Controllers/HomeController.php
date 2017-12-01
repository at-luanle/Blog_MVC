<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\Post;

class HomeController extends Controller
{
  public function index()
  {
    $post = new Post();
    $data['posts'] = $post->all();
    return view('Home.index', $data);
  }
}
