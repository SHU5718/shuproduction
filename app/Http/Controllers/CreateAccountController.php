<?php

namespace App\Http\Controllers;
use PDO;

class CreateAccountController extends Controller
{

  function create_account()
  {
    //フォームからの値をそれぞれ変数に代入
    //$name = $_POST['name'];
    //$mail = $_POST['mail'];
    //$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $name = "aa";
    $mail = "bb";
    $pass = password_hash("cc", PASSWORD_DEFAULT);
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
    if (isset($member['user_email'])) {
      $m_mail = $member['user_email'];
    }
    if ($m_mail === $mail) {
        $msg = '同じメールアドレスが存在します。';
        return view('logincheck',['msg' => $msg]);
    } else {
        //登録されていなければinsert
        $sql = "INSERT INTO users(user_name, user_email, user_password) VALUES (:name, :mail, :pass)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':mail', $mail);
        $stmt->bindValue(':pass', $pass);
        $stmt->execute();
        $msg = '会員登録が完了しました';
        return view('logincheck',['msg' => $msg]);
    }

  }
}
