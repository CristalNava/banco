<?php

namespace App\Http\Controllers;

use App\prestamos;
use Illuminate\Http\Request;

class prestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamo['prestamos'] = prestamos::latest()->paginate(5);

        return view('prestamos.index',$prestamo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prestamos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosprestamos=request()->all();
       

        $datosprestamos=request()->except('_token');
        prestamos::insert($datosprestamos);
        prestamos::create($request->all());
   
        return redirect()->route('prestamos.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function show(prestamos $prestamos)
    {
        return view('prestamos.show',compact('prestamos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamos $prestamos)
    {
        return view('prestamos.edit',compact('prestamos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestamos $prestamos)
    {
        $request->validate([
            'numero_cliente'=> 'required',
            'nombre' => 'required',  
            'fecha_nacimiento' => 'required',
            'RFC' => 'required',
    ]);
    
        //$Tarjetas->update($request->all());

        return redirect()->route('prestamos.index')
                        ->with('success','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prestamos  $prestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamos $prestamos)
    {
        //
        $prestamos->delete();
        return redirect()->route('prestamos.index')
                        ->with('success','Se Elimino exitosamente');
    }
}
