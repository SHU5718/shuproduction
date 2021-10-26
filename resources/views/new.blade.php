@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row">
        <div class="newhaikuArea">
            <div class="row">
        <h1 class="newTitle">新着順</h1>
    </div>
            <form action="">
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[0]){{$time[0]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[0]){{$img[0]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[0])Created by {{$created[0]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[1]){{$time[1]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[1]){{$img[1]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[1])Created by {{$created[1]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[2]){{$time[2]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[2]){{$img[2]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[2])Created by {{$created[2]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                </div>
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[3]){{$time[3]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[3]){{$img[3]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[3])Created by {{$created[3]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[4]){{$time[4]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[4]){{$img[4]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[4])Created by {{$created[4]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[5]){{$time[5]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[5]){{$img[5]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[5])Created by {{$created[5]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                </div>
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[6]){{$time[6]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[6]){{$img[6]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[6])Created by {{$created[6]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[7]){{$time[7]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[7]){{$img[7]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[7])Created by {{$created[7]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[8]){{$time[8]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[8]){{$img[8]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[8])Created by {{$created[8]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                    </div>
                </div>
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[9]){{$time[9]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[9]){{$img[9]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[9])Created by {{$created[9]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[10]){{$time[10]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[10]){{$img[10]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[10])Created by {{$created[10]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">@isset($time[11]){{$time[11]}}@endisset</p>
                        <img src="images/uploaded_images/@isset($img[11]){{$img[11]}}@endisset" class="col-8">
                        <a href="" class="">@isset($created[11])Created by {{$created[11]}}@endisset</a>
                        <input type="image" src="images/good.png" class="heart" id="heart" onclick="Good()">
                        <input type="image" src="images/beforeGood.png" class="before" id="before" onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
