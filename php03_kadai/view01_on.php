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
$stmt = $pdo->prepare('SELECT * FROM register01_on where id=10;');
$status = $stmt->execute();

//３．データ表示

$name_j = '' or 
$name_e = '' or 
$birth = '' or 
$born = '' or 

$occupation = '' or 
$affiliation = '' or 
$division = '' or 
$description = '' or 
$start = '' or 

$postal = '' or 
$address01 = '' or 
$address02 = '' or 
$phone = '' or 
$fax = '' or 
$url = '' or 
$email = '' or 
$mobile = '' or 

$univ = '' or 
$univ_period = '' or 

$hs = '' or 
$hs_period = '' or 

$grad = '' or 
$grad_period = '' or 

$career01 = '' or 
$division01 = '' or 
$career01_period = '' or 
$career01_detail = '' or 

$career02 = '' or 
$division02 = '' or 
$career02_period = '' or 
$career02_detail = '' or 

$career03 = '' or 
$division03 = '' or 
$career03_period = '' or 
$career03_detail = '' or 

$motivation = '' or 
$episode = '' or 
$episode_detail = '';


if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {  
        //GETデータ送信リンク作成
        
        $name_j .= $result['name01j'] . '  ' . $result['name02j'];
        $name_e .= $result['name01e'] . '  ' . $result['name02e'];
        $birth .= '生年月： ' . $result['birth_year']. '年 ' . $result['birth_month']. '月';
        $born .= '出身： ' . $result['born_place']. ' / ' . $result['prefecture'] . $result['country'];

        $affiliation .= $result['affiliation'];
        $division .= $result['division'];
        $description .= $result['description'];
        $start .= '入社： ' . $result['start_year']. '年 ' . $result['start_month']. '月';

        $postal .= '住所： 〒' . $result['postal'];
        $address01 .= '　　　 ' . $result['address01'];
        $address02 .= '　　　 ' .  $result['address02'];
        $phone .=  '電話： ' . $result['phone'];
        $fax .=  'FAX： ' . $result['fax'];
        $url .=  'HP： ' . $result['url'];
        $email .=  'Email： ' . $result['email'];
        $mobile .=  '携帯： ' . $result['mobile'];

        $univ .= $result['univ']. ' / ' . $result['univ_major'];
        $univ_period .= '（' . $result['univ_start_year']. '年' . $result['univ_start_month']. '月～' . $result['univ_end_year']. '年' . $result['univ_end_month']. '月）';

        $hs .= $result['hs']. ' / ' . $result['hs_major'];
        $hs_period .= '（' . $result['hs_start_year']. '年' . $result['hs_start_month']. '月～' . $result['hs_end_year']. '年' . $result['hs_end_month']. '月）';

        $grad .= $result['grad']. ' / ' . $result['grad_major'];
        $grad_period .= '（' . $result['grad_start_year']. '年' . $result['grad_start_month']. '月～' . $result['grad_end_year']. '年' . $result['grad_end_month']. '月）';

        $career01 .= $result['career01'];
        $division01 .= $result['division01'];
        $career01_period .= '（' . $result['career01_start_year']. '年' . $result['career01_start_month']. '月～' . $result['career01_end_year']. '年' . $result['career01_end_month']. '月）';
        $career01_detail .= $result['career01_detail'];

        $career02 .= $result['career02'];
        $division02 .= $result['division02'];
        $career02_period .= '（' . $result['career02_start_year']. '年' . $result['career02_start_month']. '月～' . $result['career02_end_year']. '年' . $result['career02_end_month']. '月）';
        $career02_detail .= $result['career02_detail'];

        $career03 .= $result['career03'];
        $division03 .= $result['division03'];
        $career03_period .= '（' . $result['career03_start_year']. '年' . $result['career03_start_month']. '月～' . $result['career03_end_year']. '年' . $result['career03_end_month']. '月）';
        $career03_detail .= $result['career03_detail'];

        $motivation .= $result['motivation'];
        $episode .= $result['episode'];
        $episode_detail .= $result['episode_detail'];
        

    }
}
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>オンの私 / ON</title>
</head>

<body>
    <div><?= $name_j ?></div>
    <div><?= $name_e ?></div>
    <div><?= $birth ?></div>
    <div><?= $born ?></div>

    <div><?= $occupation ?></div>
    <div><?= $affiliation ?></div>
    <div><?= $division ?></div>
    <div><?= $description ?></div>
    <div><?= $start ?></div>

    <div><?= $postal ?></div>
    <div><?= $address01 ?></div>
    <div><?= $address02 ?></div>
    <div><?= $phone ?></div>
    <div><?= $fax ?></div>
    <div><?= $url ?></div>
    <div><?= $email ?></div>
    <div><?= $mobile ?></div>

    <div>■私の経歴 / My Career</div>
    <div><?= $univ ?></div>
    <div><?= $univ_period ?></div>

    <div><?= $hs ?></div>
    <div><?= $hs_period ?></div>

    <div><?= $grad ?></div>
    <div><?= $grad_period ?></div>

    <div><?= $career01 ?></div>
    <div><?= $division01 ?></div>
    <div><?= $career01_period ?></div>
    <div><?= $career01_detail ?></div>

    <div><?= $career02 ?></div>
    <div><?= $division02 ?></div>
    <div><?= $career02_period ?></div>
    <div><?= $career02_detail ?></div>

    <div><?= $career03 ?></div>
    <div><?= $division03 ?></div>
    <div><?= $career03_period ?></div>
    <div><?= $career03_detail ?></div>

    <div>■私のモチベ / My Motivation</div>
    <div><?= $motivation ?></div>

    <div>■私のエピソード / My Eisode</div>
    <div><?= $episode ?></div>
    <div><?= $episode_detail ?></div>


</body>

</html>