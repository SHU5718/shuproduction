@extends('layouts.common')

@section('content')
<div class="container">
  <div class="row">
    <div class="newhaikuArea">
      <div class="row">
        <h1 class="newTitle">新着順</h1>
      </div>
      <div class="newList row gap-5 mt-5">
        <div class="haikuCard col-3">
          <p class="date">@isset($time[0]){{$time[0]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[0]){{$img[0]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[0])Created by {{$created[0]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart" onclick="(function(){var val = '0';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before"  onclick="(function(){var val = '0';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[1]){{$time[1]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[1]){{$img[1]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[1])Created by {{$created[1]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart1" onclick="(function(){var val = '1';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before1" onclick="(function(){var val = '1';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[2]){{$time[2]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[2]){{$img[2]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[2])Created by {{$created[2]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart2" onclick="(function(){var val = '2';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before2" onclick="(function(){var val = '2';Good(val);})();">
          <input type="text" class="hide">
        </div>
      </div>
      <div class="newList row gap-5 mt-5">
        <div class="haikuCard col-3">
          <p class="date">@isset($time[3]){{$time[3]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[3]){{$img[3]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[3])Created by {{$created[3]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart3" onclick="(function(){var val = '3';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before3" onclick="(function(){var val = '3';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[4]){{$time[4]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[4]){{$img[4]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[4])Created by {{$created[4]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart4" onclick="(function(){var val = '3';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before4" onclick="(function(){var val = '4';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[5]){{$time[5]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[5]){{$img[5]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[5])Created by {{$created[5]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart5" onclick="(function(){var val = '5';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before5" onclick="(function(){var val = '5';Good(val);})();">
          <input type="text" class="hide">
        </div>
      </div>
      <div class="newList row gap-5 mt-5">
        <div class="haikuCard col-3">
          <p class="date">@isset($time[6]){{$time[6]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[6]){{$img[6]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[6])Created by {{$created[6]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart6" onclick="(function(){var val = '6';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before6" onclick="(function(){var val = '6';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[7]){{$time[7]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[7]){{$img[7]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[7])Created by {{$created[7]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart7" onclick="(function(){var val = '7';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before7" onclick="(function(){var val = '7';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[8]){{$time[8]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[8]){{$img[8]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[8])Created by {{$created[8]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart8" onclick="(function(){var val = '8';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before8" onclick="(function(){var val = '8';Good(val);})();">
        </div>
      </div>
      <div class="newList row gap-5 mt-5">
        <div class="haikuCard col-3">
          <p class="date">@isset($time[9]){{$time[9]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[9]){{$img[9]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[9])Created by {{$created[9]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart9" onclick="(function(){var val = '9';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before9" onclick="(function(){var val = '9';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[10]){{$time[10]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[10]){{$img[10]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[10])Created by {{$created[10]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart10" onclick="(function(){var val = '10';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before10" onclick="(function(){var val = '10';Good(val);})();">
          <input type="text" class="hide">
        </div>
        <div class="haikuCard col-3">
          <p class="date">@isset($time[11]){{$time[11]}}@endisset</p>
          <img src="images/uploaded_images/@isset($img[11]){{$img[11]}}@endisset" class="col-8">
          <a href="" class="">@isset($created[11])Created by {{$created[11]}}@endisset</a>
          <input type="image" src="images/good.png" class="heart" id="heart11" onclick="(function(){var val = '11';Good(val);})();">
          <input type="image" src="images/beforeGood.png" class="before" id="before11" onclick="(function(){var val = '11';Good(val);})();">
          <input type="text" class="hide">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 評価機能 -->
<script defer>
function Good(val){
  if(val == '0'){
    const like = document.getElementById('before');
    const heart = document.getElementById('heart');
    var data = JSON.parse('<?php echo $_SESSION[0]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart.style.visibility = "visible";
        like.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart.style.visibility = "hidden";
        like.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '1'){
    const like1 = document.getElementById('before1');
    const heart1 = document.getElementById('heart1');
    var data = JSON.parse('<?php echo $_SESSION[1]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart1.style.visibility = "visible";
        like1.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart1.style.visibility = "hidden";
        like1.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '2'){
    const like2 = document.getElementById('before2');
    const heart2 = document.getElementById('heart2');
    var data = JSON.parse('<?php echo $_SESSION[2]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart2.style.visibility = "visible";
        like2.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart2.style.visibility = "hidden";
        like2.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '3'){
    const like3 = document.getElementById('before3');
    const heart3 = document.getElementById('heart3');
    var data = JSON.parse('<?php echo $_SESSION[3]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart3.style.visibility = "visible";
        like3.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart3.style.visibility = "hidden";
        like3.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '4'){
    const like4 = document.getElementById('before4');
    const heart4 = document.getElementById('heart4');
    var data = JSON.parse('<?php echo $_SESSION[4]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart4.style.visibility = "visible";
        like4.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart4.style.visibility = "hidden";
        like4.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '5'){
    const like5 = document.getElementById('before5');
    const heart5 = document.getElementById('heart5');
    var data = JSON.parse('<?php echo $_SESSION[5]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart5.style.visibility = "visible";
        like5.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart5.style.visibility = "hidden";
        like5.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '6'){
    const like6 = document.getElementById('before6');
    const heart6 = document.getElementById('heart6');
    var data = JSON.parse('<?php echo $_SESSION[6]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart6.style.visibility = "visible";
        like6.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart6.style.visibility = "hidden";
        like6.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '7'){
    const like7 = document.getElementById('before7');
    const heart7 = document.getElementById('heart7');
    var data = JSON.parse('<?php echo $_SESSION[7]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart7.style.visibility = "visible";
        like7.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart7.style.visibility = "hidden";
        like7.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '8'){
    const like8 = document.getElementById('before8');
    const heart8 = document.getElementById('heart8');
    var data = JSON.parse('<?php echo $_SESSION[8]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart8.style.visibility = "visible";
        like8.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart8.style.visibility = "hidden";
        like8.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '9'){
    const like9 = document.getElementById('before9');
    const heart9 = document.getElementById('heart9');
    var data = JSON.parse('<?php echo $_SESSION[9]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart9.style.visibility = "visible";
        like9.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart9.style.visibility = "hidden";
        like9.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '10'){
    const like10 = document.getElementById('before10');
    const heart10 = document.getElementById('heart10');
    var data = JSON.parse('<?php echo $_SESSION[10]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart10.style.visibility = "visible";
        like10.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart10.style.visibility = "hidden";
        like10.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else if(val == '11'){
    const like11 = document.getElementById('before11');
    const heart11 = document.getElementById('heart11');
    var data = JSON.parse('<?php echo $_SESSION[11]; ?>');
    axios.post('/like', {
      id: data
    }).then(function (response){
      if (response.data.code == 200) {
        heart11.style.visibility = "visible";
        like11.style.visibility = "hidden";
      } else if (response.data.code == 202) {
        heart11.style.visibility = "hidden";
        like11.style.visibility = "visible";
      }
    }).catch(function (error) {
      console.log(error);
    });
  }else{
    ;
  }
};
</script>
@endsection
