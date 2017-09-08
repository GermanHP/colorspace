@extends('layouts.countdown')
@section('contenido')

    <div class="container">
    <div class="text-center">
        <img id="imagen" src="img/logospace.png" alt="">
    </div>

        <br><br><br><br><br><br><br><br><br><br>
        <div class="text-center">
    <ul class="countdown">
        <li>
            <span class="days"></span>
            <p class="timeRefDays"></p>
        </li>
        <li>
            <span class="hours"></span>
            <p class="timeRefHours"></p>
        </li>
        <li>
            <span class="minutes"></span>
            <p class="timeRefMinutes"></p>
        </li>
        <li>
            <span class="seconds"></span>
            <p class="timeRefSeconds"></p>
        </li>
    </ul>
        </div>
        <br>
        <h2 class="text-center count-text">We almost arrive!</h2>
    </div>
@stop