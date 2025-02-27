@extends('layouts.app')

@section('title','home')

@section('content')

<section id="hero">
            <h4>Trade-In-Offer</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons up to 70% off!</p>
            <button>Shop Now</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="{{ asset('images/features/f1.png') }}" alt="">
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

        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>Summer Collections is Here !!!</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="{{ asset('images/products/f1.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Botanical Flowers T-Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 349.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f2.jpg') }}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Blossom Breeze T-Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 349.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f3.jpg') }}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Floral Essence T-Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 349.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f4.jpg') }}" alt="">
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
                        <h4>Rp. 349.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f5.jpg') }}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Lush Petals T-Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 349.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f6.jpg') }}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Hibiscus Hues T-Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 439.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f7.jpg') }}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Daisy Drifters Pants</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 549.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/f8.jpg') }}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Ethereal Bloom T-Shirts</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 349.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
        </section>

        <section id="banner" class="section-m1">
            <h4>Repair Services</h4>
            <h2>Up to <span>65% Off</span> - All T-Shirts & Accessories</h2>
            <button  class="normal">Explore More</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>New Arrivals</h2>
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
                <div class="pro">
                    <img src="{{ asset('images/products/n5.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Denim T-Shirt</h5>
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
                    <img src="{{ asset('images/products/n6.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Light Gray Short</h5>
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
                    <img src="{{ asset('images/products/n7.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Soft Brown Shirt</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp. 249.000</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="{{ asset('images/products/n8.jpg')}}" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Original Black T-Shirts</h5>
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

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>Crazy Deals</h4>
                <h2>Buy 2 get 1 free</h2>
                <span>Classic dresses & T-Shirts are on sale at Miyoot</span>
                <button class="white">Learn More</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>Spring / Summer</h4>
                <h2>Upcoming Season</h2>
                <span>Classic dresses & T-Shirts are on sale at Miyoot</span>
                <button class="white">Collection</button>
            </div>
        </section>

        <section id="banner3">
            <div class="banner-box">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -35% OFF</h3>
            </div> 
            <div class="banner-box banner-box2">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -35% OFF</h3>
            </div> 
            <div class="banner-box banner-box3">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -35% OFF</h3>
            </div> 
        </section>

@endsection