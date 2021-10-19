@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="box1 col-lg-8">
            <div class="row">
                <img src="images/senryu.png" class="homeIMG w-50 mb-4">

                <!-- <input type="button" value="生成！" class="col-4 offset-4"> -->
                <a class="btn btn-info text-light col-4 offset-4 mt-4" href="api">ランダム生成！</a>
                <div class="col-4 mt-4"></div>


                <textarea class="col-3 mt-4 offset-1" id="top_word" readonly>@isset($up_five){{$up_five}}@endisset</textarea>
                <input type="text" name="nakasiti" max-length="14" placeholder="七文字の句を入力" class="col-4 mt-4">
                <textarea class="col-3 mt-4" id="bot_word" readonly>@isset($down_five){{$down_five}}@endisset</textarea>
                <!-- <a class="btn btn-info text-light col-4 offset-4 mt-4 mb-5" href="result">作成！</a> -->
                <input type="button" class="btn btn-info text-light col-4 offset-4 mt-4 mb-5" onclick="location.href='result'" value="作成！">
            </div>
        </div>

            <div class="box2 col-lg-3 ms-4">
                <div class="add mt-4 mb-3">広告</div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <a href="new" class="see_more">もっと見る</a>
            </div>
</div>
@endsection
