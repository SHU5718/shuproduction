<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class SenryuuController extends Controller
{
    public function make_updown()
    {
        $method = "GET";
        $keyword = "夏"; //ここにシチュエーションを渡すと文字列を生成
        $sentence = ""; //生成した文を繋げて格納
        $sent_five = ""; //上の句
        $str_len = "";

        //接続
        for ($i=0; $i < 2; $i++) {

          $url = "https://api.a3rt.recruit.co.jp/text_suggest/v2/predict?apikey=DZZKDP8fwYaKERZNzljBTPuKgFp5RmE7&previous_description=$keyword&style=1";
          $client = new Client();
          $response = $client->request($method, $url);
          $posts[] = json_decode($response->getBody()->getContents(), true);

          foreach ($posts as $post) {
            if (isset($post['suggestion'])) {
              $suggestion = join("",$post['suggestion']);
              $sentence .= $suggestion;
          }
        }
      }

        $str = explode(" ",$sentence,30);
        $cnt = count($str);
        $sent_five = array();
        $five_cnt = 0;

        for ($i=0; $i <$cnt; $i++) {
          $str_len = mb_strlen($str[$i]);
            if ($str_len == 5) {
              $sent_five[$five_cnt] = $str[$i];
              $five_cnt++;
            }
        }
        $rand_word = array("オムライス","ハンバーグ","エビフライ","パルプンテ");
        $word_cnt = count($rand_word);

        session_start();
        if(isset($_SESSION['name'])){
          $name = json_encode($_SESSION['name']);
          return view('top', ['up_five' => $sent_five[mt_rand(0,$five_cnt -1)],
                      'down_five' => $rand_word[mt_rand(0,$word_cnt-1)],'name' => $name]);
        }else{
          $_SESSION['name'] = "guest";
          $name = json_encode($_SESSION['name']);
          return view('top', ['up_five' => $sent_five[mt_rand(0,$five_cnt -1)],
                      'down_five' => $rand_word[mt_rand(0,$word_cnt-1)],'name' => $name]);
        }


    }
    public function default_session(){
      session_start();
      if(isset($_SESSION['name'])){
        $name = json_encode($_SESSION['name']);
        return view('/top',['name' => $name]);
      }else{
        $_SESSION['name'] = "guest";
        $name = json_encode($_SESSION['name']);
        return view('/top',['name' => $name]);
      }
    }
    public function login_session(){
      session_start();
      if(isset($_SESSION['name'])){
        $name = json_encode($_SESSION['name']);
        return view('/login',['name' => $name]);
      }else{
        $_SESSION['name'] = "guest";
        $name = json_encode($_SESSION['name']);
        return view('/login',['name' => $name]);
      }
    }
    public function newuser_session(){
      session_start();
      if(isset($_SESSION['name'])){
        $name = json_encode($_SESSION['name']);
        return view('/newuser',['name' => $name]);
      }else{
        $_SESSION['name'] = "guest";
        $name = json_encode($_SESSION['name']);
        return view('/newuser',['name' => $name]);
      }
    }
    public function result_session(){
      session_start();
      if(isset($_SESSION['name'])){
        $name = json_encode($_SESSION['name']);
        return view('/result',['name' => $name]);
      }else{
        $_SESSION['name'] = "guest";
        $name = json_encode($_SESSION['name']);
        return view('/result',['name' => $name]);
      }
    }
}
