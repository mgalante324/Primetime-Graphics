@extends('layouts.app')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

  <!-- Header -->
  	<header id="header">
  		<div class="inner">

          <header>
            <h1 class="title">Add a Category</h1>
          </header>

  		</div>
  	</header>

  <!-- Main -->
  	<div id="main">
  		<div class="inner">

          <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="fields">
              <div class="field">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" placeholder="Name" />
              </div>
            </div>
            <ul class="actions">
              <li><input type="submit" value="Create" class="button primary" /></li>
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
