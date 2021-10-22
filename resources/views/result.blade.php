@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="box1 col-lg-8">
            <form action="/upload" method="post">
            <div class="col-8 offset-2 mt-4 mb-3"><img src="images/uploaded_images/{{$_SESSION['image']}}" class="resultIMG"></div>
            <a class="btn btn-info text-light co-2 offset-4 mb-4 mt-2" href="top">もう一度！</a>
            <!-- <a class="btn btn-info text-light co-4 offset-1 mb-4 mt-2" href="top">すぐ投稿！</a> -->
            {{ csrf_field() }}
                <button type="submit" class="btn btn-info text-light co-4 offset-1 mb-4 mt-2">すぐ投稿！</button>
            <a class="col-2"><img src="images/twitter.png" class="twitterimg mb-4 ms-3 mt-2"></a>
        </form>
        </div>


        <div class="box2 col-lg-3 ms-4">
            <div class="add mt-4 mb-3"><img src="images/adsence.gif"></div>
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <a href="new">もっと見る</a>
        </div>
    </div>
</div>
@endsection
