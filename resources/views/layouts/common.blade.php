
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
<!-- <script>
    function kieru() {
      const test = document.getElementById('test');
      test.style.visibility = "hidden";
    }
</script>
<script>
		window.addEventListener('load', function(){

			// イベントリスナー登録
			document.getElementById("content1").addEventListener('click', sayHello);
		});

		function sayHello() {
			alert("Hello");
		}
	</script> -->
  <script>
    var data = ;
    window.addEventListener('load', function(){
      if (data === undefined){
        document.getElementById('logBTN').style.visibility = "visible";
      }
        else{
          document.getElementById('Dropdown').style.visibility = "visible";
        }
      
    });
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
    background-color: red;
    margin-left: 18px;
    margin-top: 10px;
  }
  .box2 ul {
    margin-top:10px;
  }
  .box2 ul li {
    margin-left: -14px;
    width: 270px;
    height: 30px;
    background-color: yellow;
    list-style: none;
    margin-bottom: 8px;
    margin-top: 10px;
  }
  .box2 a {
    text-decoration: none;
    margin-left: 227px;
  }
  /*top*/
  textarea {
    resize: none;
    height: 30px;
  }
  .homeIMG {
    margin-left:220px;
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
  margin-left: -466px
}
.good {
  margin-left: -250px
}
.goodAll {
  margin-left: 604px
}
</style>
<div>@isset($_SESSION['name']){{$_SESSION['name']}}@endisset</div>
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
          <a class="nav-link active me" href="top">ホーム</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ランキング</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">新着順</a>
        </li>
      </ul>

          <div class="dropdown" id="Dropdown">
            <button class="dropdown__btn" id="dropdown__btn">
              <img src="images/man.png" alt="ユーザーアイコン"><circle cx="256" cy="256" r="64"/><circle cx="256" cy="448" r="64"/><circle cx="256" cy="64" r="64"/></svg>
            </button>
              <div class="dropdown__body">
                  <ul class="dropdown__list">
                    <li class="dropdown__item"><a href="user" class="dropdown__item-link">マイページ</a></li>
                    <li class="dropdown__item"><a href="" class="dropdown__item-link">ログアウト</a></li>
                  </ul>
              </div>
        </div>
        <button class="navlogBtn btn btn-primary mt- me-5" type="submit" onclick="location.href='login'" id="logBTN">ログイン</button>
        <!-- <div class="dropdown" id="Dropdown" onchange="login(Data);">
  <button class="dropdown__btn" id="dropdown__btn">
    <img src="images/man.png" alt="ユーザーアイコン"><circle cx="256" cy="256" r="64"/><circle cx="256" cy="448" r="64"/><circle cx="256" cy="64" r="64"/></svg>
  </button>
  <div class="dropdown__body">
    <ul class="dropdown__list">
      <li class="dropdown__item"><a href="user" class="dropdown__item-link">マイページ</a></li>
      <li class="dropdown__item"><a href="" class="dropdown__item-link">ログアウト</a></li>
    </ul>
  </div>
</div> -->
        <!-- <img src="" alt="ユーザーアイコン" class="usericon"> -->
    </div>
  </div>
</nav>
<div class="wrapper">
@yield('content')
</div>
    <footer class="fixed-bottom bg-light p-2 text-black text-center">
&copy;2021 SENRYU Allright Reserved
</footer>
</body>
