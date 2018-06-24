<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class CustomerController extends Controller
{
   
    public function index()
    {
        //
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        //
         return view('customer.create');
    }

    
    public function store()
    {
        //store
        Customer::create(['firstName'=> request('Firstname'),'lastName'=> request('Lastname'),'idCard'=> request('Idcard'),'tel'=> request('Tel'),'idLine'=> request('Idline'),'address'=> request('Address')]);
        // Customer::create(request(['Firstname','Lastname','Idcard','Tel','Idcard','Address'])); //null
        // $post = new Customer;
        // $post->firstName = request('Firstname');
        // $post->lastName = request('Lastname');
        // $post->idCard = request('Idcard');
        // $post->tel = request('Tel');
        // $post->idLine = request('Idline');
        // $post->address = request('Address');

        // $post->save();

        return redirect('/customers');

    }

    public function show(Customer $customer)
    {
        //
        //
        // $user = customer::find($id);
        return view('customer.show', compact('customer'));
    }
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
