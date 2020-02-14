@extends('layouts/layout')

@section('title')
  {{$product->name}} - MeXus
@endsection

@section('content')
  <div class="container py-4">
    <div class="row">
      <div class="col-12">
        <h1>{{ $product->name }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-6">
        <img src="img/productos/pc_1.jpg" alt="{{ $product->name }}" />
      </div>
      <div class="col-12 col-lg-6">
        <p class="display-2 font-weight-bold">${{ $product->price }}</p>
      </div>
    </div>
  </div>
@endsection