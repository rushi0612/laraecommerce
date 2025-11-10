<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="{{ asset('front_end/images/favicon.png') }}" type="image/x-icon">
  <title>Product Details - Giftos</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.css') }}" />
  <link href="{{ asset('front_end/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('front_end/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="{{ route('index') }}">
          <span>Giftos</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
          </ul>

          <div class="user_option">
            @if(Auth::check())
              <a href="{{route('dashboard')}}"><i class="fa fa-user"></i> Dashboard</a>
            @else
              <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
              <a href="{{route('register')}}"><i class="fa fa-user"></i> SignUp</a>
            @endif
            <a href="#"><i class="fa fa-shopping-bag"></i></a>
          </div>
        </div>
      </nav>
    </header>
  </div>

  <!-- product details section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Product Details</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="img-box text-center">
            <img src="{{ asset('products/' . $product->product_image) }}" alt="{{ $product->product_title }}" style="width:100%; border-radius:10px;">
          </div>
        </div>

        <div class="col-md-6">
          <div class="detail-box">
            <h3>{{ $product->product_title }}</h3>
            <h5 class="text-muted">Category: {{ $product->product_category }}</h5>
            <h4 class="text-danger mt-3">Price: ${{ $product->product_price }}</h4>
            <h6 class="mt-3">Available Quantity: {{ $product->product_quantity }}</h6>

            <p class="mt-4">{{ $product->product_description }}</p>

            <div class="btn-box mt-4">
              <a href="#" class="btn btn-primary">Add to Cart</a>
              <a href="{{ route('index') }}" class="btn btn-secondary">Back to Shop</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- footer -->
  <section class="info_section layout_padding2-top">
    <footer class="footer_section">
      <div class="container text-center">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Web Tech Knowledge</a>
        </p>
      </div>
    </footer>
  </section>

  <script src="{{ asset('front_end/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('front_end/js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('front_end/js/custom.js') }}"></script>

</body>
</html>
