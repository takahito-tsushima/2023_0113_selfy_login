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
$stmt = $pdo->prepare('SELECT * FROM register02_torisetsu where id=1;');
$status = $stmt->execute();

//３．データ表示

$forMyColleague01 = '' or 
$forMyColleague02 = '' or 
$forMyColleague03 = '' or 
$forMyColleague04 = '' or 
$forMyColleague05 = '' or 
$forMyColleague06 = '' or 
$forMyColleague07 = '' or 
$forMyColleague08 = '' or 
$forMyColleague09 = '' or 
$forMyColleague10 = '' or 
$forMyBoss01 = '' or 
$forMyBoss02 = '' or 
$forMyBoss03 = '' or 
$forMyBoss04 = '' or 
$forMyBoss05 = '' or 
$forMyBoss06 = '' or 
$forMyBoss07 = '' or 
$forMyBoss08 = '' or 
$forMyBoss09 = '' or 
$forMyBoss10 = '' or 
$forMyTeam01 = '' or 
$forMyTeam02 = '' or 
$forMyTeam03 = '' or 
$forMyTeam04 = '' or 
$forMyTeam05 = '' or 
$forMyTeam06 = '' or 
$forMyTeam07 = '' or 
$forMyTeam08 = '' or 
$forMyTeam09 = '' or 
$forMyTeam10 = '' ;


if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {  
        //GETデータ送信リンク作成
        
        $forMyColleague01 .= $result['forMyColleague01'];
        $forMyColleague02 .= $result['forMyColleague02'];
        $forMyColleague03 .= $result['forMyColleague03'];
        $forMyColleague04 .= $result['forMyColleague04'];
        $forMyColleague05 .= $result['forMyColleague05'];
        $forMyColleague06 .= $result['forMyColleague06'];
        $forMyColleague07 .= $result['forMyColleague07'];
        $forMyColleague08 .= $result['forMyColleague08'];
        $forMyColleague09 .= $result['forMyColleague09'];
        $forMyColleague10 .= $result['forMyColleague10'];
        $forMyBoss01 .= $result['forMyBoss01'];
        $forMyBoss02 .= $result['forMyBoss02'];
        $forMyBoss03 .= $result['forMyBoss03'];
        $forMyBoss04 .= $result['forMyBoss04'];
        $forMyBoss05 .= $result['forMyBoss05'];
        $forMyBoss06 .= $result['forMyBoss06'];
        $forMyBoss07 .= $result['forMyBoss07'];
        $forMyBoss08 .= $result['forMyBoss08'];
        $forMyBoss09 .= $result['forMyBoss09'];
        $forMyBoss10 .= $result['forMyBoss10'];
        $forMyTeam01 .= $result['forMyTeam01'];
        $forMyTeam02 .= $result['forMyTeam02'];
        $forMyTeam03 .= $result['forMyTeam03'];
        $forMyTeam04 .= $result['forMyTeam04'];
        $forMyTeam05 .= $result['forMyTeam05'];
        $forMyTeam06 .= $result['forMyTeam06'];
        $forMyTeam07 .= $result['forMyTeam07'];
        $forMyTeam08 .= $result['forMyTeam08'];
        $forMyTeam09 .= $result['forMyTeam09'];
        $forMyTeam10 .= $result['forMyTeam10'];
                

    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>私のトリセツ / My Manual</title>
</head>

<body>

    <div>私のトリセツ / My Manual</div>
    <div>私を伝える10の質問 / 10 Magic Questions!</div>

    <div>■チームの皆さんへ / for My Colleague</div>
    <div><?= $forMyColleague01 ?></div>
    <div><?= $forMyColleague02 ?></div>
    <div><?= $forMyColleague03 ?></div>
    <div><?= $forMyColleague04 ?></div>
    <div><?= $forMyColleague05 ?></div>
    <div><?= $forMyColleague06 ?></div>
    <div><?= $forMyColleague07 ?></div>
    <div><?= $forMyColleague08 ?></div>
    <div><?= $forMyColleague09 ?></div>
    <div><?= $forMyColleague10 ?></div>

    <div>■上司の方へ / for My Boss</div>
    <div><?= $forMyBoss01 ?></div>
    <div><?= $forMyBoss02 ?></div>
    <div><?= $forMyBoss03 ?></div>
    <div><?= $forMyBoss04 ?></div>
    <div><?= $forMyBoss05 ?></div>
    <div><?= $forMyBoss06 ?></div>
    <div><?= $forMyBoss07 ?></div>
    <div><?= $forMyBoss08 ?></div>
    <div><?= $forMyBoss09 ?></div>
    <div><?= $forMyBoss10 ?></div>

    <div>■部下の皆さんへ / for My Team</div>
    <div><?= $forMyTeam01 ?></div>
    <div><?= $forMyTeam02 ?></div>
    <div><?= $forMyTeam03 ?></div>
    <div><?= $forMyTeam04 ?></div>
    <div><?= $forMyTeam05 ?></div>
    <div><?= $forMyTeam06 ?></div>
    <div><?= $forMyTeam07 ?></div>
    <div><?= $forMyTeam08 ?></div>
    <div><?= $forMyTeam09 ?></div>
    <div><?= $forMyTeam10 ?></div>


</body>

</html>