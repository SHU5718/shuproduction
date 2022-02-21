<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use PDO;

class SenryuuController extends Controller
{
  public function make_updown()
  {
    $method = "GET";
    $keyword = ""; //ここにシチュエーションを渡すと文字列を生成
    $sentence = ""; //生成した文を繋げて格納
    $sent_five = ""; //上の句
    $str_len = "";

    //接続
    for ($i=0; $i < 2; $i++) {

      $url = "https://api.a3rt.recruit.co.jp/text_suggest/v2/predict?apikey=DZZIZdDUk4DJ3WEbw2F2eofZY7EujD9U&previous_description=$keyword&style=1";
      $client = new Client();
      $response = $client->request($method, $url);
      $posts[] = json_decode($response->getBody()->getContents(), true);

      //抽出した文章を接続
      foreach ($posts as $post) {
        if (isset($post['suggestion'])) {
          $suggestion = join("",$post['suggestion']);
          $sentence .= $suggestion;
        }
      }
    }

    //配列に格納
    $str = explode(" ",$sentence,30);
    $cnt = count($str);
    $sent_five = array();
    $five_cnt = 0;

    //五文字のものだけ抽出
    for ($i=0; $i <$cnt; $i++) {
      $str_len = mb_strlen($str[$i]);
      if ($str_len == 5) {
        $sent_five[$five_cnt] = $str[$i];
        $five_cnt++;
      }
    }
    //ランダムワード
    $rand_word = array("オムライス","ハンバーグ","エビフライ","パルプンテ","駆け巡る","花が散る","芽が芽吹く","返り咲く","腹減った","めぐりゆく","課金する");
    $word_cnt = count($rand_word);

    //デフォルト処理
    session_start();
    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "SELECT * FROM products ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    $haikai = array();
    $time = array();
    $i = 0;

    foreach ($products as $product) {
      $haikai[$i] = $product['product_haikai'];
      $time[$i] = $product['product_time'];
      $i++;

    }
    //画面遷移
    if(isset($_SESSION['name'])){
      $name = json_encode($_SESSION['name']);
      return view('top', ['up_five' => $sent_five[mt_rand(0,$five_cnt -1)],
      'down_five' => $rand_word[mt_rand(0,$word_cnt-1)],'name' => $name],['haikai' => $haikai, 'time' => $time]);
    }else{
      $_SESSION['name'] = "guest";
      $name = json_encode($_SESSION['name']);
      return view('top', ['up_five' => $sent_five[mt_rand(0,$five_cnt -1)],
      'down_five' => $rand_word[mt_rand(0,$word_cnt-1)],'name' => $name],['haikai' => $haikai, 'time' => $time]);
    }
  }

  //初回処理
  public function first_session(){
    session_start();

    //作品保持フラグ初期値(ログイン、新規登録で使用)
    $_SESSION['upload'] = 0;
    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";

    //DB接続
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    //新着順に12件獲得
    $sql = "SELECT * FROM products ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();

    //575
    $haikai = array();
    //制作日
    $time = array();

    $i = 0;
    //配列に分配
    foreach ($products as $product) {
      $haikai[$i] = $product['product_haikai'];
      $time[$i] = $product['product_time'];
      $i++;
    }

    //画面遷移(ログイン時)
    if(isset($_SESSION['name'])){
      $name = json_encode($_SESSION['name']);
      return view('/top',['name' => $name],['haikai' => $haikai, 'time' => $time]);
    }else{
      //画面遷移（未ログイン時）
      //ゲストユーザー
      $_SESSION['name'] = "guest";
      $id = random_int(100000000000000,999999999999999);
      $_SESSION['id'] = $id;
      $name = json_encode($_SESSION['name']);
      return view('/top',['name' => $name],['haikai' => $haikai, 'time' => $time]);
    }
  }

  //デフォルト処理
  public function default_session(){
    session_start();
    //リンクを取得
    $url = $_SERVER['REQUEST_URI'];
    //画面遷移（ログイン時）
    if(isset($_SESSION['name'])){
      $name = json_encode($_SESSION['name']);
      return view($url,['name' => $name]);
    }else{
      //画面遷移（未ログイン時）
      $_SESSION['name'] = "guest";
      $name = json_encode($_SESSION['name']);
      return view($url,['name' => $name]);
    }
  }
}
