<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use uploaded_images;
use PDO;

class ImageCreateController extends Controller
{
  function create_image() {

    session_start();
    $im = imagecreatefrompng('images/base.png');

    // Color
    $black = imagecolorallocate($im, 38, 38, 38);

    // ID
    $fbid = uniqid(mt_rand(), 1);

    // Text
    $line1 = $_POST["top_word"];
    $line2 = $_POST["nakasiti"];
    $line3 = $_POST["bot_word"];

    //セッションに575を追加（新着機能用）
    $haiku = $line1." ".$line2." ".$line3;
    $_SESSION['haiku'] = $haiku;

    $fake_text = 'あ';

    //エラー処理
    if($line1 == "" || $line2 == "" || $line3 == ""){
      $msg = '正しく入力してください。';
      $name = json_encode($_SESSION['name']);
      return view('/top',['name' => $name],['msg' => $msg]);
    }

    // Font
    $font = 'C:\xampp\htdocs\application\public\KleeOne-SemiBold.otf';
    $font_size = '30';

    // Line 1
    // -- Bounding box
    $bbox = imagettfbbox(30, 0, $font, $fake_text);
    // -- X & Y
    $x = $bbox[0] + imagesx($im) - $bbox[4] - 90;
    $y = $bbox[1] + $bbox [5] + 70;
    // -- 文字
    foreach (preg_split("//u", $line1) as $char1) {
      $char = str_replace("ー", "丨", $char1);
      imagettftext($im, $font_size, 0, $x, $y, $black, $font, $char);
      $y += 35;
    }

    // Line 2
    // -- Bounding box
    $bbox = imagettfbbox(30, 0, $font, $fake_text);
    // -- X & Y
    $x = $bbox[0] + (imagesx($im) / 2) - $font_size;
    $y = $bbox[1] + (imagesx($im) / 2) - ($font_size / 2) - 120;
    // -- 文字
    foreach (preg_split("//u", $line2) as $char1) {
      $char = str_replace("ー", "丨", $char1);
      imagettftext($im, $font_size, 0, $x, $y, $black, $font, $char);
      $y += 35;
    }

    // Line 3
    // -- Bounding box
    $bbox = imagettfbbox(30, 0, $font, $fake_text);
    // -- X & Y
    $x = $bbox[0] + 75;
    $y = $bbox[1] + (imagesx($im) / 2);
    // -- 文字
    foreach (preg_split("//u", $line3) as $char1) {
      $char = str_replace("ー", "丨", $char1);
      imagettftext($im, $font_size, 0, $x, $y, $black, $font, $char);
      $y += 35;
    }

    // アップロードディレクトリー
    $upload_dir = 'images/uploaded_images/';
    // ファイル名
    $img_name = $upload_dir.$fbid.".png";
    $img_url = $fbid.".png";
    // Output to browser
    header('Content-Type: image/png');

    imagepng($im, $img_name);
    imagedestroy($im);

    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "SELECT * FROM products LEFT OUTER JOIN users ON products.user_id=users.id  ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    $haikai = array();
    $i = 0;

    foreach ($products as $product) {
      $haikai[$i] = $product['product_haikai'];
      $time[$i] = $product['product_time'];
      $i++;
    }

    $_SESSION['image'] = $img_url;
    $name = json_encode($_SESSION['name']);
    return view('/result',['name' => $name,'img_url' => $_SESSION['image'],'haikai' => $haikai,'time' => $time]);
  }

  //画像投稿機能
  function image_upload(){
    session_start();
    $name = $_SESSION['name'];
    $haiku = $_SESSION['haiku'];

    //guestの場合ログインページへ
    if($name == "guest"){
      $_SESSION['upload'] = 1;
      return view('/login',['name' => $name]);
    }else{
      $id = random_int(1000000000000000,9999999999999999); //ID
      $time = date('Y-m-d H:i:s'); //タイムスタンプ
      $user_id = $_SESSION['id']; //投稿ユーザー情報
      $image = $_SESSION['image']; //画像URL

      //データベース接続
      $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
      $username = "root";
      $password = "";
      try {
        $dbh = new PDO($dsn, $username, $password);
      } catch (PDOException $e) {
        $msg = $e->getMessage();
      }

      //データベース登録処理
      $sql = "INSERT INTO products(id, product_haikai, product_time, product_img, user_id) VALUES (:id, :haiku, :p_time, :image, :user_id)";
      $stmt = $dbh->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->bindValue(':haiku', $haiku);
      $stmt->bindValue(':p_time', $time);
      $stmt->bindValue(':image', $image);
      $stmt->bindValue(':user_id', $user_id);
      $stmt->execute();

      //トップ画面に遷移
      $msg = '投稿が完了しました。';
      $name = json_encode($_SESSION['name']);
      return view('/message_top',['name' => $name,'msg' => $msg]);
    }
  }
  function image_delete(){
    session_start();
    $id = 3338095532418558;
    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    $msg = '削除が完了しました。';
    $name = json_encode($_SESSION['name']);
    return view('/message_top',['name' => $name,'msg' => $msg]);
  }

  //新着順表示
  public function image_new(){
    session_start();

    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "SELECT * FROM products LEFT OUTER JOIN users ON products.user_id=users.id  ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    $i = 0;
    $j = 0;

    foreach ($products as $product) {
      $haikai[$i] = $product['product_haikai'];
      $img[$i] = $product['product_img'];
      $time[$i] = $product['product_time'];
      $created[$i] = $product['user_name'];
      $i++;
    }

    $sql = "SELECT * FROM products ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();

    foreach ($products as $product) {
      $_SESSION[$j] = json_encode($product['id']);
      $j++;
    }
    if(isset($_SESSION['name'])){
      $name = json_encode($_SESSION['name']);
      if(isset($_SESSION['id'])){
        $s_id = json_encode($_SESSION['id']);
        return view('/new',['name' => $name, 's_id' => $s_id, 'haikai' => $haikai,'time' => $time,'img' => $img, 'created'=>$created]);
      }
      return view('/new',['name' => $name,'haikai' => $haikai,'time' => $time,'img' => $img, 'created'=>$created]);
    }else{
      $_SESSION['name'] = "guest";
      $name = json_encode($_SESSION['name']);
      return view('/new',['name' => $name,'haikai' => $haikai,'time' => $time,'img' => $img, 'created'=>$created]);
    }
  }
  //ランキング表示
  public function image_ranking(){
    session_start();

    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "SELECT * FROM products LEFT OUTER JOIN likes ON products.id=likes.product_id  LEFT OUTER JOIN users ON products.user_id=users.id ORDER BY count DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    $i = 0;
    $j = 0;

    foreach ($products as $product) {
      $haikai[$i] = $product['product_haikai'];
      $img[$i] = $product['product_img'];
      $time[$i] = $product['product_time'];
      $created[$i] = $product['user_name'];
      $count[$i] = $product['count'];
      $i++;
    }

    $sql = "SELECT * FROM products ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    $i = 0;

    foreach ($products as $product) {
      $_SESSION[$j] = json_encode($product['id']);
      $j++;
    }
    if(isset($_SESSION['name'])){
      $name = json_encode($_SESSION['name']);
      if(isset($_SESSION['id'])){
        $s_id = json_encode($_SESSION['id']);
        return view('/rank',['name' => $name, 's_id' => $s_id, 'haikai' => $haikai,'time' => $time,'img' => $img, 'created'=>$created]);
      }
      return view('/rank',['name' => $name,'haikai' => $haikai,'time' => $time,'img' => $img, 'created'=>$created]);
    }else{
      $_SESSION['name'] = "guest";
      $name = json_encode($_SESSION['name']);
      return view('/rank',['name' => $name,'haikai' => $haikai,'time' => $time,'img' => $img, 'created'=>$created]);
    }
  }
  //マイページ
  public function my_image(){
    session_start();

    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "SELECT * FROM products LEFT OUTER JOIN likes ON products.id=likes.product_id  LEFT OUTER JOIN users ON products.user_id=users.id WHERE users.id= :id ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->execute();
    $products = $stmt->fetchAll();
    $i = 0;
    $j = 0;
    $all_count = 0;

    foreach ($products as $product) {
      $haikai[$i] = $product['product_haikai'];
      $img[$i] = $product['product_img'];
      $time[$i] = $product['product_time'];
      $created[$i] = $product['user_name'];
      $image_id[$i] = $product['id'];
      $all_count = $all_count + $product['count'];
      $i++;
    }

    $sql = "SELECT * FROM products ORDER BY product_time DESC LIMIT 12";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();

    foreach ($products as $product) {
      $_SESSION[$j] = json_encode($product['id']);
      $j++;
    }
    $name = json_encode($_SESSION['name']);
    if(isset($_SESSION['id'])){
      $s_id = json_encode($_SESSION['id']);
      return view('/user',['name' => $name, 's_id' => $s_id, 'haikai' => $haikai,'time' => $time,'img' => $img, 'all_count' => $all_count]);
    }
  }
}
