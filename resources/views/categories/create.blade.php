@extends('layouts.app')

@section('content')

<div class="container">
  <div class="bootstrap-form">
    <h1>Add a Category</h1>
    <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name" />
      </div>
      <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
  </div>
</div>

@endsection
