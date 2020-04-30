@extends('layouts.app2')

@section('content')
<!-- Wrapper -->
<div id="wrapper">
  <div class="container-fluid">
   <div class="row">
    <div class="contact-left">
      <div class="get-in-touch fade">
        {{-- <h1 class="get-in-touch fade">Get in Touch</h1> --}}
        <img src="{{ asset('images/GetInTouchGraphic.png') }}" class="img-fluid" alt="PrimeTime Graphics">
      </div>
    </div>
    <div class="contact-right fade">
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
            <div class="icon-bottom">
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
              <div class="contactForm">
                  <section>
                    <h1 class="title">Contact</h1>
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
                        <li><input type="submit" value="Send" class="button primary" /></li>
                      </ul>
                    </form>
                  </section>
                </div>
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
   </div>
  </div>
</div>

@endsection
