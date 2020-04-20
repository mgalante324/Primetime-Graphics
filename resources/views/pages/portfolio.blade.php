@extends('layouts.app')

@section('content')
<!-- Wrapper -->
<div id="wrapper">

  <!-- Header -->
  	<header id="header">
  		<div class="inner">

  			<!-- Logo -->
        {{-- <div class="logo-title">
          <a href="/" class="logo">
            <span class="symbol"><img src="{{ asset('phantom/images/logo.svg') }}" alt="" /></span><span class="title">PrimeTime Graphics</span>
          </a>
        </div> --}}

  			<!-- Nav -->
  				<nav>
            <!-- Logo -->
            <div class="logo-title">
              <a href="/" class="logo">
                <span class="symbol"><img src="{{ asset('phantom/images/logo.svg') }}" alt="" /></span><span class="title">PrimeTime Graphic</span>
              </a>
            </div>

            <div class="menu">
    					<ul>
    						<li><a href="#menu">Menu</a></li>
    					</ul>
            </div>
  				</nav>

          <header>
            <h1 class="title">Portfolio</h1>
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
  			{{-- <header>
  				<h1>This is Phantom, a free, fully responsive site<br />
  				template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
  				<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
  			</header> --}}
  			<section class="tiles">
  				<article class="style1">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic02.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Magna</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style2">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic02.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Lorem</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style3">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic02.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Feugiat</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style4">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic02.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Tempus</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style5">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic02.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Aliquam</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style6">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic02.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Veroeros</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  			</section>
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
