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
$stmt = $pdo->prepare('SELECT * FROM register04_truth where id=10;');
$status = $stmt->execute();

//３．データ表示

$usual01 = '' or 
$usual02 = '' or 
$usual03 = '' or 
$usual04 = '' or 
$usual05 = '' or 
$usual06 = '' or 
$usual07 = '' or 
$usual08 = '' or 
$usual09 = '' or 
$usual10 = '' or 
$values01 = '' or 
$values02 = '' or 
$values03 = '' or 
$values04 = '' or 
$values05 = '' or 
$values06 = '' or 
$character = '' or 
$phrase = '' or 
$ilike = '' or 
$dislike = '' or 
$complex = '' ;


if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {  
        //GETデータ送信リンク作成
        
        $usual01 .= $result['usual01'];
        $usual02 .= $result['usual02'];
        $usual03 .= $result['usual03'];
        $usual04 .= $result['usual04'];
        $usual05 .= $result['usual05'];
        $usual06 .= $result['usual06'];
        $usual07 .= $result['usual07'];
        $usual08 .= $result['usual08'];
        $usual09 .= $result['usual09'];
        $usual10 .= $result['usual10'];

        $values01 .= '仕事とは　・・・　' .  $result['values01'];
        $values02 .= '家族とは　・・・　' .  $result['values02'];
        $values03 .= '恋愛とは　・・・　' .  $result['values03'];
        $values04 .= '結婚とは　・・・　' .  $result['values04'];
        $values05 .= '友達とは　・・・　' .  $result['values05'];
        $values06 .= 'お金とは　・・・　' .  $result['values06'];

        $character .= $result['character'];

        $phrase .= $result['phrase'];
        $ilike .= $result['ilike'];
        $dislike .= $result['dislike'];
        $complex .= $result['complex'];
        

    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>私の素顔図鑑 / My Truth</title>
</head>

<body>

<div>私の素顔図鑑 / My Truth</div>

<div>■私の日常 / My Usual</div>
<div><?= $usual01 ?></div>
<div><?= $usual02 ?></div>
<div><?= $usual03 ?></div>
<div><?= $usual04 ?></div>
<div><?= $usual05 ?></div>
<div><?= $usual06 ?></div>
<div><?= $usual07 ?></div>
<div><?= $usual08 ?></div>
<div><?= $usual09 ?></div>
<div><?= $usual10 ?></div>

<div>■私の価値観 / My Values</div>
<div><?= $values01 ?></div>
<div><?= $values02 ?></div>
<div><?= $values03 ?></div>
<div><?= $values04 ?></div>
<div><?= $values05 ?></div>
<div><?= $values06 ?></div>

<div>■私の性格（実は○○） / My Character</div>
<div><?= $character ?></div>

<div>■私の自画像 / My Portrait</div>
<div>自分の性格をひとことで！</div>
<div><?= $phrase ?></div>
<div>自分自身の好きな部分</div>
<div><?= $ilike ?></div>
<div>自分自身の嫌いな部分</div>
<div><?= $dislike ?></div>
<div>密かな悩みやコンプレックス</div>
<div><?= $complex ?></div>

</body>

</html>