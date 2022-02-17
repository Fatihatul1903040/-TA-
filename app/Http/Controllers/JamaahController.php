<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamaahController extends Controller
{
    public function index()
    {
        return view ('layoutjamaah');
    }
}
