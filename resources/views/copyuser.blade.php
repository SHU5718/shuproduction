@extends('layouts.common')

@section('content')
<div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">Takashi</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>

@endsection