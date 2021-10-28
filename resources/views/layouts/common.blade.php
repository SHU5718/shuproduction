<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href='https://css.gg/heart.css' rel='stylesheet'>
<!-- アイコン設定 -->
<script>
function previewImage(obj) {
  var fileReader = new FileReader();
  fileReader.onload = function () {
    document.getElementById("preview").src = fileReader.result;
  };
  fileReader.readAsDataURL(obj.files[0]);
}
</script>
<script>(function () {
  document.addEventListener('DOMContentLoaded', function() { // HTML解析が終わったら
    const btn = document.getElementById('dropdown__btn'); // ボタンをidで取得
    if(btn) { // ボタンが存在しないときにエラーになるのを回避
      btn.addEventListener('click', function(){ //ボタンがクリックされたら
        this.classList.toggle('is-open'); // is-openを付加する
      });
    }
  });
}());
</script>

<!-- ログイン判定 -->
<script>
var data = JSON.parse('<?php echo $name; ?>');
window.addEventListener('load', function(){
  if (data == "guest"){
    document.getElementById('logBTN').style.visibility = "visible";

    //マイページ
    document.getElementById('fudeIcon').style.visibility = "hidden";

        //作品ページ
        document.getElementById('twitter').style.visibility = "hidden"
        document.getElementById('delete').style.visibility = "hidden"
      }
        else{
          document.getElementById('Dropdown').style.visibility = "visible";
          //マイページ
          const icon = document.getElementById('myIcon');
          icon.addEventListener('click', function(){
            var fileReader = new FileReader();
            fileReader.onload = function () {
              document.getElementById("myIcon").src = fileReader.result;
            };
            fileReader.readAsDataURL(obj.files[0]);
          })
        }
    });
  </script>
  <!-- モーダル -->
  <script>
    window.onload = function() {
    var popup = document.getElementById('js-popup');
    if (!sessionStorage.getItem('disp_popup')) {
    sessionStorage.setItem('disp_popup','on');
    if(!popup) return;
    popup.classList.add('is-show');
    }
    var blackBg = document.getElementById('js-black-bg');
    var closeBtn = document.getElementById('js-close-btn');

    closePopUp(blackBg);
    closePopUp(closeBtn);

    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.remove('is-show');
      })
    }
  }
    </script>
<style>
/* 共通項目 */
body {
  background-color: #f1ecd0;
}
.wrapper {
  margin-left: 80px;
  /* width: 1080px; */
}
.navlogBtn {
  position: relative;
  visibility: hidden;
}
/* .navItem {
margin-right: 160px;
} */
.navbar-brand {
  width: 180px;
}
.dropdown {
  position: absolute;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border-color: #fff;
  margin-right: 66px;
  visibility: hidden;
}
.dropdown__btn {
  display: block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border-color: #f8f9fa;
  background: none; /*デフォルトスタイル リセット */
}
.dropdown__body {
  width: 90px;
  background: #fff;
  box-shadow: 0 2px 6px 2px rgba(60,64,67,0.149), 0 1px 2px 0 rgba(60,64,67,0.302);
  border-radius: 4px;
  overflow: hidden;
  position: absolute; /* メニュー部分は絶対配置させます */
  top: 32px;
  left: -24px;
  display: none;

}
.dropdown__btn.is-open + .dropdown__body {
  display: block;
  z-index: 4;
}
.dropdown__list { /* デフォルトスタイル リセット */
  margin: 0;
  padding: 0;
}
.dropdown__item {
  display: block;
}
.dropdown__item-link {
  display: block;
  padding: 1em 1.2em;
  font-size: 14px;
  text-decoration: none;
  color: #444;
}
.dropdown__item-link:hover {
  background: #fbfbfb;
}
.dropdown img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 0;
  margin-left: -8px;
  margin-top: -3px;
  object-fit: cover;

}
.logoIMG {
  width: 160;
  height: 90px
}
.box1 {
  background-color: white;
}
.box2 {
  /* margin-left: 20px; */
  background-color: white;
}
.add {
  width: 270px;
  height: 270px;
  background-color: skyblue;
  margin-left: 18px;
  margin-top: 10px;
}
.add img{
  width: 270px;
  height: 270px;
}
.box2 ul {
  margin-top:10px;
}
.box2 ul li {
  margin-left: -14px;
  width: 270px;
  height: 30px;
  background-color: #ffffff;
  list-style: none;
}
.topDate {
  margin-bottom: -16px;
  font-size: 12px;
}
.topHaiku {
  margin-bottom: -6px;
}
.box2 a {
  text-decoration: none;
  margin-left: 227px;
}
/*top*/
.popup {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  transition: .6s;
}
.popup.is-show {
  opacity: 1;
  visibility: visible;
}
.popup-inner {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  width: 80%;
  max-width: 400px;
  padding: 50px;
  background-color: #fff;
  z-index: 2;
}
.popup-inner img {
  width: 100%;
}
.popup-text {
  font-size: 18px;
}
.popup-text span {
  color: green;
}
.close-btn {
  position: absolute;
  right: 0;
  top: 0;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  cursor: pointer;
}
.close-btn i {
  font-size: 20px;
  color: #333;
}
.black-background {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,.8);
  z-index: 1;
  cursor: pointer;
}
textarea {
  resize: none;
  height: 30px;
}
.homeIMG {
  margin-left:220px;
}
.topmsg {
  margin-left: 360px;
}
.topNew {
  text-align: center;
}
/*resultページ*/
.resultIMG {
  width: 450px;
  height: 450px;
  margin-left: 60px;
}
.twitterimg {
  width: 40px;
  height: 40px;
}

/*ログイン画面*/
.box3 {
  margin-left: 288px;
  margin-top: 20px;
}
.login_title{
  margin-left: -12px;
  width: 660px;
  height: 50px;
  background-color: skyblue;
}

/*新規登録ページ*/
.new_title {
  margin-left: 160px;
  margin-bottom: -1px
}
.next_btn {
  margin-left: 240px;
}
#preview {
  width: 300px;
  height: 300px;
  border-radius: 50%;
  object-fit: over;
  margin-left: 170px;
  background-color: #eee;
}
.upload {
  display: inline-block;
  cursor: pointer; /* カーソルを指に */
  margin: 1em 0; /* まわりの余白 */
  padding: .7em 1em; /* 文字まわりの余白 */
  line-height: 1.4; /* 行間 */
  background: #3e8bff; /* 背景色 */
  color: #FFF; /* 文字色 */
  font-size: 0.95em; /* フォントサイズ */
  border-radius: 2.5em; /* 角の丸み */
  transition: 0.2s; /* ホバーをなめらかに */
  text-align: center;
  margin-left: 240px;
}
.upload input {
  display: none;
}
.Tab {
  pointer-events: none;
}
.tab-content{
  margin-top: 40px;
  margin-bottom: 100px;
}
/*マイページ*/
.mainarea {
  margin-left: -40px;
}
.headarea {
  background-color: #eee;
  height: 360px;
}
.Myicon {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
}
.Fude {
  width: 60px;
  height: 40px;
  margin-left:px;
  cursor: pointer;
}
.good {
  margin-left: -250px
}
.goodAll {
  margin-left: 604px
}
.goodArea {
  font-size:24px;
}
.haikuArea {
  background-color: white;
  width: 100%;
  height: 1160px;
  margin-left: -40px;
}
.haikuArea img {
  width: 300px;
  height: 300px;
}
.imgList {
  margin-left: 40px;
}
.changeArea {
  display: none;
}
.changeName {
  width: 240px;
  height: 30px;
  background-color: skyblue;
  margin-left: 520px;
}
.changeBtn {
  width: 56px;
  height: 30px;
  font-size:  14px;
}
.username {
  text-align: center;
  /* margin-left: 520px; */
}
/* 新着順画面 */
.newTitle {
  text-align: center;
  background-color: #e0f3ce;
  color: #333;
}
.newpage {
  height: 2000px;
}
.newhaikuArea {
  background-color: white;
  width: 100%;
  height: 1800px;
  margin-left: -40px;
}
.newhaikuArea img {
  width: 300px;
  height: 300px;
}
.newList {
  margin-left: 150px;
}
.haikuCard a {
  text-decoration: none;
  text-align: center;
  color: #333;
}
.heart {
  width: 40px;
  height: 40px;
  margin-left: 240px;
  margin-top: -80px;
  visibility: hidden;
}
.before {
  width: 40px;
  height: 40px;
  margin-left: 240px;
  margin-top: -80px;
}
.date {
  margin-bottom: -0.5px;
}
.hide {
  display: none;
}
/* ランキング順画面 */
.lankTitle {
  text-align: center;
  background-color: #e0f3ce;
  color: #333;
}
.lankhaikuArea {
  background-color: white;
  width: 100%;
  height: 1900px;
  margin-left: -40px;
}
.firstCard {
  margin-left: 496px;
}
.first {
  position: absolute;
  width: 80px;
  height: 80px;
  margin-left: 4px;
  z-index: 2;
}
.lankProduct {
  width:300px;
  height: 300px;
  position: absolute;
  z-index: 1;
}
.lankuser {
  position: absolute;
  z-index:3;
  margin-top: 300px;
  margin-left: 40px;
  text-decoration: none;
}
.secondCard {
  margin-top: 200px;
  margin-left: 136px;
}
.thirdCard {
  margin-left: 854px;
}
.lankCard {
  margin-top: 360px;
}
.underProduct {
  width:300px;
  height: 300px;
}
.underuser {
  margin-top: 300px;
  margin-left: 30px;
  text-decoration: none;
}
.lankList {
  margin-left: 150px;
  text-align: center;
}
.Lank {
  margin-bottom: -0.5px;
  margin-left: 44px;
}
.lankCardB {
  margin-top: 15px;
  text-align: center;
}
.count {
  margin-left: 40px;
}
.top3count {
  position: absolute;
  margin-top: 320px;
  margin-left: 120px;
  z-index: 199;
}
/* メッセージ画面 */
.msgBox {
  height: 400px;
  background-color: white;
}
.msgBox hr {
  height: 2px;
  color: green;
  margin-top: -15px;
}
.msgText {
  text-align: center;
}
.msgBox  {
  text-align: center;
  margin-top: 60px;
}

/* 作品画面 */
.productImg {
  width: 450px;
  height: 450px;
}
.twitterImg {
  width: 50px;
  height: 50px;
}
.delete {
  display: inline-block;
  cursor: pointer; /* カーソルを指に */
  margin: 10px; /* まわりの余白 */
  width: 80px;
  padding: 10px 20px; /* 文字まわりの余白 */
  line-height: 1.4; /* 行間 */
  background: red; /* 背景色 */
  color: #FFF; /* 文字色 */
  font-size: 14px; /* フォントサイズ */
  border: none;
  border-radius: 4px; /* 角の丸み */
  transition: 0.2s; /* ホバーをなめらかに */
  text-align: center;
  margin-left: 150px;
}
.productBody {
  background-color: white;
  margin-left: 186px;
}
</style>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="top"><img src="images/senryu.png" class="logoIMG"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navItem navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="top">Top</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/rank">ランキング</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/new">新着順</a>
          </li>
        </ul>

        <div class="dropdown" id="Dropdown">
          <button class="dropdown__btn" id="dropdown__btn">
            <img src="images/man.png" alt="ユーザーアイコン"><circle cx="256" cy="256" r="64"/><circle cx="256" cy="448" r="64"/><circle cx="256" cy="64" r="64"/></svg>
          </button>
          <div class="dropdown__body">
            <ul class="dropdown__list">
              <li class="dropdown__item"><p class="dropdown__item-link">@isset($_SESSION['name']){{$_SESSION['name']}}@endisset</p></li>
              <li class="dropdown__item"><a href="user" class="dropdown__item-link">マイページ</a></li>
              <li class="dropdown__item"><a href="logout" class="dropdown__item-link">ログアウト</a></li>
            </ul>
          </div>
        </div>
        <button class="navlogBtn btn btn-primary me-5 ms-1" type="submit" onclick="location.href='login'" id="logBTN">ログイン</button>
    </div>
  </nav>
  <div class="wrapper">
    @yield('content')
  </div>
  <footer class="fixed-bottom bg-light p-2 text-black text-center">
    &copy;2021 SENRYU Allright Reserved
  </footer>
</body>
<!-- プロフィール編集 -->
<script>
const nameBtn = document.getElementById('fudeIcon');
const area = document.getElementById('changeArea');
nameBtn.addEventListener('click', function(){
  if(area.style.display === "none"){
    area.style.display = "inline";
  }else{
    area.style.display = "none";
  }
});
const changeBtn = document.getElementById('changeBtn');
changeBtn.addEventListener('click', function(){
  area.style.display = "none";
});
</script>
<!-- パスワード表示・非表示切り替え -->
<script>
const pwd = document.getElementById('password');
const pwdCheck = document.getElementById('password-check');
pwdCheck.addEventListener('change', function() {
  if(pwdCheck.checked) {
    pwd.setAttribute('type', 'text');
  } else {
    pwd.setAttribute('type', 'password');
  }
}, false);

window.addEventListener('load',function(){
  const pwdc = document.getElementById('passwordC');
  const pwdcheck = document.getElementById('password-check');
  pwdcheck.addEventListener('change', function() {
    if(pwdcheck.checked) {
      pwdc.setAttribute('type', 'text');
    } else {
      pwdc.setAttribute('type', 'password');
    }
  }, false);
});
</script>
