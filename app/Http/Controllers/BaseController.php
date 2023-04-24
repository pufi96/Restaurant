<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $data;

    public function __construct()
    {
        $this->data["nav"] = Nav::all();
    }
}
