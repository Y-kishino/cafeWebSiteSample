<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
</head>
<body>
<script src="js/register.js"></script>
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
                    お問合せフォーム
                </p>
            </div>
        </div>
    </header>
    <section class="formContainar">
       <form action="registconf.php" method="post" class="registerForm" id="JsregisterForm">
        <div>
            <label for="XXX">名前</label><br>
            <input type="text" class="text" size="40" placeholder="田中　太郎" name="name" data-error="0" value="<?php if (!empty($_POST['name'])) {
                    echo $_POST['name'];
                }?>">
            <p class="errorText" id="targeterrorText0" data-target="0">※名前を入力してください</p>
        </div>
        <div>
            <label for="XXX">メールアドレス</label><br>
            <input type="text" class="text" size="40" placeholder="example@gmail.com" name="email" data-error="1" value="<?php if (!empty($_POST['email'])) {
                    echo $_POST['email'];
                }?>">
            <p class="errorText" id="targeterrorText1" data-target="1">※メールアドレスを入力してください</p>
        </div>
        <div>
            <label for="XXX">電話番号</label><br>
            <input type="text" class="text" size="40" placeholder="090-0000-0000" name="Tell" data-error="2" value="<?php if (!empty($_POST['Tell'])) {
                    echo $_POST['Tell'];
                }?>">
            <p class="errorText" id="targeterrorText2" data-target="2">※電話番号を入力してください</p>
        </div>
        <div id="Commentform">
            <label for="">コメント</label><br>
            <textarea cols="50" rows="7" name="comments" placeholder="コメントを入力してください" data-error="3" value="<?php if (!empty($_POST['comments'])) {
                    echo $_POST['comments'];
                }?>"></textarea>
            <p class="errorText" id="targeterrorText3" data-target="3">※コメントを入力してください</p>
        </div>
        <div>
            <input type="submit" class="submit" value="送信する" onClick="return check();">
        </div>
       </form>
    </section>
    <script src="js/register.js"></script>
    <script>
            function check(){
                var flag = 0;
                //設定開始（チェック項目の生成）
                const $doc = document;
                const $form = $doc.getElementById('JsregisterForm');
                    if ($form.name.value=="") {
                        const target = document.getElementById('targeterrorText0');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.email.value=="") {
                        const target = document.getElementById('targeterrorText1');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.Tell.value=="") {
                        const target = document.getElementById('targeterrorText2');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.comments.value=="") {
                        const target = document.getElementById('targeterrorText3');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                if(flag){
                    return false;//送信中止
                }else{
                    return true;//送信を実行
                }
            } 
    </script>
</body>
</html>