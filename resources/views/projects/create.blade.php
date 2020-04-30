@extends('layouts.app')

@section('content')

<div class="container">
  <div class="bootstrap-form">
    <h1>Add a Project</h1>
    <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="col">
          <label for="name">Project Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
        </div>
        <div class="col">
          <label for="category">Category</label>
          <select type="text" class="form-control" name="category" id="category">
            <option disabled selected value> -- select a category -- </option>
            @foreach ($categories as $category)
              <option value="{{$category->name}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
        <div class="form-group">
          <label for="file">Image Upload</label>
          <input type="file" class="form-control-file" name="file" id="file">
        </div>

        <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
  </div>
</div>

@endsection
