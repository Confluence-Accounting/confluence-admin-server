<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accountant;

class AccountantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //geeft mij alle accountants
    {
        return Accountant::all();
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accountant = new accountant();
        $accountant->fill($request->all());
        //valideren
        $accountant->save();
        return $accountant;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        return Accountant::with("addresses")->find($id);
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
        $accountant = Accountant::find($id);
        $accountant->fill($request->all());
        
        $accountant->save();
        return $accountant;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accountant::destroy($id);
    }
}
