@extends('layouts.common')

@section('content')
<div class="haikuCard col-3">
    <p class="date">2021-10-22</p>
    <img src="images/sample01.png" class="col-8">
    <a href="" class="">ハイカイジャー</a>
    <input type="image" src="images/good.png" class="heart" id="heart">
    <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="like()">
</div>

<div>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('img.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
