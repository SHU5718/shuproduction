@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row">
        <div class="mainarea">
            <div class="row">
                <div class="headarea">
                    <img src="images/man.png" id="myIcon" class="Myicon col-6 offset-5 mt-3">
                        <div class="row mt-2">
                            <p class="username fs-4 col-6 offset-5">無限戦隊俳諧ジャー</p>
                            <img src="images/fude.png" id="fudeIcon" class="Fude col-2">
                            <p id="changeName" class="changeName col-4 offset-5">aaa</p>
                        </div>
                        <div class="goodArea row">
                            <p class="goodAll col-3">評価数</p>
                            <p class="good col-3">2</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="haikuArea">
            <div class="imgList row gap-5 mt-5">
                <img src="images/sample01.png" class="haikuIMG col-4 offset-1">
                <img src="images/sample01.png" class="haikuIMG col-4">
                <img src="images/sample01.png" class="haikuIMG col-4">
                <img src="images/sample01.png" class="haikuIMG col-4 offset-1">
                <img src="images/sample01.png" class="haikuIMG col-4">
                <img src="images/sample01.png" class="haikuIMG col-4">
                <img src="images/sample01.png" class="haikuIMG col-4 offset-1">
                <img src="images/sample01.png" class="haikuIMG col-4">
                <img src="images/sample01.png" class="haikuIMG col-4">
            </div>
        </div>
    </div>
</div>
@endsection