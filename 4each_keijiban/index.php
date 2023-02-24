<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</read>

<body>

<?php

mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=form;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

?>

<img src="./4eachblog_logo.jpg">
 <header>
    <ul class="header-ul">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
 </header>
 <main>
    <div class="main-left">
        <h1>プログラミングに役立つ掲示板</h1>
       
     <form method="post" action="insert.php">
     <h2 class="f2">入力フォーム</h2>
     <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
        <div>
         <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
        </div>
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
     </form>
     <?php
     while ($row = $stmt->fetch()) {
         echo "<div class='main-box2'>";
         echo "<h2>" . $row['title'] . "</h2>";
         echo " <div class='comment'>";
         echo $row['comments'];
         echo "<div class='handlename'>posted by " . $row['handlename'] . "</div>";
         echo " </div>";
         echo "</div>";
     }
     ?>
    </div>
    <div class="main-right">
        <h2>人気の記事</h2>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ　Tpo5</li>
            <li>HTMLの基礎</li>
        </ul>
        <h2>オススメリンク</h2>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>
        <h2>カテゴリ</h2>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>
</main>

<footer>
        <p>copyright internous|4each blog the which provideos Ato Z about programing.</p>
    </footer>


</body>
</html>