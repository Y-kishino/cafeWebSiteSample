<?php
mb_internal_encoding("UTF-8");
$dsn = "mysql:dbname=cafeSite;host=localhost;";
$user = "root";
$pass = "root";

try{
    $dbh = new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    // sql文の格納
    $sql = "insert into Rdinner(id,name,nameKana,email,Tell,people,Rday,Rtime)values
    (null,'".$_POST['name']."','".$_POST['nameKana']."','".$_POST['email']."','".$_POST['Tell']."','".$_POST['people']."','".$_POST['Rday']."','".$_POST['Rtime']."')";
    // sql文の実行
    $dbh->exec($sql);

    $dbh = null;
}catch(PDOException $e){
    echo'<h1 style="color:red;">エラーが発生した為送信できません。</h1>';
    // .$e->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet' href='https://eejanaica.com/style.css?v=2' type='text/css' />
    <link rel="stylesheet" href="css/dinnerRecomp.css">
    <title>予約完了フォーム</title>
</head>
<body>
    <header class="headerContainar">
            <div class="headerContainarTextArea">
                <div class="meinnText">
                    ディナータイムご予約の方
                </div>
                <p class="subText">
                    予約完了フォーム
                </p>
            </div>        
    </header>
    <section class="sectionContainar">
            <div class="textArea">
                <h1>予約完了致しました</h1>
                <br>
                <p>当日お待ちしています</p>
            </div>
            <div class="submitArea">
            <div class="submit">
                <a href="mian.html">
                    TOPへ戻る
                </a>
            </div>
            </div>
    </section>
</body>
</html>