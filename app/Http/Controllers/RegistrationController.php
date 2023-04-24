<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends BaseController
{
    public function index(){
        return view('pages.registration', $this->data);
    }
        public function doRegistration(Request $request){
            try{
                \DB::beginTransaction();
                $user = User::where('email', $request->email)->first();
                if($user){
                    return redirect()->route('login')->with('error', 'Email already exist.');
                }
                User::create($request->only('name', 'surname','email' ,'password'));
                \DB::commit();
            }catch (\Exception $e){
                \DB::rollBack();
                return redirect()->route('reservation')->with('error', "Registration isn't successfull.");
            }
            session()->put('user', $user);
            return redirect()->route('login')->with('succ', 'Registration is successfull.');
    }
}
