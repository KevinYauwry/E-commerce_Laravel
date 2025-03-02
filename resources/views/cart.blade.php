@extends('layouts.app')

@section('title','cart')

@section('content')

    <section id="page-header" class="about-header">
      <h2>#YourCartYourStyle</h2>
      <p>Ready to check out? Your perfect look is just a click away!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><img src="images/products/f1.jpg" alt=""></td>
                    <td>Botanical Flowers T-Shirt</td>
                    <td>Rp. 349.000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rp. 349.000</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><img src="images/products/f2.jpg" alt=""></td>
                    <td>Blossom Breeze T-Shirt</td>
                    <td>Rp. 349.000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rp. 349.000</td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><img src="images/products/f3.jpg" alt=""></td>
                    <td>Botanical Flowers T-Shirt</td>
                    <td>Rp. 349.000</td>
                    <td><input type="number" value="1"></td>
                    <td>Rp. 349.000</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rp. 1.047.000</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rp. 1.047.000</strong></td>
                </tr>
            </table>
            <button class="normal">Procceed to checkout</button>
        </div>
    </section>

@endsection