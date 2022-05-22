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
        <li><a class="nav-link scrollto" href="{{route('menu.index')}}">Menu</a></li>
        <li><a class="nav-link scrollto active" href="{{route('specials.view')}}">Specials</a></li>
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
        <h2>Specials</h2>
        <ol>
          <li><a href="{{route('index.view')}}">Home</a></li>
          <li>Specials</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->



  <!-- ======= Specials Section ======= -->
  <section id="specials" class="specials">
    <div class="container">

      <div class="section-title">
        <h2>Check our <span>Specials</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            @foreach($specials as $item)
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-{{$item->id}}">{{$item->name}}</a>
            </li>
            @endforeach
            <!-- <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
            </li> -->
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            @foreach($specials as $special)
            <div class="tab-pane" id="tab-{{$special->id}}">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>{{$special->title}}</h3>
                  {{$special->description}}
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/{{$special->image}}" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="tab-pane active show" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Et blanditiis nemo veritatis excepturi</h3>
                  <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                  <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                  <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                  <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                  <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                  <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-4.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                  <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                  <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/specials-5.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Specials Section -->

</main><!-- End #main -->
@endsection