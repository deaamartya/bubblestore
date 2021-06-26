{{-- Header for md or bigger breakpoints --}}
<div class="d-none d-md-block">
  <div class="container-fluid bg-light border-bottom">
    <div class="container-xl justify-content-between">
      <nav class="navbar navbar-light mx-5 py-2">
        <span class="navbar-text">
          <a href="#">Back to Geniebook</a>
        </span>
        <span class="navbar-text">
          <a href="#" class="me-3">My Orders</a>
          <a href="#" class="me-3">My Wishlist</a>
          <a href="#" class="me-3">Login</a>
        </span>
      </nav>
    </div>
  </div>
  <div class="container-fluid header border-bottom">
    <div class="container-xl">
      <div class="row align-items-center px-5">
        <div class="col-md-4 col-12">
          <a href="{{ url('/') }}">
            <img src="{{ asset('assets/bubble_store_logo.png') }}" class="logo">
          </a>
        </div>
        <div class="col-md-6">
          <div class="form-search align-items-center ps-5">
            <input type="text" class="search-input h-100 p-3 border border-end-0 rounded-0" placeholder="Search For Items...">
            <select class="search-categories h-100 border border-end-0 rounded-0 p-2 styled-select">
              <option>All Categories</option>
            </select>
            <button class="btn h-100 rounded-0 btn-orange p-3 text-white"><i class="fa fa-search icon-search"></i></button>
          </div>
        </div>
        <div class="col-md-2">
          <div class="cart me-2 d-none d-md-block">
            <span class="total-items">4</span>
            <img src="{{ asset('assets/bg-cart.3201e64.png') }}" class="w-1">
            <a href="" class="text-black">My Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Header for sm or smaller breakpoints --}}
<div class="container-fluid d-block d-md-none bg-white">
  <div class="row pt-3 justify-content-center">
    <div class="col-2 cart">
      <span class="total-items">4</span>
      <img src="{{ asset('assets/bg-cart.3201e64.png') }}" class="w-1">
    </div>
    <div class="col-8 text-center">
      <a href="{{ url('/') }}">
        <img src="{{ asset('assets/bubble_store_logo.png') }}" class="logo h-100">
      </a>
    </div>
    <div class="col-2">
      <button class="navbar-toggler mobile-nav navbar-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
    </div>
  </div>
  <div class="row p-4 d-flex">
    <input type="text" class="p-1 border-top-orange rounded-0 search-input" placeholder="Enter Your Keyword ...">
    <button class="btn btn-search-mobile rounded-0 btn-orange p-1 text-white"><i class="fa fa-search"></i></button>
  </div>
</div>
<div class="row">
  <div class="col-2">
    <button class="navbar-btn navbar-overlay-close" type="button">
      <span class="fa fa-times"></span>
    </button>
  </div>
  <div class="col-10">
    <nav class="navbar navbar-expand-lg navbar-overlay">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="w-100 bg-dark">
            <div class="row justify-content-center py-3 mx-3">
              <div class="col-6 text-center">
                <select class="select-currency">
                  <option>USD</option>
                  <option>SGD</option>
                </select>
              </div>
            </div>
            <div class="row justify-content-center icon-row px-3">
              <div class="col-3 text-center">
                <i class="fa fa-user icon-round"></i>
                <span class="text-icon">Login</span>
              </div>
              <div class="col-3 text-center">
                <i class="fa fa-shopping-cart icon-round"></i>
                <span class="text-icon">Cart</span>
              </div>
            </div>
          </div>
          <div class="row bg-white g-0">
            <ul class="mobile-nav">
              <li class="nav-item">
                <a class="nav-link border mb-1 text-white bg-dark active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border mb-1 text-reset" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border mb-1 text-reset" href="#">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border mb-1 text-reset" href="#">My Wishlist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border mb-1 text-reset" href="#">My Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border mb-1 text-reset" href="#">Faq</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border mb-1 text-reset" href="#">Terms</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>