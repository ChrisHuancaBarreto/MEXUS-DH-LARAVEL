@extends('layouts/layout')

@section('content')

<div class="container-fluid">
    <h4>Computadoras</h4>

    <div class="row">
        @foreach($products as $product)

        <div class="col-sm-6 col-md-3">
            <div class="card" style="width: auto;">

                    <img src="img/productos/{{$product->imageUrl}}.jpg" class="card-img-top hvr-bounce-in" alt="foto-producto">

                    <div class="card-body">

                    <h5 class="card-title">{{$product->name}}</h5>

                      <h3 style="background: transparent;color: blue;">$ {{$product->price}}</h3>

                      <p class="card-text">{{$product->description}}</p>

                      <div class="btn-product">
                        <a href="#" class="btn btn-primary">Comprar</a>
                        <a href="{{route('product.show',$product)}}" class="btn btn-primary">Ver</a>
                        <a href="#" class="btn btn-primary"><i class="fas fa-shopping-cart"></i></a>
                      </div>
                    </div>
             </div>
        </div>
            
        @endforeach

    </div>

</div>
    



@endsection