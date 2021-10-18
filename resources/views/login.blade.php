@extends('layouts.common')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="box3 col-6 bg-light">
            <p class="login_title text-center fs-2 mb-5 text-light">ログイン</p>
            <p class="new_title">メールアドレス</p>
            <input type="email" name="Email" max-length="255" placeholder="example@senryu.com" class="col-6 offset-3 mb-4">
            <p class="new_title">パスワード</p>
            <input type="text" name="Password" max-length="32" placeholder="password" class="col-6 offset-3 mb-4">
            <!-- <a class="btn btn-info text-light col-6 offset-3 mb-5">ログイン</a> -->
            <form>
                <input type="button" class="btn btn-info text-light col-6 offset-3 mb-3" value="ログイン">
            </form>
            <p class="fs-5 text-center col-12">未登録の方はこちら</p>
            <a class="btn btn-primary text-light col-2 offset-5 mb-5" href="newuser">新規登録</a>
        </div>
    </div>
</div>
@endsection