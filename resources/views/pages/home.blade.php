@extends('layout')
@section('style')
    <link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-xl">
  <div class="col-12 mt-5">
  @include('product-templates.product-carousel')
  </div>
  <div class="row">
    <div class="col-12 col-md-6">
    @include('product-templates.product-grid-1')
    </div>
    <div class="col-12 col-md-6">
    @include('product-templates.product-grid-2')
    </div>
  </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection