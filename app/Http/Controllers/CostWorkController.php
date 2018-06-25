<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CostWork;
use App\Customer;
use App\Claim;
use App\CostEtc;



class CostWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $customer = Customer::find($id);
        $costWorks = CostWork::all();
        return view('claim.component.costWork', compact('costWorks','customer'));
    }

    
    public function create()
    {
        //
        return view('claim.component.costWork');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CostWork::create(['number'=> request('Number'),'name'=> request('Name'),'damageLevel'=> request('DamageLevel'),'price'=> request('Price'),'priceOffer'=> request('PriceOffer'),'priceOk'=> request('PriceOk'),'claim_id'=> request('Claim_id')]);
        

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
