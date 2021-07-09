<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class testController extends Controller
{
    public function show(Request $req)
    {
       dd($req);
    }
}