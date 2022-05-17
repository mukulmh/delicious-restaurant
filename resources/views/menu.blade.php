@extends('master')
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
        <li><a class="nav-link scrollto active" href="{{route('menu.index')}}">Menu</a></li>
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
        <h2>Menu</h2>
        <ol>
          <li><a href="{{route('index.view')}}">Home</a></li>
          <li>Menu</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container">

      <div class="section-title">
        <h2>Check our tasty <span>Menu</span></h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">Show All</li>
            @foreach($categories as $category)
            <li data-filter=".filter-{{ $category->category_name }}">{{ $category->category_name }}</li>
            <!--<li data-filter=".filter-salads">Salads</li>
				<li data-filter=".filter-specialty">Specialty</li>-->
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row menu-container">

        <div class="col-lg-6 menu-item filter-starters">
          <div class="menu-content">
            <a href="#">Lobster Bisque</a><span>$5.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <div class="menu-content">
            <a href="#">Bread barrel</a><span>$6.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <div class="menu-content">
            <a href="#">Crab Cake</a><span>$7.95</span>
          </div>
          <div class="menu-ingredients">
            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <div class="menu-content">
            <a href="#">Caesar Selections</a><span>$8.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <div class="menu-content">
            <a href="#">Tuscan Grilled</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Grilled chicken with provolone, artichoke hearts, and roasted red pesto
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <div class="menu-content">
            <a href="#">Mozzarella Stick</a><span>$4.95</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <div class="menu-content">
            <a href="#">Greek Salad</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach, crisp romaine, tomatoes, and Greek olives
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-salads">
          <div class="menu-content">
            <a href="#">Spinach Salad</a><span>$9.95</span>
          </div>
          <div class="menu-ingredients">
            Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <div class="menu-content">
            <a href="#">Lobster Roll</a><span>$12.95</span>
          </div>
          <div class="menu-ingredients">
            Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Menu Section -->


</main><!-- End #main -->

@endsection