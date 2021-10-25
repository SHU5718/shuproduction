@extends('layouts.common')

@section('content')
<div class="container">
  <div class="row mt-4">
    <div class="msgBox col-5 offset-3 mt-4">
        <p class="msgText mt-3 fs-2">@isset($msg){{$msg}}@endisset</p>
        <hr>
        <p class="guide">トップ画面に戻りSENRYUで思う存分に俳句をおつくりください</P>
    </div>
  </div>
</div>

@endsection