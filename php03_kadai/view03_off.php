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
$stmt = $pdo->prepare('SELECT * FROM register03_off where id=10;');
$status = $stmt->execute();

//３．データ表示

$residence = '' or 
$family = '' or 
$hobby = '' or 
$time_weekday = '' or 
$time_weekend = '' or 
$facebook = '' or 
$instagram = '' or 
$twitter = '' or 
$holiday = '' or 
$interest = '' or 
$crazy = '' or 
$love = '' or 
$important = '' or 
$collection = '' or 
$expensive = '' or 
$respect = '' ;


if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {  
        //GETデータ送信リンク作成
        
        $residence .= $result['residence'];
        $family .= $result['family'];
        $hobby .= $result['hobby'];
        $time_weekday .= $result['time_weekday'];
        $time_weekend .= $result['time_weekend'];
        $facebook .= $result['facebook'];
        $instagram .= $result['instagram'];
        $twitter .= $result['twitter'];
        $holiday .= $result['holiday'];
        $interest .= $result['interest'];
        $crazy .= $result['crazy'];
        $love .= $result['love'];
        $important .= $result['important'];
        $collection .= $result['collection'];
        $expensive .= $result['expensive'];
        $respect .= $result['respect'];        
        

    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>オフの私 / OFF</title>
</head>

<body>
    <div><?= $residence ?></div>
    <div><?= $family ?></div>
    <div><?= $hobby ?></div>
    <div><?= $time_weekday ?></div>
    <div><?= $time_weekend ?></div>
    <div><?= $facebook ?></div>
    <div><?= $instagram ?></div>
    <div><?= $twitter ?></div>

    <div>■私のお気に入り / My Favorite</div>
    <div>休日の過ごし方</div>
    <div><?= $holiday ?></div>
    <div>興味関心のあること</div>
    <div><?= $interest ?></div>
    <div>ハマっているもの</div>
    <div><?= $crazy ?></div>
    <div>最近好きになったもの</div>
    <div><?= $love ?></div>
    <div>大切にしているもの</div>
    <div><?= $important ?></div>
    <div>自慢のコレクション</div>
    <div><?= $collection ?></div>
    <div>一番高価な買い物</div>
    <div><?= $expensive ?></div>
    <div>尊敬する人や憧れの人</div>
    <div><?= $respect ?></div>


</body>

</html>