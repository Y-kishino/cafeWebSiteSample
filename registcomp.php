<?php
mb_internal_encoding("UTF-8");
$dsn = "mysql:dbname=cafeSite;host=localhost;";
$user = "root";
$pass = "root";

try{
    $dbh = new PDO($dsn,$user,$pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo'Mysql接続成功';
         $time =  date('Y-m-d');
    // sql文の格納
    $sql = "insert into contact(name,email,Tell,comments,Rtime)values
    ('".$_POST['name']."','".$_POST['email']."','".$_POST['Tell']."','".$_POST['comments']."','".$time."')";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/registcomp.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="registerHeaderContainar">
            <div class="daimei">
                <p>
                    <span class="registerspan01">C</span>
                    <span class="registerspan02">O</span>
                    <span class="registerspan03">N</span>
                    <span class="registerspan04">T</span>
                    <span class="registerspan05">A</span>
                    <span class="registerspan06">C</span>
                    <span class="registerspan07">T</span>
                </p>
            </div>
            <div class="nihonngodaimei">
                <p>
                    お問合せ完了フォーム
                </p>
            </div>
        </div>
    </header>
    <section class="formContainar">
       <div>
        お問い合わせありがとうございます。<br>
        後日、メールまたは、電話で連絡いたします。<br>
       </div>
       <div class="submit">
        <a href="mian.html">
            TOPへ戻る
        </a>
       </div>
    </section>
    <script src="js/registcomp.js"></script>
</body>
</html>