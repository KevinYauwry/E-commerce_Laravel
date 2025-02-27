<section id="header">
            <a href="#"><img src="{{ asset('images/logo1.png') }}" class="logo" alt=""></a>
            
            <div>
                <ul id="navbar">
                    <li><a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'cart' ? 'active' : '' }}" href="{{ route('cart') }}"><i class="fa-solid fa-bag-shopping"></i></a></li>
                </ul>
            </div>
</section>