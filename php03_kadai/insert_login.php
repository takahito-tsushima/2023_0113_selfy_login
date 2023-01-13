<?php

// SESSION開始！！
session_start();
// 関数群の読み込み
require_once('funcs.php');
// ログインチェック処理！
loginCheck();


//1. POSTデータ取得
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];


//2. DB接続します   try=内容を実行  catch=エラーがあれば処理を止めて以下を実行
$pdo = db_conn();


//３．データ登録SQL作成

// 1. SQL文を用意    【 処理の内容 を記述 】
$stmt = $pdo->prepare("INSERT INTO register01_on(
  id,
  lid,
  lpw,
  date)
                      
VALUES(NULL,
  :lid,
  :lpw,
  sysdate() )" 
);


//  2. バインド変数を用意    【 SQL injection 攻撃の回避 】
// ※フォームからそのままデータを取り込むのは危険 → :○○と置いてから取り込み処理を実行

// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);


//  3. 実行
$status = $stmt->execute();


//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{


  //５．index.phpへリダイレクト
header('Location: register01_on.php');
}


?>
