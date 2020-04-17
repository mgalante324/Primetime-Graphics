@extends('layouts.index')

@section('content')
<div class="container-fluid">
  <div class="content">
        {{-- <img src="{{ asset('../images/PrimeTimeGraphics_AltLogo3.png') }}" class="img-fluid" alt="Logo"> --}}
        <img src="{{ asset('../images/PrimeTimeGraphics_Logo.png') }}" class="img-fluid" alt="PrimeTime Graphics">
        {{-- <h1>PRIMETIME</h1>
        <h3>GRAPHICS</h3> --}}

    <div class="links">
      <a href="/portfolio"><div class="link-text">Portfolio</div></a>
      <a href="/about"><div class="link-text">About</div></a>
      <a href="/shop"><div class="link-text">Shop</div></a>
      <a href="/contact"><div class="link-text">Contact</div></a>
    </div>
  </div>
</div>
@endsection
