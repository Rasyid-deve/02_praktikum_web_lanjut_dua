<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
   public function index ($id) {
        echo "Halaman dengan ID";
        echo $id;
   }
}
