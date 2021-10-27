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
                <button type="submit" class="btn btn-info text-light co-4 offset-1 mb-4 mt-2">投稿する！</button>
            <a class="col-2"><img src="images/twitter.png" class="twitterimg mb-4 ms-3 mt-2"></a>
        </form>
        </div>


        <div class="box2 col-lg-3 ms-4">
            <div class="add mt-4 mb-3"><img src="images/adsence.gif"></div>
                <ul>
                  <li class="topDate">@isset($time[0]){{$time[0]}}@endisset</li>
                  <li class="topHaiku">@isset($haikai[0]){{$haikai[0]}}@endisset</li>

                  <li class="topDate">@isset($time[1]){{$time[1]}}@endisset</li>
                  <li class="topHaiku">@isset($haikai[1]){{$haikai[1]}}@endisset</li>

                  <li class="topDate">@isset($time[2]){{$time[2]}}@endisset</li>
                  <li class="topHaiku">@isset($haikai[2]){{$haikai[2]}}@endisset</li>

                  <li class="topDate">@isset($time[3]){{$time[3]}}@endisset</li>
                  <li class="topHaiku">@isset($haikai[3]){{$haikai[3]}}@endisset</li>

                  <li class="topDate">@isset($time[4]){{$time[4]}}@endisset</li>
                  <li class="topHaiku">@isset($haikai[4]){{$haikai[4]}}@endisset</li>
                </ul>
                <a href="new">もっと見る</a>
        </div>
    </div>
</div>
@endsection
