@extends('layouts.app2')

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
              {{-- <a href="/" class="logo">
                <span class="symbol"><img src="{{ asset('phantom/images/logo.svg') }}" alt="" /></span><span class="title">PrimeTime Graphics</span>
              </a> --}}
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
        @guest
      		<ul>
      			<li><a href="/">Home</a></li>
      			<li><a href="/portfolio">Portfolio</a></li>
      			<li><a href="/contact">Contact</a></li>
      		</ul>
          <ul class="icons">
            <li><a href="https://www.instagram.com/primetime_graphic/" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
            {{-- <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li> --}}
          </ul>
          @else
            <ul>
              <li><a href="/portfolio">Portfolio</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/home">Backend Dashboard</a></li>
            </ul>
            <ul class="icons">
              <li><a href="https://www.instagram.com/primetime_graphic/" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
              {{-- <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li> --}}
            </ul>
          @endguest
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
