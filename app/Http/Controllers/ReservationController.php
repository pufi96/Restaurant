<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class ReservationController extends BaseController
{
    public function index(){
        return view('pages.reservation', $this->data);
    }
    public function store(ReservationRequest $request){
        try{
            \DB::beginTransaction();
//            $r=new Reservation();
//            $r->email=$request->email;
//            $r->date=$request->date;
//            $r->message=$request->message;
//            $r->save();
            Reservation::create($request->only('email','date','message'));
            \DB::commit();
        }catch (Exception $e){
            \DB::rollBack();
            return redirect()->route('reservation')->with('error', "Reservation isn't successfull.");
        }
        return redirect()->route('reservation')->with('succ','Reservation is succesfully.');
    }
}
