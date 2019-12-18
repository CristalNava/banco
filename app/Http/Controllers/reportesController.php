<?php

namespace App\Http\Controllers;

use App\reportes;
use Illuminate\Http\Request;

class reportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reporte['reportes'] = reportes::latest()->paginate(5);

        return view('reportes.index',$reporte);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reportes.create');
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
        $datosreporte=request()->all();
       

        $datosreporte=request()->except('_token');
        
        reportes::insert($datosreporte);
        reportes::create($request->all());

        return redirect()->route('reportes.index')
                        ->with('success','created successfully.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function show(reportes $reportes)
    {
        return view('reportes.show',compact('reportes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function edit(reportes $reportes)
    {
        return view('reportes.edit',compact('reportes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reportes $reportes)
    {
        $request->validate([
            'nombre'=> 'required',
            'ApeidoPaterno' => 'required',  
            'ApeidoMaterno' => 'required',
            'no_tarjeta' => 'required',
    ]);

        return redirect()->route('reportes.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reportes  $reportes
     * @return \Illuminate\Http\Response
     */
    public function destroy(reportes $reportes)
    {
        $reportes->delete();
        return redirect()->route('reportes.index')
                        ->with('success','deleted succefully');
    }
}
