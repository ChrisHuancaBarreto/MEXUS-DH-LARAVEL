@extends('layouts/layout')

@section('title')
  MeXus - Añadir Producto
@endsection

@section('content')
<div class="create-product" style="margin:50px;">
    <h3 style="text-align:center;font-size:30px;"> Cargar Producto </h3>
<form method="POST" action="{{route('products.store')}}">
        @csrf
        <div class="form-group">
          <label for="product_name">Nombre de Producto:</label>
          <input type="text" class="form-control" name="product_name" id="product_name">

          <label for="product_slug">Slug:</label>
          <input type="text" class="form-control" name="product_slug" id="product_slug">

          <label for="product_category">Categoria: </label>
                <select class="custom-select mr-sm-2" id="product_category">
                  <option selected>Seleccionar Categoria...</option>
                  <option value="1">Computadoras</option>
                  <option value="2">SmarTv</option>
                  <option value="3">Consolas</option>
                </select> <br>

         <br>
          <label for="product_description">Descripcion:</label>
          <textarea class="form-control" id="product_description" name="product_description" rows="3"></textarea> <br>
    
          <label for="product_price">Precio:</label>
          <input type="text" class="form-control-sm" name="product_price" id="product_price"> <br>
    
          <label for="product_img">Imagen </label>
          <input type="file" class="form-control-file" name="product_img" id="product_img">
        </div>
    
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>
@endsection