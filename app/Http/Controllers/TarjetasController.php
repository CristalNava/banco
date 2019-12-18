<?php

namespace App\Http\Controllers;

use App\tarjetas;

use Illuminate\Http\Request;

class TarjetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarjeta ['tarjetas']= tarjetas::latest()->paginate(5);

        return view('tarjetas.index', $tarjeta);
                //->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarjetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // $this->validate($request,[
           // 'name'=> 'required',
            //'fecha_de_nacimiento' => 'required',  
            //'numero_de_tarjeta' => 'required',
            //'RFC' => 'required',
        //]);
        //$datosTarjeta=request()->all();
       

        $datosTarjeta=request()->except('_token');

        tarjetas::insert($datosTarjeta);
        tarjetas::create($request->all());

        
   
        return redirect()->route('tarjetas.index')
                        ->with('success','Product created successfully.');
   
        //return response()->json($datosTarjeta);
                        //->with('success','Tarjeta registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarjetas  $tarjetas
     * @return \Illuminate\Http\Response
     */
    public function show(Tarjetas $tarjetas)
    {
        return view('tarjetas.show',compact('tarjetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarjetas  $tarjetas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarjetas $tarjetas)
    {
        return view('tarjetas.edit',compact('tarjetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarjetas  $tarjetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarjetas $tarjetas)
    {
        $request->validate([
            'name'=> 'required',
            'fecha_nacimiento' => 'required',  
            'numero_tarjeta' => 'required',
            'RFC' => 'required',

    ]);
    
        //$Tarjetas->update($request->all());

        return redirect()->route('tarjetas.index')
                        ->with('success','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarjetas  $tarjetas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarjetas $tarjetas)
    {
        $tarjetas->delete();
        return redirect()->route('tarjetas.index')
                        ->with('success','Se Elimino exitosamente');
    }
}
