<?php
  $name = $_POST['name'];
  $nameKana = $_POST['nameKana'];
  $email = $_POST['email'];
  $Tell = $_POST['Tell'];
  $people = $_POST['people'];
  $Rday = $_POST['Rday'];
  $Rtime = $_POST['Rtime'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet' href='https://eejanaica.com/style.css?v=2' type='text/css' />
    <link rel="stylesheet" href="css/afetrnoonteaReconf.css">
    <title>Document</title>
</head>
<body>
    <!-- ヘッダー -->
    <header class="headerContainar">
        <div class="headerContainarTextArea">
            <div class="mainText">
                 アフタヌーンティーご予約の方
            </div>
            <p class="subText">
                以下の入力内容の確認をお願い致します。
            </p>
        </div>
    </header>
    <!-- 入力内容表示フォーム -->
    <section class="sectionContainar">
        <table class="tableArea">
            <tr>
                <td>名前</td>
                <td><?php 
                    $name = $_POST['name'];
                    echo $name;
                    ?>
                </td>
            </tr>
            <tr>
                <td>名前(カナ)</td>
                <td><?php 
                    $nameKana = $_POST['nameKana'];
                    echo $nameKana;
                    ?>
                </td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><?php 
                    $email = $_POST['email'];
                    echo $email;
                    ?>
                </td>
            </tr>
            <tr>
                <td>電話番号</td>
                <td><?php 
                    $Tell = $_POST['Tell'];
                    echo $Tell;
                    ?>
                </td>
            </tr>
            <tr>
                <td>予約人数</td>
                <td><?php 
                    $people = $_POST['people'];
                    echo $people;
                    echo "人";
                    ?>
                </td>
            </tr>
            <tr>
                <td>来店予約日</td>
                <td><?php 
                    $Rday = $_POST['Rday'];
                    echo $Rday;
                    ?>
                </td>
            </tr>
            <tr>
                <td>来店時間</td>
                <td><?php 
                    $Rtime = $_POST['Rtime'];
                    echo $Rtime;
                    ?>
                </td>
            </tr>
        </table>
        <div class="submitArea">
            <div>
                <form action="afternoonteaReserve.php" method="POST">
                    <input type="submit" value="前に戻る" class="submit">
                    <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['nameKana'];?>" name="nameKana">
                    <input type="hidden" value="<?php echo $_POST['email'];?>" name="email">
                    <input type="hidden" value="<?php echo $_POST['Tell'];?>" name="Tell">
                </form>
            </div>
            <div>
            <form action="afternoonteaReservecomp.php" method="POST">
                    <input type="submit" value="予約する" class="submit">
                    <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['nameKana'];?>" name="nameKana">
                    <input type="hidden" value="<?php echo $_POST['email'];?>" name="email">
                    <input type="hidden" value="<?php echo $_POST['Tell'];?>" name="Tell">
                    <input type="hidden" value="<?php echo $_POST['people'];?>" name="people">
                    <input type="hidden" value="<?php echo $_POST['Rday'];?>" name="Rday">
                    <input type="hidden" value="<?php echo $_POST['Rtime'];?>" name="Rtime">           
                </form>
            </div>
        </div>
    </section>
</body>
</html>