@extends('layouts.common')

@section('content')
<form action="/createaccountcheck" method="post">
  {{ csrf_field() }}
    <div class="tab-content">
        <div id="contents1" class="tab-pane active">
            <div class="container">
                <div class="row mt-5">
                    <div class="box3 col-6 bg-light">
                        <p class="login_title text-center fs-2 mb-5 text-light">新規登録</p>
                        <p class="new_title">ユーザーネーム</p>
                        <input type="text" name="name" max-length="16" placeholder="無限戦隊ハイカイジャー" class="col-6 offset-3 mb-4" required="required">
                        <p class="new_title">メールアドレス</p>
                        <input type="email" name="mail" max-length="255" placeholder="example@senryu.com" class="col-6 offset-3 mb-4" required="required">
                        <p class="new_title">パスワード</p>
                        <input type="text" name="pass" max-length="32" placeholder="password" class="col-6 offset-3 mb-4" required="required">
                        <p class="new_title">パスワード(確認用)</p>
                        <input type="text" name="Pass" max-length="32" placeholder="password(確認用)" class="col-6 offset-3 mb-4" required="required">
                        <ul class="Tab nav nav-tabs justify-content-center mb-2">
                            <li class="Tab nav-item"><a href="#contents1" class="nav-link active" data-toggle="tab">STEP01</a></li>
                            <li class="Tab nav-item"><a href="#contents2" class="nav-link" data-toggle="tab">STEP02</a></li>
                        </ul>
                        <a  href="#contents2" class="next_btn btn btn-info text-light col-3 mb-4 mt-2" data-toggle="tab">次へ</a>
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
                                        <input type="file" accept="image/*" onchange="previewImage(this);" />
                                    </label>
                        <ul class="Tab nav nav-tabs justify-content-center mb-2">
                            <li class="Tab nav-item"><a href="#contents1" class="nav-link" data-toggle="tab">STEP01</a></li>
                            <li class="Tab nav-item"><a href="#contents2" class="nav-link active" data-toggle="tab">STEP02</a></li>
                        </ul>
                        <!-- <a  href="login" class="next_btn btn btn-info text-light col-3 mb-4 mt-2">登録</a> -->
                        <button type="submit" class="next_btn btn btn-info text-light col-3 mb-4 mt-2">登録</button>
                    </div>
                </div>
            </div>
            </div>
    </div>
</form>
@endsection('content')
