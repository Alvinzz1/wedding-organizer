<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
    public function index()
    {
        return view('promo.index');
    }
}
