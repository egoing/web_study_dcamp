<!DOCTYPE html>
<html>
<head>
  <title>변수와 상수</title>
  <meta charset="utf-8">
  <meta name="author" contents="egoing">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1><a href="index.html">JavaScript</a></h1>
  <ul>
    <li><a href="index.php?id=1">변수와 상수</a></li>
    <li><a href="index.php?id=2">조건문</a></li>
    <li><a href="index.php?id=3">반복문</a></li>
  </ul>
  <article>
    <?php
    if($_GET['id'] == 1) {
      print('<h2>변수와 상수</h2>변수와 상수는..');
    }
    if($_GET['id'] == 2) {
      print('<h2>조건문</h2>조건문..');
    }
    if($_GET['id'] == 3) {
      print('<h2>반복문</h2>반복문은..');
    }
    ?>
  </article>
</body>
</html>
