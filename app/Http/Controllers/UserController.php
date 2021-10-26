<?php

namespace App\Http\Controllers;

use App\Models\senryuu;
use Illuminate\Http\Request;
use PDO;

class UserController extends Controller
{
  //新規登録
  public function create_account()
  {
    session_start();
    //フォームからの値をそれぞれ変数に代入
    $id = random_int(1000000000000000,9999999999999999);
    $name = $_POST['name'];
    $avatar = "";
    $mail = $_POST['mail'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $Pass = $_POST['Pass'];
    $dsn = "mysql:host=127.0.0.1; dbname=senryuu; charset=utf8";
    $username = "root";
    $password = "";
    $member = array();

    //データベース接続
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

    //メールアドレスが登録されている場合&パスワードが一致しない場合
    if ($m_mail === $mail) {
      $msg = '同じメールアドレスが存在します。';
      $name = json_encode($_SESSION['name']);
      return view('/newuser',['name' => $name],['msg' => $msg]);
    } elseif($_POST['pass'] != $Pass){
      $msg = 'パスワードが一致しません。';
      $name = json_encode($_SESSION['name']);
      return view('/newuser',['name' => $name],['msg' => $msg]);
    } else{
        // アイコン
        //$request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        //$imageName = time().'.'.$request->image->extension();
        //$request->image->move(public_path('images/uploaded_avatar'),$imageName);

      //登録されていなければinsert
      if(isset($_POST['avatar'])){
        $avatar = $_POST['avatar'];
        $sql = "INSERT INTO users(id, user_name, user_email, user_password, user_img) VALUES (:id, :name, :mail, :pass, :avatar)";
      }else{
        $sql = "INSERT INTO users(id, user_name, user_email, user_password) VALUES (:id, :name, :mail, :pass)";
      }

      $stmt = $dbh->prepare($sql);
      $stmt->bindValue(':id', $id);
      $stmt->bindValue(':name', $name);
      $stmt->bindValue(':mail', $mail);
      $stmt->bindValue(':avatar', $avatar);
      $stmt->bindValue(':pass', $pass);
      $stmt->execute();
      $msg = '会員登録が完了しました';

      //自動ログイン処理
      $sql = "SELECT * FROM users WHERE user_email = :mail";
      $stmt = $dbh->prepare($sql);
      $stmt->bindValue(':mail', $mail);
      $stmt->execute();
      $member = $stmt->fetch();

      $_SESSION['id'] = $member['id'];
      $_SESSION['name'] = $member['user_name'];
      $_SESSION['avatar'] = $member['user_img'];

      if(isset($_SESSION['image'])){
        $name = json_encode($_SESSION['name']);
        return view('/message_result',['name' => $name],['msg' => $msg],['img_url' => $_SESSION['image']]);
      }
      $name = json_encode($_SESSION['name']);
      return view('/message_top',['name' => $name],['msg' => $msg]);
    }

  }
  //ログイン
  public function user_login(){

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
    if($mail =="" || $pass == ""){
      $msg = 'メールアドレスとパスワードを入力してください。';
      $name = json_encode($_SESSION['name']);
      return view('/login',['name' => $name],['msg' => $msg]);
    }elseif(password_verify($pass, $m_pass)) {
      //DBのユーザー情報をセッションに保存
      $_SESSION['id'] = $member['id'];
      $_SESSION['name'] = $member['user_name'];
      $_SESSION['avatar'] = $member['user_img'];

      if(isset($_SESSION['image'])){
        $name = json_encode($_SESSION['name']);
        return view('/result',['name' => $name],['img_url' => $_SESSION['image']]);
      }
      $name = json_encode($_SESSION['name']);
      return view('/top',['name' => $name]);
    } else {
      $name = json_encode($_SESSION['name']);
      $msg = 'メールアドレスもしくはパスワードが間違っています。';
      return view('/login',['name' => $name],['msg' => $msg]);
    }
  }

  public function user_logout(){
    session_start();
    if (isset($_COOKIE["PHPSESSID"])) {
      setcookie("PHPSESSID", '', time() - 1800, '/');
    }
    session_destroy();
    session_start();
    $_SESSION['name'] = "guest";
    $name = json_encode($_SESSION['name']);
    $msg = 'ログアウトしました。';
    return view('/message_top',['name' => $name],['msg' => $msg]);
  }
}
