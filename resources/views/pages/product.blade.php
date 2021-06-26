@extends('layout')
@section('style')
    <link href="{{ asset('vendor/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-xl">
  <div class="row">
    @include('product-templates.product-header')
  </div>
  <div class="row bg-white">
    <div class="col-md-5 col-12">
    @include('product-templates.product-gallery')
    </div>
    <div class="col-md-7 col-12 p-md-5 p-3">
    @include('product-templates.product-detail')
    </div>
  </div>
  <div class="row bg-white mt-3 mt-md-0">
    <div class="col-12 p-md-5 p-3">
      @include('product-templates.product-detail-2')
    </div>
  </div>
  <div class="row mt-5">
    @include('product-templates.product-reference')
  </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/product-detail.js') }}"></script>
@endsection