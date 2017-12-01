<?php

namespace App\Controllers;

use App\Models\Model;

class HomeController extends Controller
{
    public function index()
    {
    	return view('Home.index');
    }

}
