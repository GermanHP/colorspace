<?php
/**
 * Created by PhpStorm.
 * User: gebbl
 * Date: 7/1/2018
 * Time: 23:52
 */

namespace App\Http\Controllers;


class arquiPortfolioController
{
    public function arquiArchitectural(){
        return view('portfolios.arquiPortfolio.arquitectonico');
    }
    public function adidasMetro(){
        return view('portfolios.arquiPortfolio.slidersArqui.adidasMetro');
    }
    public function adidasMulti(){
        return view('portfolios.arquiPortfolio.slidersArqui.adidasMulti');
    }
    public function adidasPerMulti(){
        return view('portfolios.arquiPortfolio.slidersArqui.adidasPerMulti');
    }
    public function flexiSanMiguel(){
        return view('portfolios.arquiPortfolio.slidersArqui.flexi');
    }
    public function reebokMulti(){
        return view('portfolios.arquiPortfolio.slidersArqui.reebokMulti');
    }
    public function carcamoNaranjos(){
        return view('portfolios.arquiPortfolio.slidersArqui.carcamo');
    }
}