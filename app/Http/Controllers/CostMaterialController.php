<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CostMaterial;
use App\Customer;


class CostMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index($id)
    {
       $customer = Customer::find($id);

       $costMaterials = CostMaterial::all();

        return view('claim.component.costMaterial', compact('costMaterials','customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('claim.component.costMaterial');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CostMaterial::create(['number'=> request('Number'),'name'=> request('Name'),'damageLevel'=> request('DamageLevel'),'price'=> request('Price'),'priceOffer'=> request('PriceOffer'),'priceOk'=> request('PriceOk'),'junk'=> request('Junk')]);
        

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
