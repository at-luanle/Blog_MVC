<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\Post;

class HomeController extends Controller
{
  //amount page display / page
  public function index()
  {
    if (!isset($_GET["page"])) {
      $_GET["page"] = 1;
    }
    else {
      $amount_one_page = 3;
      $post            = new Post();
      // create amount for pagination, display amount page
      // total row in posts
      $total_row_post  = count($post->all());
      //amount page cua page posts
      $amount_page     = ceil($total_row_post / $amount_one_page);
      $data['amount_page']= $amount_page;

      //$from is amount row display at index
      $from            = ($amount_page - 1) * $amount_one_page;
      $data['posts']   = $post->load_page_pagination($from, $amount_one_page);

      return view('Home.index', $data);
    }
  }
}
