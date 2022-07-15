<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet' href='https://eejanaica.com/style.css?v=2' type='text/css' />
    <link rel="stylesheet" href="css/dinnerRe.css">
    <title>ディナー予約フォーム</title>
</head>
<body>
    <script src="js/lunchRe.js"></script>
    <!-- ヘッダー -->
    <header class="headerContainar">
        <div class="headerContainarTextArea">
            <div class="meinnText">
                 ディナータイムご予約の方はこちら
            </div>
            <p class="subText">
                以下のフォームの入力をお願い致します。
            </p>
        </div>
    </header>
    <!-- メインの入力フォーム -->
    <section class="sectionContainar">
        <form action="dinnerReserveconf.php" method="POST" class="formContainar" id="JsForm">
            <div>
                <label for="">名前</label><br>
                <input type="text" size="40"  placeholder="田中　太郎" name="name" value="<?php if (!empty($_POST['name'])) {
                    echo $_POST['name'];
                }?>">
                <p class="errorText" id="targeterrorText0">※名前を入力してください</p>
            </div>
            <div>
                <label for="">名前カナ</label><br>
                <input type="text" size="40" placeholder="タナカ　タロウ" name="nameKana" value="<?php if (!empty($_POST['nameKana'])) {
                    echo $_POST['nameKana'];
                }?>">
                <p class="errorText" id="targeterrorText1">※名前を入力してください</p>
            </div>
            <div>
                <label for="">メールアドレス</label><br>
                <input type="text" size="40" placeholder="example@gmail.com" name="email" value="<?php if (!empty($_POST['email'])) {
                    echo $_POST['email'];
                }?>">
                <p class="errorText" id="targeterrorText2">※メールアドレスを入力してください</p>
            </div>
            <div>
                <label for="" >電話番号</label><br>
                <input type="text" size="40" placeholder="090-0000-0000" name="Tell" value="<?php if (!empty($_POST['Tell'])) {
                    echo $_POST['Tell'];
                }?>">
                <p class="errorText" id="targeterrorText3">※電話番号を入力してください</p>
            </div>
            <div>
                <label for="">予約人数</label>
                <br>
                <select name="people" id="people">
                    <option value="---" selected>人数を選択してください</option>
                    <option value="1">1人</option>
                    <option value="2">2人</option>
                    <option value="3">3人</option>
                    <option value="4">4人</option>
                    <option value="5">5人</option>
                    <option value="6">6人</option>
                    <option value="7">7人</option>
                    <option value="8">8人</option>
                    <option value="9">9人</option>
                    <option value="10">10人</option>
                </select><br>
                <p class="ptext">10人を超える団体のお客様は電話にて予約お願い致します。
                </p>
                <p class="errorText" id="targeterrorText4">※人数の選択をしてください</p>
            </div>
            <div>
                <label for="">予約日時</label><br>
                <input type="date" class="Rday" id="Rday" name="Rday">
                <script>
                    
                    var today = new Date();
                    today.setDate(today.getDate());
                    var yyyy = today.getFullYear();
                    var mm = ("0"+(today.getMonth()+1)).slice(-2);
                    var dd = ("0"+today.getDate()).slice(-2);
                    const Rday = document.getElementById("Rday").value=yyyy+'-'+mm+'-'+dd;
                    console.log(Rday);
                    
                </script>
                <p class="errorText" id="targeterrorText5">※予約日時を選択してください</p>
            </div>
            <div>
                <label for="">予約時間</label><br>
                <select name="Rtime" id="">
                    <option value="---" selected>予約時間を選択してください</option>
                    <option value="17:00">17:00</option>
                    <option value="17:15">17:15</option>
                    <option value="17:30">17:30</option>
                    <option value="17:45">17:45</option>
                    <option value="18:00">18:00</option>
                    <option value="18:15">18:15</option>
                    <option value="18:30">18:30</option>
                    <option value="18:45">18:45</option>
                    <option value="19:00">19:00</option>
                </select>
                <p class="errorText" id="targeterrorText6">※予約時間を選択してください</p>
            </div>
            <div>
                <input type="submit" class="submit" value="予約する" onClick="return check();">
            </div>
        </form>
    </section>
    <script>
            function check(){
                var flag = 0;
                //設定開始（チェック項目の生成）
                const $doc = document;
                const $form = $doc.getElementById('JsForm');
                    if ($form.name.value=="") {
                        const target = document.getElementById('targeterrorText0');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.nameKana.value=="") {
                        const target = document.getElementById('targeterrorText1');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.email.value=="") {
                        const target = document.getElementById('targeterrorText2');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.Tell.value=="") {
                        const target = document.getElementById('targeterrorText3');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.people.value=="---") {
                        const target = document.getElementById('targeterrorText4');
                        target.classList.add('errorTextfadeIn');
                        flag = 1;
                    }
                    if ($form.Rtime.value=="---") {
                        const target = document.getElementById('targeterrorText6');
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
    <script src="js/lunchRe.js"></script>
</body>
</html>