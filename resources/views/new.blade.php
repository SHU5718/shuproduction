@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row">
        <div class="newhaikuArea">
            <div class="row">
        <h1 class="newTitle">新着順</h1>
    </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[0]}}" class="col-8">
                    <a href="" class="">{{$creater[0]}}</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="Good()">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[1]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[2]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[3]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[4]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[5]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[6]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[7]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[8]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[9]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[10]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/{{$img[11]}}" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
