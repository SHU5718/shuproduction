@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row">
        <div class="mainarea">
            <div class="row">
                <div class="headarea">
                    <img src="images/man.png" class="Myicon col-6 offset-5 mt-5">
                        <div class="row mt-2">
                            <p class="username fs-4 col-6 offset-5">{{$_SESSION['name']}}</p>
                            <img src="images/fude.png" class="Fude col-2">
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
