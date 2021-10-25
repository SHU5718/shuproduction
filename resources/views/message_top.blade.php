@extends('layouts.common')

@section('content')
<div class="container">
  <div class="row mt-4">
    <div class="msgBox col-5 offset-3 mt-4">
        <p class="msgText mt-3 fs-2">@isset($msg){{$msg}}@endisset</p>
        <hr>
        <a class="guide" href="/top">トップ画面に戻る</a>
    </div>
  </div>
</div>

@endsection
