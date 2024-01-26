<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricelistController extends Controller
{
    public function index()
    {
        return view('pricelist.index');
    }
}
