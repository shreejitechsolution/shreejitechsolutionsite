<?php

namespace App\Http\Controllers\website\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siteconterller extends Controller
{
    public function index(){
        return view('website/index');
    }
}
