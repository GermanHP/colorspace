<?php
/**
 * Created by PhpStorm.
 * User: gebbl
 * Date: 14/11/2017
 * Time: 17:50
 */

namespace App\Http\Controllers;


class DevPortfolioController
{
    public function devWordpress(){
        return view('portfolios.devPortfolio.wordpress');
    }

    public function deMedida(){
        return view('portfolios.devPortfolio.medida');
    }
}