<?php
/**
 * Created by PhpStorm.
 * User: gebbl
 * Date: 28/12/2017
 * Time: 23:34
 */

namespace App\Http\Controllers;


class DesingPortfolioController
{
    public function desingAdvertising(){
        return view('portfolios.desingPortfolio.advertising');
    }

    public function banners(){
        return view('portfolios.desingPortfolio.slidersDesing.banners');
    }

    public function clothing(){
        return view('portfolios.desingPortfolio.slidersDesing.clothing');
    }

    public function ilustraciones(){
        return view('portfolios.desingPortfolio.slidersDesing.ilustraciones');
    }

    public function flyers(){
        return view('portfolios.desingPortfolio.slidersDesing.flyers');
    }

    public function logo(){
        return view('portfolios.desingPortfolio.slidersDesing.logos');
    }

    public function papeleria(){
        return view('portfolios.desingPortfolio.slidersDesing.papeleria');
    }
    public function advertisingDesingPortfolio(){
        return view('portfolios.desingPortfolio.slidersDesing.advertisingdesing');
    }
}