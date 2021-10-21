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
        $fake_text = 'あ';

        if($line1 == "" || $line2 == "" || $line3 == ""){
          $msg = '全て入力してください。';
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

        // Output to browser
        header('Content-Type: image/png');

        imagepng($im, $img_name);
        imagedestroy($im);

        $_SESSION['image'] = $img_name;
        $name = json_encode($_SESSION['name']);
        return view('/result',['name' => $name],['img_name' => $img_name]);
    }

    //画像投稿機能
    function image_upload(){
      session_start();
      $name = $_SESSION['name'];

      //guestの場合ログインページへ
      if($name == "guest"){
        return view('/login',['name' => $name]);
      }

      $id = random_int(1000000000000000,9999999999999999);
      $time = date('Y-m-d H:i:s');
      $user_id = $_SESSION['id'];
      $image = $_SESSION['image'];


      $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
      $username = "root";
      $password = "";

      try {
        $dbh = new PDO($dsn, $username, $password);
      } catch (PDOException $e) {
        $msg = $e->getMessage();
      }

      $sql = "INSERT INTO products(id, product_time, product_img, user_id) VALUES (:id, :p_time, :image, :user_id)";
      $stmt = $dbh->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->bindValue(':p_time', $time);
      $stmt->bindValue(':image', $image);
      $stmt->bindValue(':user_id', $user_id);
      $stmt->execute();

      $name = json_encode($_SESSION['name']);
      return view('/top',['name' => $name]);
    }
}
