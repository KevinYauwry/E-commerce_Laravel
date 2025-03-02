@extends('layouts.app')

@section('title','contact')

@section('content')

<section id="page-header" class="about-header">
      <h2>#let's_talk</h2>
      <p>LEAVE A MESSAGE. We love to hear from you!!</p>
    </section>

    <section id="contact-details" class="section-p1">
      <div class="details">
        <span>GET IN TOUCH!</span>
        <h2>Visit our offline store or contact us today</h2>
        <h3>Miyoot Offline Store</h3>
        <div class="">
          <li>
            <i class="fa-regular fa-map"></i>
            <p>Petemon Timur Street, Surabaya, Indonesia</p>
          </li>
          <li>
            <i class="fa-regular fa-envelope"></i>
            <p>miyootcs@gmail.com</p>
          </li>
          <li>
            <i class="fa-regular fa-address-book"></i>
            <p>+62 81515683080</p>
          </li>
          <li>
            <i class="fa-regular fa-clock"></i>
            <p>Monday to Saturday: 07.00 AM to 07.00 PM</p>
          </li>
        </div>
      </div>
 
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.753087314791
          !2d112.72373577476057!3d-7.268914492738057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
          4f13.1!3m3!1m2!1s0x2dd7fbe2cadac4b1%3A0x29c7791e919fa534!2sJl.%20Petemon%20T
          imur%2C%20Kec.%20Sawahan%2C%20Surabaya%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4
          v1740800248697!5m2!1sen!2sid"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Subject" required>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="{{ asset('images/people/1.png')}}" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br> Phone: +62 815530990
                <br>Email johndoe@gmail.com</p>
            </div>
            <div>
                <img src="{{ asset('images/people/2.png')}}" alt="">
                <p><span>Smith Rowe</span> Senior Marketing Manager <br> Phone: +62 815530990
                <br>Email smithrowe@gmail.com</p>
            </div>
            <div>
                <img src="{{ asset('images/people/3.png')}}" alt="">
                <p><span>Sophia Willson</span> Senior Marketing Manager <br> Phone: +62 815530990
                <br>Email swillson@gmail.com</p>
            </div>
        </div>
    </section>

@endsection