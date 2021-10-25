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
                <img src="images/sample01.png" class="lankProduct">
                <a class="lankuser">ハイカイマン</a>
            </div>
            <div class="row">
                <div class="secondCard">
                <img src="images/second.png" class="first">
                <img src="images/sample01.png" class="lankProduct">
                <a class="lankuser">ハイカイマン</a>
            </div>
            <div class="thirdCard">
                <img src="images/third.png" class="first">
                <img src="images/sample01.png" class="lankProduct">
                <a class="lankuser">ハイカイマン</a>
            </div>
            </div>

            <div class="lankList row gap-5">
                <div class="lankCard col-3">
                    <p class="Lank">4位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
                <div class="lankCard col-3">
                    <p class="Lank">5位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
                <div class="lankCard col-3">
                    <p class="Lank">6位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
            </div>

            <div class="lankList row gap-5">
                <div class="lankCardB col-3">
                    <p class="Lank">7位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">8位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">9位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
            </div>

            <div class="lankList row gap-5">
                <div class="lankCardB col-3">
                    <p class="Lank">10位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">11位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
                <div class="lankCardB col-3">
                    <p class="Lank">12位</p>
                    <img src="images/sample01.png" class="underProduct">
                    <a class="underuser">ハイカイマン</a>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection