@extends('layouts.app')

@section('content')

<div class="container">
  <div class="bootstrap-form">
    <h1>Edit Project</h1>
    <form method="post" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-row">
        <div class="col">
          <label for="name">Project Name</label>
          <input type="text" class="form-control" name="name" id="name" value="{{ $project->name }}" />
        </div>
        <div class="col">
          <label for="category">Category</label>
          <select type="text" class="form-control" name="category" id="category">
            <option value="{{ $project->category }}"> {{ $project->category }} </option>
            @foreach ($categories as $category)
              <option value="{{$category->name}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="file">Image Upload</label>
        <input type="file" class="form-control-file" name="file" id="file">
        <p>Current Image: {{ $project->image }}</p>
      </div>
      <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
  </div>
</div>

@endsection
