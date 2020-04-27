@extends('layouts.app')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

  <!-- Header -->
  	<header id="header">
  		<div class="inner">

  			<!-- Nav -->
  				<nav>
            <!-- Logo -->
            <div class="logo-title">
              <a href="/" class="logo">
                <span class="symbol"><img src="{{ asset('phantom/images/logo.svg') }}" alt="" /></span><span class="title">PrimeTime Graphics</span>
              </a>
            </div>

            <div class="menu">
    					<ul>
    						<li><a href="#menu">Menu</a></li>
    					</ul>
            </div>
  				</nav>

          <header>
            <h1 class="title">{{ $project->name }}</h1>
          </header>

  		</div>
  	</header>

  <!-- Menu -->
  	<nav id="menu">
  		<h2>Menu</h2>
  		<ul>
  			<li><a href="/">Home</a></li>
  			<li><a href="/portfolio">Portfolio</a></li>
  			<li><a href="/about">About</a></li>
  			<li><a href="/shop">Shop</a></li>
  			<li><a href="/contact">Contact</a></li>
  		</ul>
  	</nav>


  <!-- Main -->
  	<div id="main">
  		<div class="inner">
          <img src="/storage/portfolio_images/{{$project->image}}"class="img-fluid" alt="PrimeTime Graphics">
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
