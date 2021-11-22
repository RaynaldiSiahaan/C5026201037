<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }
    function showets()
    {
        return view('etsweb');
    }
    function showphp()
    {
        return view('tugasphp');
    }
    function showmateri()
    {
        return view('materiphp');
    }
}
