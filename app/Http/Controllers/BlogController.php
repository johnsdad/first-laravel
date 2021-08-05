<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
      public function index(){
         return view('index');
      }

      public function add(Request $request){

        $categories = DB::table('categories')->get();
        return view("add",['categories' => $categories]);
      }
}
