<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::latest()->paginate(5);

        return view('products.index',compact('products'))
            ->with('i',(request()->input('page',1) -1) *5);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return ('CORRECTO');
        //$request->validate([
          //  'no_cliente'=> 'required',
          //  'nombre' => 'required',
          //  'fecha_nacimiento' => 'required',
           // 'direccion' => 'required',
           // 'telefono' => 'required',

        
        //]);
        product::create($request->all());
   
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //$request->validate([
         //   'no_cliente'=> 'required',
         //   'nombre' => 'required',
          //  'fecha_nacimiento' => 'required',
          //  'direccion' => 'required',
          //  'telefono' => 'required',

   // ]);
    
        $product->update($request->all());
        $product=request()->except('_token');

        product::insert($product);
   
        return response()->json($product);

        return redirect()->route('products.index')
                        ->with('success','product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','product deleted succefully');
    }
}
