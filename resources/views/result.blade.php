@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="box1 col-lg-8">
            <div class="col-8 offset-2 mt-4 mb-3"><img src="images/sample01.png" class="resultIMG"></div>
            <a class="btn btn-info text-light co-2 offset-4 mb-4 mt-2" href="top">もう一度！</a>
            <a class="btn btn-info text-light co-4 offset-1 mb-4 mt-2" href="top">すぐに投稿！</a>
            <a class="col-2"><img src="images/twitter.png" class="twitterimg mb-4 ms-3 mt-2"></a>
        </div>


        <div class="box2 col-lg-3 ms-4">
            <div class="add mt-3 mb-3">広告</div>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <a href="new">もっと見る</p>
        </div>
    </div>
</div>
@endsection