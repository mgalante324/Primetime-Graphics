<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Count the number of Categories
        $categories = Category::all();
        $categoryCount = 0;

        foreach ($categories as $category) {
          $categoryCount++;
        }

        //Count the number of projects and projects per category
        // $projects = Project::all();
        $projects = Project::orderBy('category','asc')->orderBy('name', 'asc')->paginate(10);
        $projectCount = 0;

        foreach ($projects as $project) {
          $projectCount++;
        }

        $data = array(
          'categoryCount' => $categoryCount,
          'projectCount' => $projectCount,
          'categories' => $categories,
          'projects' => $projects
        );

        return view('home')->with($data);
    }
}
