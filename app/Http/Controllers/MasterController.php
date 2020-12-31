<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function master(){
    return view('/master');
    }
}
