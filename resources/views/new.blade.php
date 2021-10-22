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
                    <img src="" class="col-8">
                    <a href="" class="">{{$time[0]}}</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="Good()">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="" class="col-8">
                    <a href="" class="">ハイカイジャー</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
