@extends('master')
@section('content')

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
        <li><a class="nav-link scrollto active" href="{{route('chefs.view')}}">Chefs</a></li>
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
        <li><a class="nav-link scrollto" href="{{route('contact.view')}}">Contact</a></li>
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
        <h2>Chefs</h2>
        <ol>
          <li><a href="{{route('index.view')}}">Home</a></li>
          <li>Chefs</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs">
    <div class="container">

      <div class="section-title">
        <h2>Our Proffesional <span>Chefs</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Master Chef</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Patissier</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member">
            <div class="pic"><img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>Cook</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Chefs Section -->

</main><!-- End #main -->
@endsection