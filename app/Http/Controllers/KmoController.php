<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kmo;

class KmoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
         return Kmos::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kmo = new Kmo();
        $kmo->fill($request->all());
        //valideren
        $kmo->save();
        return $kmo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {   
        return Kmo::with("addresses")->find($id);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
    {
        $kmo = Kmo::find($id);
        $kmo->fill($request->all());
        
        $kmo->save();
        return $kmo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kmo::destroy($id);
    }
}