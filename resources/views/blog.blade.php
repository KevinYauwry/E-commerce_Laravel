@extends('layouts.app')

@section('title','blog')

@section('content')

<section id="page-header" class="blog-header">
      <h2>#MoreToRead</h2>
      <p>Read all about our newest products!</p>
    </section>

    <section id="blog">
      <div class="blog-box">
        <div class="blog-img">
          <img src="{{ asset('images/blog/b1.jpg')}}" alt="" />
        </div>

        <div class="blog-details">
          <h4>Cotton-Jersey Zip-Up Hoodie</h4>
          <p>
            The Cotton-Jersey Zip-Up Hoodie combines comfort and versatility,
            crafted from soft, breathable cotton-jersey fabric for a relaxed yet
            stylish fit. Designed ...
          </p>
          <a href="#">CONTINUE READING</a>
        </div>
        <h1>01/03</h1>
      </div>
      <div class="blog-box">
        <div class="blog-img">
          <img src="{{ asset('images/blog/b2.jpg')}}" alt="" />
        </div>

        <div class="blog-details">
          <h4>Original Blouse Collection</h4>
          <p>
            Discover the elegance of our Original Blouses—designed for
            effortless style, versatility, and timeless appeal. Read our latest
            blog to explore the inspiration behind the designs and how to style
            them for any occasion!
          </p>
          <a href="#">CONTINUE READING</a>
        </div>
        <h1>17/02</h1>
      </div>
      <div class="blog-box">
        <div class="blog-img">
          <img src="{{ asset('images/blog/b3.jpg')}}" alt="" />
        </div>

        <div class="blog-details">
          <h4>Our Offline Store Just Opened in SUrabaya!</h4>
          <p>
            Visit us now to explore our latest collections in person, experience
            premium quality firsthand, and enjoy exclusive in-store deals.
            Located in the heart of Surabaya, our new store offers a stylish and
            welcoming space for all your fashion needs!
          </p>
          <a href="#">SEE LOCATION!</a>
        </div>
        <h1>25/01</h1>
      </div>
      <div class="blog-box">
        <div class="blog-img">
          <img src="{{ asset('images/blog/b4.jpg')}}" alt="" />
        </div>

        <div class="blog-details">
          <h4>Cardigan Looks & Inspiration</h4>
          <p>
            Our Cardigan Collection is inspired by effortless elegance and
            everyday comfort, perfect for layering in any season. From classic
            button-ups to modern oversized designs, each piece is crafted with
            soft, high-quality fabrics for a timeless and versatile look.
          </p>
          <a href="#">CONTINUE READING</a>
        </div>
        <h1>12/01</h1>
      </div>
      <div class="blog-box">
        <div class="blog-img">
          <img src="{{ asset('images/blog/b6.jpg')}}" alt="" />
        </div>

        <div class="blog-details">
          <h4>Food Insipred Designs</h4>
          <p>
            From the vibrant hues of fresh produce to the intricate textures of
            baked goods, food has long been a source of inspiration in fashion
            design. Discover how flavors, colors, and culinary artistry
            influence fabric choices, patterns, and silhouettes in our latest
            blog!
          </p>
          <a href="#">CONTINUE READING</a>
        </div>
        <h1>06/01</h1>
      </div>
    </section>

    <section id="pagination" class="section-p1">
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>

@endsection