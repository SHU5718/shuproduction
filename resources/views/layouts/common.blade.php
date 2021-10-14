<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<style>
  body {
    background-color: #f1ecd0;
  }
  .wrapper {
    margin-left: 200px;
    width: 1080px;
  }
  .box1 {
    background-color: skyblue;
  }
  .box2 {
    margin-left: 20px;
    background-color: white;
  }
  textarea {
    resize: none;
    height: 30px;
  }
  .homeIMG {
    margin-left:180px;
  }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/senryu.png" class="w-25"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav me-3">
        <li class="nav-item">
          <a class="nav-link active" href="top">ほうむ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ランキング</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">新着順</a>
      </ul>
      <form class="d-flex">
        <button class="btn btn-primary mt-2 me-5" type="submit">ログイン</button>
</form>
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
