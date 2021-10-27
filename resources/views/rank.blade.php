@extends('layouts.common')
@section('content')
<div class="container">
    <div class="row">
        <div class="lankhaikuArea">
            <div class="row">
                <h1 class="lankTitle">ランキング</h1>
            </div>

            <div class="firstCard mt-4">
                <img src="images/first.png" class="first">
                <img src="images/uploaded_images/@isset($img[0]){{$img[0]}}@endisset" class="lankProduct">
                <a class="lankuser">@isset($created[0])Created by {{$created[0]}}@endisset</a>
            </div>
            <div class="row">
                <div class="secondCard">
                <img src="images/second.png" class="first">
                <img src="images/uploaded_images/@isset($img[1]){{$img[1]}}@endisset" class="lankProduct">
                <a class="lankuser">@isset($created[1])Created by {{$created[1]}}@endisset</a>
            </div>
            <div class="thirdCard">
                <img src="images/third.png" class="first">
                <img src="images/uploaded_images/@isset($img[2]){{$img[2]}}@endisset" class="lankProduct">
                <a class="lankuser">@isset($created[2])Created by {{$created[2]}}@endisset</a>
            </div>
            </div>

            <div class="lankList row gap-5">
                <div class="lankCard col-3">
                    <p class="Lank">4位</p>
                    <img src="images/uploaded_images/@isset($img[3]){{$img[3]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[3])Created by {{$created[3]}}@endisset</a>
                </div>
                <div class="lankCard col-3">
                    <p class="Lank">5位</p>
                    <img src="images/uploaded_images/@isset($img[4]){{$img[4]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[4])Created by {{$created[4]}}@endisset</a>
                </div>
                <div class="lankCard col-3">
                    <p class="Lank">6位</p>
                    <img src="images/uploaded_images/@isset($img[5]){{$img[5]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[5])Created by {{$created[5]}}@endisset</a>
                </div>
            </div>

            <div class="lankList row gap-5">
                <div class="lankCardB col-3">
                    <p class="Lank">7位</p>
                    <img src="images/uploaded_images/@isset($img[6]){{$img[6]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[6])Created by {{$created[6]}}@endisset</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">8位</p>
                    <img src="images/uploaded_images/@isset($img[7]){{$img[7]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[7])Created by {{$created[7]}}@endisset</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">9位</p>
                    <img src="images/uploaded_images/@isset($img[8]){{$img[8]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[8])Created by {{$created[8]}}@endisset</a>
                </div>
            </div>

            <div class="lankList row gap-5">
                <div class="lankCardB col-3">
                    <p class="Lank">10位</p>
                    <img src="images/uploaded_images/@isset($img[9]){{$img[9]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[9])Created by {{$created[9]}}@endisset</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">11位</p>
                    <img src="images/uploaded_images/@isset($img[10]){{$img[10]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[10])Created by {{$created[10]}}@endisset</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">12位</p>
                    <img src="images/uploaded_images/@isset($img[11]){{$img[11]}}@endisset" class="underProduct">
                    <a class="underuser">@isset($created[11])Created by {{$created[11]}}@endisset</a>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
