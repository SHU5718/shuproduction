@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="box1 col-lg-8">
            <div class="row">
            <img src="images/senryu.png" class="homeIMG w-50 mb-4">
            <input type="text" name="situation" size="" maxlength="255" placeholder="シチュエーションを入力" class="col-8 offset-2 mt-5">
            <!-- <input type="button" value="生成！" class="col-4 offset-4"> -->
            <button type="button" class="btn btn-info text-light col-4 offset-4 mt-4">ランダム生成！</button>
            <div class="col-4 mt-4"></div>

            <!-- <div class="row"> -->
            <textarea class="col-4 mt-4" id="top_word" readonly></textarea>
            <input type="text" name="nakasiti" max-length="14" placeholder="七文字の句を入力" class="col-4 mt-4">
            <textarea class="col-4 mt-4" id="bot_word" readonly></textarea>
            <a class="btn btn-info text-light col-4 offset-4 mt-4 mb-5" href="result">作成！</a>
        </div>
</div>
<!-- </div> -->

        <div class="box2 col-lg-3">
            <div class="add mt-3 mb-3">広告</div>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <a href="new" class="see_more">もっと見る</p>
        </div>
    </div>
</div>
@endsection