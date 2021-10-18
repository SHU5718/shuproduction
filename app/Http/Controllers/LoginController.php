<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class LoginController extends Controller
{
      function user_login(){

        session_start();
        //$mail = $_POST['mail'];
        $mail = "bb";
        $pass = "cc";
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
            return view('logincheck',['msg' => $msg]);
        } else {
            $msg = 'メールアドレスもしくはパスワードが間違っています。';
            return view('logincheck',['msg' => $msg]);
        }
      }
  }
