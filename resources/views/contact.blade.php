@extends ('master')
@section('content')
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top ">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
    <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
  </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <div class="logo me-auto">
      <h1><a href="{{route('index.view')}}">Delicious</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto" href="{{route('index.view')}}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{route('about.view')}}">About</a></li>
        <li><a class="nav-link scrollto" href="{{route('menu.index')}}">Menu</a></li>
        <li><a class="nav-link scrollto" href="{{route('specials.view')}}">Specials</a></li>
        <li><a class="nav-link scrollto" href="{{route('events.view')}}">Events</a></li>
        <li><a class="nav-link scrollto" href="{{route('chefs.view')}}">Chefs</a></li>
        <li><a class="nav-link scrollto" href="{{route('gallery.view')}}">Gallery</a></li>
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto active" href="{{route('contact.view')}}">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="{{route('booking.view')}}" class="book-a-table-btn scrollto">Book a table</a>

  </div>
</header><!-- End Header -->

<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="{{route('index.view')}}">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2><span>Contact</span> Us</h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>
    </div>

    <div class="container mt-5">

      <div class="info-wrap">
        <div class="row">
          <div class="col-lg-3 col-md-6 info">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street<br>New York, NY 535022</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-clock"></i>
            <h4>Open Hours:</h4>
            <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com<br>contact@example.com</p>
          </div>

          <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
          </div>
        </div>
      </div>

      <form action="{{route('form.contact')}}" method="post" role="form" class="php-email-form_">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          @isset($message)
          <div class="sent-message">{{$message}}</div>
          @endisset
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

      <!--
		<div>
			<form action="{{route('form.contact')}}" method="post">
				@csrf
				<input type="text" name="name" id="name" placeholder="Your Name" required>
				<input type="text" name="email" id="email" placeholder="Your Email" required>
				<input type="text" name="subject" id="subject" placeholder="Subject" required>
				<textarea name="message" id="message" placeholder="Message" required></textarea>
				<button type="submit">Send Message</button>
			
			</form>
		</div>
		-->

    </div>

    <div class="map">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection