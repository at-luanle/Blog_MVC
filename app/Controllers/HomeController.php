<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\Post;

class HomeController extends Controller
{
  public function index()
  {
      if(!isset($_GET["page"])) {
        $_GET["page"] = 1;
        header("Location: home/index?page=1");
      }
      else {
        //amount page display / page
        $amount_one_page = 3;
        //display page current
        $page            = $_GET["page"];
        $post            = new Post();
        // create amount for pagination, display amount page
        // total row in posts
        $total_row_post  = count($post->all());
        //amount page cua page posts
        $amount_page     = ceil($total_row_post / $amount_one_page);
        //$from is amount row display at index
        $data['posts']   = $post->load_page_pagination($page, $amount_one_page);
        $data['amount_page']= $amount_page;

        return view('Home.index', $data);
      }
  }
}
