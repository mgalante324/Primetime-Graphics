<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;

class PagesController extends Controller
{
    public function index() {
      return view('pages.index');
    }

    public function portfolio() {
      $categories = Category::all();
      return view('pages.portfolio')->with('categories', $categories);
    }

    public function contact() {
      return view('pages.contact');
    }

    public function category(Request $request, $name) {

        $category = Category::where('name', $name)->get();
        foreach ($category as $cat) {
          $id = $cat->id;
          $category_name = $cat->name;
        }

       $data = array(
         'category' => Category::find($id),
         'projects' => Project::where('category', $category_name)->get()
       );

       return view('pages.category')->with($data);


    }
}
