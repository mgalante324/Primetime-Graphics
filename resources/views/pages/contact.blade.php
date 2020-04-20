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
                <span class="symbol"><img src="{{ asset('phantom/images/logo.svg') }}" alt="" /></span><span class="title">PrimeTime Graphic</span>
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
          <li><a href="/">Home</a></li>
    			<li><a href="/portfolio">Portfolio</a></li>
    			<li><a href="/about">About</a></li>
    			<li><a href="/shop">Shop</a></li>
    			<li><a href="/contact">Contact</a></li>
        </ul>
      </nav>


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
