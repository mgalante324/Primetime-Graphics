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
                <span class="symbol"><img src="{{ asset('phantom/images/logo.svg') }}" alt="" /></span><span class="title">PrimeTime Graphics</span>
              </a>
            </div>

            <div class="menu">
    					<ul>
    						<li><a href="#menu">Menu</a></li>
    					</ul>
            </div>
  				</nav>

  		</div>
  	</header>

  <!-- Menu -->
  	<nav id="menu">
  		<h2>Menu</h2>
  		<ul>
  			<li><a href="index.html">Home</a></li>
  			<li><a href="generic.html">Ipsum veroeros</a></li>
  			<li><a href="generic.html">Tempus etiam</a></li>
  			<li><a href="generic.html">Consequat dolor</a></li>
  			<li><a href="elements.html">Elements</a></li>
  		</ul>
  	</nav>

  <!-- Main -->
  	<div id="main">
  		<div class="inner">
  			<header>
  				<h1>This is Phantom, a free, fully responsive site<br />
  				template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
  				<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
  			</header>
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
              <img src="{{ asset('phantom/images/pic04.jpg') }}">
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
              <img src="{{ asset('phantom/images/pic05.jpg') }}">
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
              <img src="{{ asset('phantom/images/pic06.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Veroeros</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style2">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic07.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Ipsum</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style3">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic08.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Dolor</h2>
  						<div class="content">
  							<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
  						</div>
  					</a>
  				</article>
  				<article class="style1">
  					<span class="image">
              <img src="{{ asset('phantom/images/pic09.jpg') }}">
  					</span>
  					<a href="generic.html">
  						<h2>Nullam</h2>
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
  			<section>
  				<h2>Get in touch</h2>
  				<form method="post" action="#">
  					<div class="fields">
  						<div class="field half">
  							<input type="text" name="name" id="name" placeholder="Name" />
  						</div>
  						<div class="field half">
  							<input type="email" name="email" id="email" placeholder="Email" />
  						</div>
              <div class="field">
                <input type="text" name="subject" id="subject" placeholder="Subject"></input>
              </div>
  						<div class="field">
  							<textarea name="message" id="message" placeholder="Message"></textarea>
  						</div>
  					</div>
  					<ul class="actions">
  						<li><input type="submit" value="Send" class="primary" /></li>
  					</ul>
  				</form>
  			</section>
  			<section>
  				<h2>Follow</h2>
  				<ul class="icons">
  					<li><a href="https://www.instagram.com/primetime_graphic/" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
  					<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
  				</ul>
  			</section>
  			<ul class="copyright">
  				<li>&copy; PrimeTime Graphics 2020. All rights reserved</li>
  			</ul>
  		</div>
  	</footer>

</div>

@endsection
