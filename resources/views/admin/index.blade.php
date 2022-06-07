@extends('admin/master')
@section('content')

<body id="reportsPage">
  <nav class="navbar navbar-expand-xl">
    <div class="container h-100">
      <a class="navbar-brand" href="{{route('admin.view')}}">
        <h1 class="tm-site-title mb-0">Admin Panel</h1>
      </a>
      <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars tm-nav-icon"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('admin.view')}}">
              <i class="fas fa-shopping-cart"></i> Items & Categories
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="far fa-user"></i> Accounts
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-cog"></i>
              <span> Settings <i class="fas fa-angle-down"></i> </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Billing</a>
              <a class="dropdown-item" href="#">Customize</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link d-block" href="{{route('logout')}}">
              Admin, <b>Logout</b>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 
  <div class="container mt-5">
    <div class="row tm-content-row">
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products">
          <h2 class="tm-block-title">Items</h2>
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Category</th>
                  <th scope="col">Details</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td class="tm-product-name">{{$item->item_name}}</td>
                  <td>${{$item->price}}</td>
                  <td>{{$item->category_id}}</td>
                  <td>{{$item->description}}</td>
                  <td>
                    <span onclick="document.getElementById('m-u-{{$item->id}}').submit()" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </span>
                    <form action="{{ route('item.destroy',$item->id) }}" method="post" id="m-u-{{$item->id}}">
                      @csrf
                      @method('delete')
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <a href="{{route('item.create')}}" class="btn btn-primary btn-block text-uppercase mb-3">Add new item</a>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Categories</h2>
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">SL</th>
                  <th scope="col">Name</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td class="tm-category-name">
                    {{$category->category_name}}
                  </td>
                  <td class="text-center">
                    <span onclick="document.getElementById('i-u-{{$category->id}}').submit()" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </span>
                    <form action="{{ route('category.destroy',$category->id) }}" method="post" id="i-u-{{$category->id}}">
                      @csrf
                      @method('delete')
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <a href="{{route('category.create')}}" class="btn btn-primary btn-block text-uppercase mb-3">Add new category</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2018</b> All rights reserved.

        Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
      </p>
    </div>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function() {
      $(".tm-category-name").on("click", function() {
        window.location.href = "{{route('category.edit',$category->id)}}";
      });
    });

    $(function() {
      $(".tm-product-name").on("click", function() {
        window.location.href = "#";
      });
    });
  </script>
</body>
@endsection

