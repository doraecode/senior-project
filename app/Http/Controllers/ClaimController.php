<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;
class ClaimController extends Controller
{
   
    

    
    public function create()
    {
        ;
        return view('claim.create');
    }
    public function store(Request $request)
    {
        Claim::create(['firstName'=> request('Firstname'),'lastName'=> request('Lastname'),'idCard'=> request('Idcard'),'tel'=> request('Tel'),'idLine'=> request('Idline'),'address'=> request('Address')]);
        // Customer::create(request(['Firstname','Lastname','Idcard','Tel','Idcard','Address'])); //null
        // $post = new Customer;
        // $post->firstName = request('Firstname');
        // $post->lastName = request('Lastname');
        // $post->idCard = request('Idcard');
        // $post->tel = request('Tel');
        // $post->idLine = request('Idline');
        // $post->address = request('Address');

        // $post->save();

        return redirect('/claim');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
