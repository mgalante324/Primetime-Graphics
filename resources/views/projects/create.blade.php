@extends('layouts.app')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

  <!-- Header -->
  	<header id="header">
  		<div class="inner">

          <header>
            <h1 class="title">Add a Project</h1>
          </header>

  		</div>
  	</header>

  <!-- Main -->
  	<div id="main">
  		<div class="inner">

          <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="fields">
              <div class="field half">
                <label for="name">Project Name</label>
                <input type="text" name="name" id="name" placeholder="Name" />
              </div>
              <div class="field half">
                <label for="category">Category</label>
                <select type="text" name="category" id="category">
                  <option disabled selected value> -- select a category -- </option>
                  @foreach ($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="field half">
                <label for="file">Image Upload</label>
                <input type="file" name="file" id="file"></input>
              </div>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Submit" class="button primary" /></li>
            </ul>
          </form>

  		</div>
  	</div>

  <!-- Footer -->
  	<footer id="footer">
  		<div class="inner">
  			<ul class="copyright">
  				<li>&copy; PrimeTime Graphics 2020. All rights reserved</li>
  			</ul>
  		</div>
  	</footer>

</div>

@endsection
