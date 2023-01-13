<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>【 Selfy 】ログイン</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<h1>ログイン画面</h1>
    
<form method="POST" action="login_act.php" name="log_in">


<section id="log_in">
        <!-- <h2>ログイン</h2> -->

        <!-- <fieldset> -->
            ID:<input type="text" name="lid" />
            PW:<input type="password" name="lpw" />

            <a id="submit" onclick="document.log_in.submit()">ログイン</a>

            <!-- </fieldset> -->
    </section>
    
</form>



   
    
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- JQuery -->


<script></script>

</body>

</html>