@extends('layouts.common')

@section('content')
<div class="tab-content">
  <div id="contents1" class="tab-pane active">
    <div class="container">
      <div class="newuserArea row mt-3">
        <div class="box3 col-6 bg-light">
          <form action="/create" method="post">
          <p class="login_title text-center fs-2 mb-5 text-light">新規登録</p>
            <p class="new_title">ユーザーネーム</p>
            <input type="text" name="name" max-length="16" placeholder="無限戦隊ハイカイジャー" class="col-6 offset-3 mb-4" required="required" id="legister1">
            <p class="new_title">メールアドレス</p>
            <input type="email" name="mail" max-length="255" placeholder="example@senryu.com" class="col-6 offset-3 mb-4" required="required" id="legister2">
            <p class="new_title">パスワード</p>
            <input type="password" name="pass" max-length="32" placeholder="password" class="col-6 offset-3 mb-4" required="required" id="password">
            <p class="new_title">パスワード(確認用)</p>
            <input type="password" name="Pass" max-length="32" placeholder="password(確認用)" class="col-6 offset-3 mb-2" required="required" id="passwordC">
            <div class="col-4"></div>
            <input type="checkbox" id="password-check" class="offset-3 mb-2">パスワードを表示する <input type="checkbox" id="nextCheck" class="mb-2">入力が完了しました
            <div class="emsg col-6 offset-3 text-danger mb-4">@isset($msg){{$msg}}@endisset</div>
            <ul class="Tab nav nav-tabs justify-content-center mb-2">
              <li class="Tab nav-item"><a href="#contents1" class="nav-link active" data-toggle="tab">STEP01</a></li>
              <li class="Tab nav-item"><a href="#contents2" class="nav-link" data-toggle="tab">STEP02</a></li>
            </ul>
            <a href="#contents2" class="next_btn btn btn-info text-light col-3 mb-4 mt-2" data-toggle="tab" id="next">次へ</a>
            <!-- <button onclick="location.href='#contents2'" class="next_btn btn btn-info text-light col-3 mb-4 mt-2" data-toggle="tab" id="next" disabled>次へ</a> -->
          </div>
        </div>
      </div>
    </div>

    <div id="contents2" class="tab-pane">
      <div class="container">
        <div class="row mt-3">
          <div class="box3 col-6 bg-light">
            <p class="login_title text-center fs-2 mb-2 text-light">プロフィール画像</p>
            <img
            id="preview"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            class="col-10 offset-2"
            />
            <br>
            <label class="upload col-3 ">
              画像を選択
              <input type="file" name="avatar" class="form-control" onchange="previewImage(this);" />
            </label>
            <ul class="Tab nav nav-tabs justify-content-center mb-2">
              <li class="Tab nav-item"><a href="#contents1" class="nav-link" data-toggle="tab">STEP01</a></li>
              <li class="Tab nav-item"><a href="#contents2" class="nav-link active" data-toggle="tab">STEP02</a></li>
            </ul>
            <!-- <a  href="login" class="next_btn btn btn-info text-light col-3 mb-4 mt-2">登録</a> -->
            {{ csrf_field() }}
            <button type="submit" class="next_btn btn btn-info text-light col-3 mb-4 mt-2">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 次への表示切替 -->
<!-- 大森さんに言われた通りまとめようとしたのですが、バグが起こってしまうので汚いままでごめんなさい -->
<script defer>
  //idの取得し変数に定義
    const legister1 = document.getElementById('legister1');
    const legister2 = document.getElementById('legister2');
    const legister3 = document.getElementById('password');
    const legister4 = document.getElementById('passwordC');
  //取得したidのvalueを指定
    const value1 = legister1.value;
    const value2 = legister2.value;
    const value3 = legister3.value;
    const value4 = legister4.value;
  //次へのidを取得し変数に定義
    const next = document.getElementById('next');
    const check = document.getElementById('nextCheck');
    window.onload = function () {
        if (value1 == "" || value2 == "" || value3 == "" || value4 == "" ){
          next.style.visibility = "hidden";
        }else{
          ;
        }
    }
    check.addEventListener('change', function(){
    const legister1 = document.getElementById('legister1');
    const legister2 = document.getElementById('legister2');
    const legister3 = document.getElementById('password');
    const legister4 = document.getElementById('passwordC');
  //取得したidのvalueを指定
    const value1 = legister1.value;
    const value2 = legister2.value;
    const value3 = legister3.value;
    const value4 = legister4.value;
      if (check.checked){
        if (value1 !== "" && value2 !== "" && value3 !== "" && value4 !== "" ){
          next.style.visibility = "visible";
        }else {
          next.style.visibility = "hidden";
        }
      }else{
        next.style.visibility = "hidden";
      }
    });
</script>
@endsection('content')
