<?php

namespace App\Http\Controllers;
use App\Input;

class InputController extends Controller
{
    public function index()
    {
     return view('input.index');
    }

}
