<?php

// SESSION開始！！
session_start();
// 関数群の読み込み
require_once('funcs.php');
// ログインチェック処理！
loginCheck();

// 関数ファイルでreturnで外に出した$pdoを使う
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM register05_history where id=10;');
$status = $stmt->execute();

//３．データ表示

$childhood = '' or 
$teenage = '' or 
$new_grad = '' or 
$job_change = '' or 
$crossroads = '' or 
$vision = '' ;


if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {  
        //GETデータ送信リンク作成
        
        $childhood .= $result['childhood'];
        $teenage .= $result['teenage'];
        $new_grad .= $result['new_grad'];
        $job_change .= $result['job_change'];
        $crossroads .= $result['crossroads'];
        $vision .= $result['vision'];
        
        

    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>私のヒストリー / My History</title>
</head>

<body>

    <div>私のヒストリー / My History</div>

    <div>■私のヒストリー / My History</div>
    <div>幼少期の思い出</div>
    <div><?= $childhood ?></div>
    <div>学生時代の自分</div>
    <div><?= $teenage ?></div>
    <div>初めて社会に出たとき</div>
    <div><?= $new_grad ?></div>
    <div>転職の経験</div>
    <div><?= $job_change ?></div>
    <div>人生の転換点</div>
    <div><?= $crossroads ?></div>
    <div>将来の夢やビジョン</div>
    <div><?= $vision ?></div>


</body>

</html>