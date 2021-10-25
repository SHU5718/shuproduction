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
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="Good()">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                </div>
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                </div>
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                    </div>
                </div>
                <div class="newList row gap-5 mt-5">
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                    <div class="haikuCard col-3">
                        <p class="date">2021-10-22</p>
                        <img src="images/sample01.png" class="col-8">
                        <a href="" class="">ハイカイジャー</a>
                        <input type="image" src="images/good.png" class="heart" id="heart">
                        <input type="image" src="images/beforeGood.png" class="before" id="before">
                        <input type="text" class="hide">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection