@extends('layouts.common')

@section('content')

<form action="/total"><p></p></form>


<div class="haikuCard col-3">
    <p class="date">2021-10-22</p>
    <div class="haikuCard col-3">
        <img src="images/uploaded_images/{{$img[0]}}" class="col-8">
        <a href="" class="">{{$created[0]}}</a>
        <input type="image" src="images/good.png" class="heart" id="heart">
        <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="Good()">
    </div>
    <!--<img src="images/uploaded_images/" class="col-8">
    <a href="" class=""></a>
    <p id="like_count"></p>
    <input type="image" src="images/good.png" class="heart" id="heart">
    <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="like()">-->

    <script>
        document.addEventListener('load', function() {
            var product_id = $product_id;
            const like = document.getElementById('before');
            const heart = document.getElementById('heart');
            heart.addEventListener('click', function() {
                axios.post('/like', {
                    id: 'product_id'
                }).then(function(response){
                    var a = likeCount.text();
                    if (response.data.code == 200) {
                        $('#like span span').text(++a);
                        like.style.visibility = "hidden";
                        heart.style.visibility = "visible";
                    } else if (response.data.code == 202) {
                        $('#lilke span span').text(--a);
                        like.style.visibility = "visible";
                        heart.style.visibility = "hidden";
                    }
                }).catch(function (error) {
                    console.log(error);
                });
            });
        });
    </script>
</div>

<div>
    <p>{{$_SESSION['id']}}</p>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('img.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
