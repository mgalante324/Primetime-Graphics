<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
    public function index() {
      return view('pages.index');
    }

    public function portfolio() {
      $categories = Category::all();
      return view('pages.portfolio')->with('categories', $categories);;
    }

    public function contact() {
      return view('pages.contact');
    }
}
