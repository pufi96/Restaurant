<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function post(LoginRequest $request)
    {
        $email=$request->get("email");
        $password = $request->get("password");
        try{
            $user=User::where("email", "=", $email)
                ->where("passowrd", "=", $password)
                ->first();
            if(!$user){
                return redirect()->back()->with([
                    "msg"=>"Email and password doesn't match with our data  base."
                ]);
            }
            $request->session()->put("user",$user);
            return redirect("/user");
        }catch (\Exception $ex){
            $exid =uniqid();
            Log::error($exid . " " . $ex->getMessage());
            return view("error", ["errorId"=>$exid]);
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->session()->forget("user");
            return redirect()->route("\login");
        }catch (\Exception $ex){
            $exid = uniqid();
            Log::error($exid . " " . $ex->getMessage());
            return view("error", ["errorId"=>$exid]);
        }

    }
}
