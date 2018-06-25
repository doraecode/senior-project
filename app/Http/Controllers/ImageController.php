<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\CostWork;
use App\Customer;
use App\Claim;
use App\CostEtc;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        // $user = customer::find($id);
        $customer = Customer::find($id);

        $images = Image::get();
        return view('claim.component.image',compact('images','customer'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        if($request->exists('btn-upload')){
            $file = $request->file('uploader');
            $path = 'images/uploads';
            $filename = $file->getClientOriginalName();
            $file->move('images/uploads',$file->getClientOriginalName());
            $image = new Images;
            $image->image_name = $filename;
            $image->save();
            echo 'Uploaded';
 
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('image.show');
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
