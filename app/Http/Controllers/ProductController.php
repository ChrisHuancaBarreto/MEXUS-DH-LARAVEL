<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() /* se encarga de mostrar una coleccion de productos  */
    {
        $products = Product::all();
        return view('products',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  /*  se encarga de mostrar la vista para crear un nuevo producto*/
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  /* guarda el nuevo producto */
    {
        $product_name=request('product_name');
        $product_description=request('product_description');
        $product_price=request('product_price');
        $product_category=request('product_categoy');
        $product_img=request('product_img');
        $product_slug=request('product_slug');

        Product::create([
            'name'=> $product_name,
            'description'=>$product_description,
            'price'=>$product_price,
            'imageUrl'=>$product_img,
            'slug'=>$product_slug,
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) /* muestra el producto con el id*/
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) /* modifica el producto */ 
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) /* actualiza lo que se dio en edit */
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  /*  elimina el producto */
    {
        //
    }
}
