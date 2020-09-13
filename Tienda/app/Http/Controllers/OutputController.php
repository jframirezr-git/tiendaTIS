<?php

namespace App\Http\Controllers;
use App\Output;

class OutputController extends Controller
{
    public function index()
    {
     return view('output.index');
    }

}
