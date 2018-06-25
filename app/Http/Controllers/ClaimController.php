<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;
use App\Customer;
use App\Contact;
use App\Offer;
use App\Car;




class ClaimController extends Controller
{
   
    public function index()
    {
        //
        $cars = Car::all();
        $contacts = Contact::all();
        $offers = Offer::all();
        $customers = Customer::all();
        $claims = Claim::all();

        return view('claim.component.information', compact('claims','cars','contacts','offers','customers'));
    }
    public function claimIndex()
    {
        //
        $cars = Car::all();
        $contacts = Contact::all();
        $offers = Offer::all();
        $customers = Customer::all();
        $claims = Claim::all();

        return view('claim.index', compact('claims','cars','contacts','offers','customers'));
    }

    
    public function create($id)
    {
        $customer = Customer::find($id);
       
        return view('claim.component.information',compact('customer'));
    }
    public function store(Request $request )
    {
        Claim::create(['repairName'=> request('RepairName'),'insureName'=> request('InsureName'),'claimNo'=> request('ClaimNo'),'accClaimNo'=> request('AccClaimNo'),'accPolicyNo'=> request('AccPolicyNo'),'accStatusCar'=> request('AccStatusCar'),'carIdenNo'=> request('CarIdenNo'),'deduction'=> request('Deduction'),'deductionSrc'=> request('DeductionSrc'),'insureId'=> request('InsureId'),'insurePhone'=> request('InsurePhone'),'insureFax'=> request('InsureFax'),'policyTypeId'=> request('PolicyTypeId'),'insuredValue'=> request('InsuredValue'),'callAccidentDate'=> request('CallAccidentDate'),'accidentDate'=> request('AccidentDate'),'statusClaim'=> request('StatusClaim'),'customer_id'=> request('Customer_Id')]);

        Car::create(['carRegNo'=> request('CarRegNo'),'carRegProvince'=> request('CarRegProvince'),'car_CMFG'=> request('Car_CMFG'),'carModel'=> request('CarModel'),'carModel_Year'=> request('CarModel_Year'),'carModelType'=> request('CarModelType'),'chassino'=> request('Chassino'),'modelNo'=> request('ModelNo'),'engineNo'=> request('EngineNo'),'carDescId'=> request('CarDescId'),'color_Id'=> request('Color_Id'),'useColorType_Id'=> request('UseColorType_Id')]);

        Contact::create(['contactDate'=> request('ContactDate'),'repContactName'=> request('RepContactName'),'hopeFinish'=> request('HopeFinish'),'levelOilGetCar'=> request('LevelOilGetCar'),'levelOilOfferCar'=> request('LevelOilOfferCar'),'kmGetCar'=> request('KmGetCar'),'kmOfferCar'=> request('KmOfferCar'),'itemInCar'=> request('ItemInCar'),'lossOther'=> request('LossOther'),'estimateLabor'=> request('EstimateLabor'),'typeRepair'=> request('TypeRepair'),'estimatePart'=> request('EstimatePart'),'appointmentsGetCar'=> request('AppointmentsGetCar'),'completeCarDate'=> request('CompleteCarDate'),'carRepairDate'=> request('CarRepairDate'),'repGetCarName'=> request('RepGetCarName')]);

        Offer::create(['customerGetCarDate'=> request('CustomerGetCarDate'),'customerNameGetCar'=> request('CustomerNameGetCar'),'customerIdCardGetCar'=> request('CustomerIdCardGetCar'),'customerTelGetCar'=> request('CustomerTelGetCar'),'relation'=> request('Relation'),'repNameOfferCar'=> request('RepNameOfferCar'),'driver_Name'=> request('Driver_Name'),'driver_PassportsNo'=> request('Driver_PassportsNo'),'driver_Phone_No'=> request('Driver_Phone_No'),'commentOfferCar'=> request('CommentOfferCar')]);

        // Customer::create(request(['Firstname','Lastname','Idcard','Tel','Idcard','Address'])); //null
        // $post = new Customer;
        // $post->firstName = request('Firstname');
        // $post->lastName = request('Lastname');
        // $post->idCard = request('Idcard');
        // $post->tel = request('Tel');
        // $post->idLine = request('Idline');
        // $post->address = request('Address');
        // $claim = new Claim;
        // $customer = new Customer;
        // $claim->customer_id =  $customer->id;
        // $post->save();

        return redirect('/claims');
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
