<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReservasiController extends Controller
{
    public function index()
    {
        return view('reservasi.index');
    }
}
