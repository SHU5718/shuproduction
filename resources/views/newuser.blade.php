@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="box3 col-6 bg-light">
            <p class="login_title text-center fs-2 mb-5 text-light">新規登録</p>
            <p class="new_title">ユーザーネーム</p>
            <input type="text" name="userName" max-length="16" placeholder="無限戦隊ハイカイジャー" class="col-6 offset-3 mb-4">
            <p class="new_title">メールアドレス</p>
            <input type="email" name="Email" max-length="255" placeholder="example@senryu.com" class="col-6 offset-3 mb-4">
            <p class="new_title">パスワード</p>
            <input type="text" name="Password" max-length="32" placeholder="password" class="col-6 offset-3 mb-4">
            <p class="new_title">パスワード(確認用)</p>
            <input type="text" name="Password" max-length="32" placeholder="password(確認用)" class="col-6 offset-3 mb-4">
            <a class="btn btn-info text-light col-6 offset-3 mb-5">新規登録</a>
            
        </div>
    </div>
</div>
@endsection('content')