<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from keijiban");

    ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
 
    
<img src="4eachblog_logo.jpg">
<div class="top">
<ul>
<li>トップ</li>
<li>プロフィール</li>
<li>4eachについて</li>
<li>登録フォーム</li>
<li>問い合わせ</li>
<li>その他</li>
</ul>
</div>
    
<h1>プログラミングに役立つ掲示板</h1>
    
<div class="main_box">
<div class="left">
<form method="post" action="insert.php"> 
<h3>入力フォーム</h3>
<label>ハンドルネーム</label><br><input text="text" name="handlename"><br><br>
<label>タイトル</label><br><input text="text" name="title"><br><br>
<label>コメント</label><br><textarea  rows="8" cols="50" wrap="hard" name="comments"></textarea><br>
<input type="submit" class="submit" value="送信する">
</form>

</div>
<div class="right">
<p>人気の記事</p>
<ul>
<li>PHPオススメ本</li>
<li>PHP　MyAdminの使い方</li>
<li>いま人気のエディタTOP5</li>
<li>HTMLの基礎</li>
</ul>
<p>オススメリンク</p>
<ul>
<li>インターノウス株式会社</li>
<li>XAMPPのダウンロード</li>
<li>Eclipseのダウンロード</li>
<li>Bracketsのダウンロード</li>
</ul>
<p>カテゴリ</p>
<ul>
<li>HTML</li>
<li>PHP</li>
<li>MySQL</li>
<li>JavaScript</li>
</ul>
</div>
<div class="box1"></div>
<div class="box2">
<div class="box3">

<?php
while($row=$stmt->fetch()){
    echo"<div class='kiji'>";
    echo"<h4>".$row['title']."</h4>";
    echo "<div class='contents'>";
    echo $row['comments'];
    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
    echo"</div>";
    echo"</div>";
    echo"<div class='box1'>";
    echo"</div>";
} 
?>

</div>
<div class="box1"></div>
</div>
</div>

<footer>
copyright ⓒ　internous | 4each blog is the one which provides A to Z about programming.
</footer>
  

</body>


</html>