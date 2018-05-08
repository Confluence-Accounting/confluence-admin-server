<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookkeeping;

class BookkeepingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bookkeeping::all();
    }


   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookkeeping = new bookkeeping();
        $bookkeeping->fill($request->all());
        //valideren
        $bookkeeping->save();
        return $bookkeeping;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        return Bookkeeping::with("addresses")->find($id);
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
        $bookkeeping = Bookkeeping::find($id);
        $bookkeeping->fill($request->all());
        
        $bookkeeping->save();
        return $bookkeeping;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bookkeeping::destroy($id);
    }
}
