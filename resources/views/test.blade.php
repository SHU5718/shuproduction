@extends('layouts.common')

@section('content')

<form action="/total"><p></p></form>


<div class="haikuCard col-3">
    <p class="date">2021-10-22</p>
    <div class="haikuCard col-3">
        <img src="images/uploaded_images/" class="col-8">
        <a href="" class=""></a>
        <input type="image" src="images/good.png" class="heart" id="heart">
        <input type="image" src="images/beforeGood.png" class="likeBtn" id="likeBtn" onclick="Good()">
    </div>
    <!--<img src="images/uploaded_images/" class="col-8">
    <a href="" class=""></a>
    <p id="like_count"></p>
    <input type="image" src="images/good.png" class="heart" id="heart">
    <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="like()">-->

<div>
<script>
    function Good() {
        var product = 7107424674023287;
        const like = document.getElementById('likeBtn');
        const goodNum = document.getElementById('likeCount');
        axios.post('/like',{
        id: 'prodoct';
        }).then(function(responce){
            var a = goodNum.text();
            if (response.data.code == 200) {
                // if 200 then like | count +1
                $('#like span span').text(++a);
                heart.style.visibility = "visible";
                like.style.visibility = "hidden";
            } else if (response.data.code == 202) {
                // if 202 then unlike | count -1
                $('#like span span').text(--a);
                heart.style.visibility = "hidden";
                like.style.visibility = "visible";
            }
        }).catch(function (error) {
                console.log(error);
        });
    };
</script>
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
