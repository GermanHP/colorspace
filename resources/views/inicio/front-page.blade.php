@extends('layouts.app')
@section('content')
    <div class="row">
       <div class="col-lg-3 div-imagen">
           <div id="cont-arqui" >
               <h4 class="text-center white-text">{{trans('front.interior')}}</h4>
               <h4 class="text-center white-text">{{trans('front.const')}}</h4>
               <h4 class="text-center white-text">{{trans('front.remo')}}</h4>
               <h4 class="text-center white-text">{{trans('front.inmo')}}</h4>
           </div>
                <a href="{{url('/architecture')}}"><img class="desvanecer inicio" src="img/front/A1.jpg" alt=""></a>
               <h2 id="arquitectura" class="text-center"><span>{{trans('front.arq')}}</span></h2><br>
       </div>
        <div class="col-lg-3 div-imagen">
            <div id="cont-diseño">
                <h4 class="text-center white-text">{{trans('front.identiCorp')}}</h4>
                <h4 class="text-center white-text">{{trans('front.publi')}}</h4>
                <h4 class="text-center white-text">{{trans('front.audiovi')}}</h4>
                <h4 class="text-center white-text">{{trans('front.imgGraph')}}</h4>
                <h4 class="text-center white-text">{{trans('front.ilustrar')}}</h4>
            </div>
            <a href="{{url('/design')}}"><img class="desvanecer inicio" src="img/front/A2.jpg" alt=""></a>
            <h2 id="diseniografico" class="text-center"><span>{{trans('front.des')}}</span></h2><br>
        </div>
        <div class="col-lg-3 div-imagen">
            <div id="cont-devel">
                <h4 class="text-center white-text">{{trans('front.desWebMed')}}</h4>
                <h4 class="text-center white-text">{{trans('front.desWebCorp')}}</h4>
                <h4 class="text-center white-text">{{trans('front.desWebPYME')}}</h4>
                <h4 class="text-center white-text">{{trans('front.desWebPort')}}</h4>
                <h4 class="text-center white-text">{{trans('front.desWebOn')}}</h4>
            </div>
            <a href="{{url('webdesign')}}"><img class="desvanecer inicio" src="img/front/A3.jpg" alt=""></a>
            <h2 id="desarrolloweb" class="text-center"><span>{{trans('front.desWeb')}}</span></h2><br>
        </div>
        <div class="col-lg-3 div-imagen">
            <a href="#"><img class="desvanecer inicio" src="img/front/A4.jpg" alt=""></a>
            <h2 id="promociones" class="text-center"><span>{{trans('front.prox')}}</span></h2><br>
        </div>
    </div>
@stop