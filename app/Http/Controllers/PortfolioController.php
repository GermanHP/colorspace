<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function arqui(){
        return view('portfolios.arquitectura');
    }

    public function design(){
        return view('portfolios.design');
    }

    public function web(){
        return view('portfolios.desarrollo');
    }
}
