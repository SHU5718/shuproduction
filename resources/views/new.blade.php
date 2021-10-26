@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row">
        <div class="newhaikuArea">
            <div class="row">
        <h1 class="newTitle">新着順</h1>
    </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[0]){{$img[0]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[0]){{$created[0]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="Good()">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[1]){{$img[1]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[1]){{$created[1]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[2]){{$img[2]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[2]){{$created[2]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[3]){{$img[3]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[3]){{$created[3]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[4]){{$img[4]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[4]){{$created[4]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[5]){{$img[5]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[5]){{$created[5]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[6]){{$img[6]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[6]){{$created[6]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[7]){{$img[7]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[7]){{$created[7]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[8]){{$img[8]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[8]){{$created[8]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
            <div class="newList row gap-5 mt-5">
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[9]){{$img[9]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[9]){{$created[9]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[10]){{$img[10]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[10]){{$created[10]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
                <div class="haikuCard col-3">
                    <img src="images/uploaded_images/@isset($img[11]){{$img[11]}}@endisset" class="col-8">
                    <a href="" class="">@isset($created[11]){{$created[11]}}@endisset</a>
                    <input type="image" src="images/good.png" class="heart" id="heart">
                    <input type="image" src="images/beforeGood.png" class="before" id="before">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
