<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\User;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Illuminate\Support\Facades\Mail;

class ContactController extends BaseController
{
    public function index(){
        return view('pages.contact', $this->data);
    }
    public function store(Request $request){
        return redirect()->route('contact')->with('succ','Mail is succesfully sent.');
    }

}
