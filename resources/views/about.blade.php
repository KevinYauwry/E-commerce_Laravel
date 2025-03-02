@extends('layouts.app')

@section('title','about')

@section('content')

<section id="page-header" class="about-header">
      <h2>#KnowUs</h2>
      <p>
        Get to Know Us – Discover our journey, vision, and the passion behind
        every piece we create.
      </p>
    </section>

    <section id="about-head" class="section-p1">
      <img src="images/about/a6.jpg" alt="" />
      <div>
        <h2>Who Are We?</h2>
        <p>
          Welcome to Miyoot, your go-to destination for stylish and high-quality
          clothing in Surabaya, Indonesia. Inspired by the vibrant culture and
          modern trends, we offer a curated collection of fashion essentials
          designed for comfort, elegance, and versatility. Whether you're
          looking for timeless classics or the latest styles, our pieces are
          crafted with premium fabrics to suit every occasion. Shop with
          confidence and experience a seamless online shopping journey with fast
          delivery across Indonesia. Join us in redefining fashion—where style
          meets authenticity!
        </p>
        <abbr title="">Authentic Style, Timeless Confidence.</abbr>
        <br /><br />

        <marquee loop="-1" scrollamount="9"
          >We value quality, authenticity, and self-expression, creating
          timeless fashion with premium materials, innovative designs, and a
          commitment to our community.</marquee
        >
      </div>
    </section>

    <section id="about-app" class="section-p1">
      <h1>Try Out Our <a href="#">App</a></h1>
      <div class="video">
        <video autoplay muted loop src="{{ asset('images/about/1.mp4')}}"></video>
      </div>
    </section>

    <section id="feature" class="section-p1">
      <div class="fe-box">
          <img src="{{ asset('images/features/f1.png')}}" alt="">
          <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
          <img src="{{ asset('images/features/f2.png')}}" alt="">
          <h6>Online Order</h6>
      </div>
      <div class="fe-box">
          <img src="{{ asset('images/features/f3.png')}}" alt="">
          <h6>Save Money</h6>
      </div>
      <div class="fe-box">
          <img src="{{ asset('images/features/f4.png')}}" alt="">
          <h6>Promotions</h6>
      </div>
      <div class="fe-box">
          <img src="{{ asset('images/features/f5.png')}}" alt="">
          <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
          <img src="{{ asset('images/features/f6.png')}}" alt="">
          <h6>24/7 Support</h6>
      </div>
    </section>

@endsection