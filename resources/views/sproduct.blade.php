@extends('layouts.app')

@section('title','Product')

@section('content')

<section id="prodetails" class="section-p1">
      <div class="single-pro-image">
        <img src="{{ asset('images/products/f1.jpg')}}" width="100%" id="MainImg" alt="" />

        <div class="small-img-group">
          <div class="small-img-col">
            <img
              src="{{ asset('images/products/f1.jpg')}}"
              width="100%"
              class="small-img"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="{{ asset('images/products/f2.jpg')}}"
              width="100%"
              class="small-img"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="{{ asset('images/products/f3.jpg')}}"
              width="100%"
              class="small-img"
              alt=""
            />
          </div>
          <div class="small-img-col">
            <img
              src="{{ asset('images/products/f4.jpg')}}"
              width="100%"
              class="small-img"
              alt=""
            />
          </div>
        </div>
      </div>

      <div class="single-pro-details">
        <a href="{{ route('shop') }}"><i class="fa-solid fa-circle-xmark"></i></a>
        <h6>Home / T-Shirt</h6>
        <h4>Botanical Flowers T-Shirt</h4>
        <h2>Rp. 349.000</h2>
        <select>
          <option>Select Size</option>
          <option>Small (S)</option>
          <option>Medium (M)</option>
          <option>Large (L)</option>
          <option>XL</option>
          <option>XXL (2XL)</option>
          <option>XXXL (3XL)</option>
          <option>XXXXL (4XL)</option>
        </select>
        <input type="number" value="1" />
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span
          >Make a statement in this bold short-sleeve button-up shirt featuring
          a playful mix of abstract shapes and floral elements in bright,
          contrasting colors. Crafted from lightweight, breathable fabric, it’s
          perfect for sunny days and warm evenings. The relaxed fit ensures
          all-day comfort, while the collared neckline and button-down front add
          a touch of classic style.</span
        >
      </div>
    </section>

    <section id="product1" class="section-p1">
      <h2>Featured Products</h2>
      <p>Brand New Collections is Available</p>
      <div class="pro-container">
          <div class="pro">
              <img src="{{ asset('images/products/n1.jpg')}}" alt="">
              <div class="des">
                  <span>adidas</span>
                  <h5>Light Blue Shirt</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rp. 199.000</h4>
              </div>
              <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
          <div class="pro">
              <img src="{{ asset('images/products/n2.jpg')}}" alt="">
              <div class="des">
                  <span>adidas</span>
                  <h5>Gray Shirt</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rp. 199.000</h4>
              </div>
              <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
          <div class="pro">
              <img src="{{ asset('images/products/n3.jpg')}}" alt="">
              <div class="des">
                  <span>adidas</span>
                  <h5>Original White Shirt</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rp. 199.000</h4>
              </div>
              <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
          <div class="pro">
              <img src="{{ asset('images/products/n4.jpg')}}" alt="">
              <div class="des">
                  <span>adidas</span>
                  <h5>Vivid Vines T-Shirt</h5>
                  <div class="star">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </div>
                  <h4>Rp. 199.000</h4>
              </div>
              <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
          </div>
      </div>
    </section>

@endsection