@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="box1 col-lg-8">
            <div class="row">
                <img src="images/senryu.png" class="homeIMG w-50 mb-4">

                <!-- <input type="button" value="生成！" class="col-4 offset-4"> -->
                <a class="btn btn-info text-light col-4 offset-4 mt-4" href="/api">ランダム生成！</a>
                <div class="col-4 mt-4"></div>

                <form action="/result" method="post">
                    <div class="row">
                    <textarea class="col-3 mt-4 offset-1" name ="top_word" id="top_word" readonly>@isset($up_five){{$up_five}}@endisset</textarea>
                    <input type="text" name="nakasiti" max-length="14" placeholder="七文字の句を入力" class="nakasiti_word col-4 mt-4">
                    <textarea class="col-3 mt-4" name ="bot_word" id="bot_word" readonly>@isset($down_five){{$down_five}}@endisset</textarea>
                    <!-- <a class="btn btn-info text-light col-4 offset-4 mt-4 mb-5" href="result">作成！</a> -->
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-info text-light col-4 offset-4 mt-4 mb-5">作成！</button>
                    </div>
                </form>
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
</div>
@endsection

<!--
評価ボタンのテンプレート
<div class="row" id="like">
    <span class="text-muted"><span>{{ $Like_counts }}</span>//入れたい文字</span>
</div>

JS
$('#like').click(function () {
    // postとurl
    axios.post('/like', {
        // info
        id: "{{ $post->id }}",
    }).then(function(response) {
        var a = $('#like span span').text();
        if (response.data.code == 200) {
            // if 200 then like | count +1
            $('#like span span').text(++a);
        } else if (response.data.code == 202) {
            // if 202 then unlike | count -1
            $('#like span span').text(--a);
        }
    }).catch(function (error) {
        console.log(error);
    });
});

作品 (閲覧)画面の評価数カウント (その中に書き込む)

    // count初期化　0にする
    $like_counts = 0;
    // get count from Redis
    $count_in_redis = Redis::get('like_count'.$id);
    if (!is_null($count_in_redis)) {
        $like_counts += $count_in_redis;
    }

    // get count from mysql
    $count_in_mysql = Like::where('product_id',$id->first();
    if (!empty($count_in_mysql)) {
        // summarize
        $Like_counts += $count_in_mysql->count;
    }
-->
