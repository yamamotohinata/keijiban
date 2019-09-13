<!DOCTYPE html>
<html lang="ja">
    <head>
     <meta charset="UTF-8">
     <title>4each_keijiban</title>
	 <link rel="stylesheet" type="text/css" href="style1.css">
　  </head>
    
    <body>
	 <?php
	 mb_internal_encoding("utf8");
	 $pdo=new PDO("mysql:dbname=lesson2;host=localhost;","root","mysql");
	 $stmt=$pdo->query("select * from 4each_keijiban");
	?>
		
      <header>
          <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問合わせ</li>
            <li>その他</li>
        </ul>   
      </header>
        <main>
            <div class="maincontainer">
              <div class="left">
                  <h1>プログラミングに役立つ掲示板</h1>
				  <form method="post" action="insert.php">
				  	<h2>入力フォーム</h2>
				    	<p>
							ハンドルネーム<br>
							<input type="text" class="handlename" name="handlename">
					    </p>
				  		<p>
							タイトル<br>
				  			<input type="text" class="title" name="title">
					    </p>
					    <p>
							コメント<br>
				  			<textarea rows="10" cols="60" name="comments"></textarea>
					    </p>
					    <input type="submit" class="sousin" value="投稿する">
				  </form>
				  <?php
				  	while($row=$stmt->fetch()){
						echo "<div class='kiji'>";
						echo "<h3>".$row['title']."</h3>";
						echo "<div class='contents'>";
						echo $row['comments'];
						echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
						echo "</div>";
						echo "</div>";
					}
				  ?>
				  </div>
            　  </div>
              <div class="right">
				<div class="sidebar">
                  <h2>人気の記事</h2>
                  <p>PHP オススメ本</p>
                  <p>PHP MyAdminの使い方</p>
                  <p>今人気のエディタ Top5</p>
                  <p>HTMLの基礎</p>
				  <h2>オススメリンク</h2>
				  <p>インターノウス株式会社</p>
				  <p>XAMPPのダウンロード</p>
				  <p>Eclipseのダウンロード</p>
				  <p>Bracketsのダウンロード</p>
				  <h2>カテゴリ</h2>
				  <p>HTML</p>
				  <p>PHP</p>
				  <p>MySQL</p>
				  <p>JavaScript</p>
				</div>
			  </div>　
        </main>
        <footer>copyright internous 4each blog is the one which provides A to Z about programming.</footer>
    </body> 
</html>