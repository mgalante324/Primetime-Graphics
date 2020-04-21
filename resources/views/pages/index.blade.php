@extends('layouts.index')

@section('content')
<div class="container-fluid">
  <div class="content">
    <div class="fade">
        <img src="{{ asset('../images/PrimeTimeGraphics_Logo.png') }}" class="img-fluid" alt="PrimeTime Graphics">
    </div>

    <div class="links">
      <a href="/portfolio"><div class="link-text">Portfolio</div></a>
      <a href="/about"><div class="link-text">About</div></a>
      <a href="/shop"><div class="link-text">Shop</div></a>
      <a href="/contact"><div class="link-text">Contact</div></a>
    </div>
  </div>
</div>
@endsection
