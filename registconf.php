<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/registconf.css">
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
                    お問合せ確認フォーム
                </p>
            </div>
        </div>
    </header>
    <section class="formContainar">
       <form action="registconf.php" method="post" class="registerForm" id="JsregisterForm">
            <table class="table">
                <tbody class="tbody">
                    <tr class="tr">
                        <td class="td"><p>名前</p></td>
                        <td class="td tdRight"><?php echo $_POST['name'];?></td>
                    </tr>
                    <tr class="tr">
                        <td class="td"><p>メールアドレス</p></td>
                        <td class="td tdRight"><?php echo $_POST['email'];?></td>
                    </tr>
                    <tr class="tr">
                        <td class="td"><p>電話番号</p></td>
                        <td class="td tdRight"><?php echo $_POST['Tell'];?></td>
                    </tr>
                    <tr class="tr">
                        <td class="td"><p>コメント</p></td>
                        <td class="td tdRight"><?php echo $_POST['comments'];?></td>
                    </tr>
                </tbody>
            </table>
       </form>
       <div class="buttonContainar">
            <div>
                <form action="register.php" method="post">
                    <input type="submit" value="戻って修正する" class="submit">
                    <input type="hidden" value="<?php echo $_POST['name']?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['email']?>" name="email">
                    <input type="hidden" value="<?php echo $_POST['Tell']?>" name="Tell">
                    <input type="hidden" value="<?php echo $_POST['comments']?>" name="comments">
                </form>
            </div>
            <div>
                <form action="registcomp.php" method="post">
                    <input type="submit" value="送信する" class="submit">
                    <input type="hidden" value="<?php echo $_POST['name']?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['email']?>" name="email">
                    <input type="hidden" value="<?php echo $_POST['Tell']?>" name="Tell">
                    <input type="hidden" value="<?php echo $_POST['comments']?>" name="comments">
                </form>
            </div>
       </div>
    </section>
    <script src="js/registconf.js"></script>
</body>
</html>