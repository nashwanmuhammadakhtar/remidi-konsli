<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogcontroller extends Controller
{
 function index()
 {
    return view('blog', ['data' => 'kata anak nya']);
 }
}