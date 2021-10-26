@extends('layouts.common')

@section('content')
<div class="container mb-5">
    <div class="row mt-4">
        <div class="box1 col-lg-8">
            <div class="row">
                <img src="images/senryu.png" class="homeIMG w-50 mb-4">

                <!-- <input type="button" value="生成！" class="col-4 offset-4"> -->
                <a class="btn btn-info text-light col-4 offset-4 mt-3" href="/api">ランダム生成！</a>
                <div class="col-4 mt-4"></div>

                <form action="/result" method="post">
                    <div class="row mt-1">
                    <textarea class="col-3 mt-4 offset-1" name ="top_word" id="top_word" readonly>@isset($up_five){{$up_five}}@endisset</textarea>
                    <input type="text" name="nakasiti" max-length="14" placeholder="七文字の句を入力" class="nakasiti_word col-4 mt-4">
                    <textarea class="col-3 mt-4" name ="bot_word" id="bot_word" readonly>@isset($down_five){{$down_five}}@endisset</textarea>
                    <!-- <a class="btn btn-info text-light col-4 offset-4 mt-4 mb-5" href="result">作成！</a> -->
                    {{ csrf_field() }}
                    <div class="topmsg col-6 text-danger mt-3 mb-1">@isset($msg){{$msg}}@endisset</div>
                    <button type="submit" class="btn btn-info text-light col-4 offset-4 mt-3 mb-5">作成！</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="box2 col-lg-3 ms-4">
            <div class="add mt-4 mb-3"><img src="images/adsence.gif"></div>
            <p class="topNew bg-info text-light">新着順</p>
            <ul>
                <li class="topDate">2021-10-22</li>
                <li class="topHaiku">ああああ　いいいいいいい　ううううう</li>

                <li class="topDate">2021-10-22</li>
                <li class="topHaiku">@isset($haikai[1]){{$haikai[1]}}@endisset</li>

                <li class="topDate">2021-10-22</li>
                <li class="topHaiku">@isset($haikai[2]){{$haikai[2]}}@endisset</li>

                <li class="topDate">2021-10-22</li>
                <li class="topHaiku">@isset($haikai[3]){{$haikai[3]}}@endisset</li>
                
                <li class="topDate">2021-10-22</li>
                <li class="topHaiku">@isset($haikai[4]){{$haikai[4]}}@endisset</li>
            </ul>
            <a href="new" class="see_more">もっと見る</a>
        </div>
    </div>
    <!-- モーダルウィンドウ -->
    <div class="popup" id="js-popup">
    <div class="popup-inner">
        <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
        <a href="#"><img src="images/sample01.png" alt="ポップアップ画像"></a>
        <p class="popup-text">SENRYUでは画像のように、五七五の俳句を生成することができます。上の句と下の句はランダムで、<span>中七(七語の部分)</span>を自分たちで作り自分だけの面白い俳句を作ろう！</p>
    </div>
    <div class="black-background" id="js-black-bg"></div>
    </div>
</div>
@endsection
