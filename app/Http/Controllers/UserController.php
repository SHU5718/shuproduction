<?php

namespace App\Http\Controllers;

use App\Models\senryuu;
use Illuminate\Http\Request;
use PDO;

class UserController extends Controller
{
  //新規登録
  function create_account()
  {
    //フォームからの値をそれぞれ変数に代入
    $id = random_int(1000000000000000,9999999999999999);
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $Pass = $_POST['Pass'];
    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    $member = array();
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    //フォームに入力されたmailがすでに登録されていないかチェック
    $sql = "SELECT * FROM users WHERE user_email = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $member = $stmt->fetch();
    $m_mail = "";


    //$member['user_email']に値があるときのみ代入
    if (isset($member['user_email'])) {
      $m_mail = $member['user_email'];
    }
    //メールアドレスが登録されている場合
    if ($m_mail === $mail) {
      $msg = '同じメールアドレスが存在します。';
      return view('newuser',['msg' => $msg]);
    } elseif($_POST['pass'] != $Pass){
      $msg = 'パスワードが一致しません。';
      return view('newuser',['msg' => $msg]);
    } else{
      //登録されていなければinsert
      $sql = "INSERT INTO users(id, user_name, user_email, user_password) VALUES (:id, :name, :mail, :pass)";
      $stmt = $dbh->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->bindValue(':name', $name);
      $stmt->bindValue(':mail', $mail);
      $stmt->bindValue(':pass', $pass);
      $stmt->execute();
      $msg = '会員登録が完了しました';
      return view('create',['msg' => $msg]);
    }

  }
  //ログイン
  function user_login(){

    session_start();
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    try {
      $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      $msg = $e->getMessage();
    }

    $sql = "SELECT * FROM users WHERE user_email = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $member = $stmt->fetch();
    $m_pass = "";
    if (isset($member['user_password'])) {
      $m_pass = $member['user_password'];
    }
    //指定したハッシュがパスワードにマッチしているかチェック
    if (password_verify($pass, $m_pass)) {
      //DBのユーザー情報をセッションに保存
      $_SESSION['id'] = $member['id'];
      $_SESSION['name'] = $member['user_name'];
      $msg = 'ログインしました。';
      $name = json_encode($_SESSION['name']);
      return view('/top',['name' => $name]);
    } else {
      $msg = 'メールアドレスもしくはパスワードが間違っています。';
      return view('login',['msg' => $msg]);
    }
  }

  function user_logout(){
    session_start();
    if (isset($_COOKIE["PHPSESSID"])) {
      setcookie("PHPSESSID", '', time() - 1800, '/');
    }
    session_destroy();
    session_start();
    $_SESSION['name'] = "guest";
    $name = json_encode($_SESSION['name']);
    return view('/top',['name' => $name]);
  }
}
