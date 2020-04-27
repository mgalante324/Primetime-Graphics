<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Category;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $projects = Project::where('category','NFL')->get();
        //
        // return view('projects.index')->with('projects', $projects);

        return redirect('/portfolio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('projects.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'category' => 'required',
          'file' => 'image|required|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('file')) {
          // Get Filename with the extension
          $filenameWithExt = $request->file('file')->getClientOriginalName();

          // Get just the filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get just the extension
          $extension =  $request->file('file')->getClientOriginalExtension();

          // Create the filename to store with current timestamp to prevent duplicates
          $fileNameToStore = $filename . '_' . time() . '.' . $extension;

          // Upload image
          $path = $request->file('file')->storeAs('public/portfolio_images', $fileNameToStore);

        } else {
          $fileNameToStore = 'noimage.jpg';
        }

        // Add new project
        $project = new Project;

        $project->image = $fileNameToStore;
        $project->name = $request->input('name');
        $project->category = $request->input('category');
        $project->save();

        return redirect('/portfolio')->with('success', 'Project Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $category, $id)
    {
        $project = Project::find($id);
        return view('projects.show')->with('project', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $data = array(
        'categories' => Category::all(),
        'project' => Project::find($id)
      );

      return view('projects.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'category' => 'required'
        ]);

        // Handle File Upload
        if($request->hasFile('file')) {
          // Get Filename with the extension
          $filenameWithExt = $request->file('file')->getClientOriginalName();

          // Get just the filename
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get just the extension
          $extension =  $request->file('file')->getClientOriginalExtension();

          // Create the filename to store with current timestamp to prevent duplicates
          $fileNameToStore = $filename . '_' . time() . '.' . $extension;

          // Upload image
          $path = $request->file('file')->storeAs('public/portfolio_images', $fileNameToStore);

        } else {
          $fileNameToStore = 'noimage.jpg';
        }

        // Add new project
        $project = Project::find($id);

        $project->image = $fileNameToStore;
        $project->name = $request->input('name');
        $project->category = $request->input('category');
        $project->save();

        return redirect('/portfolio')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
