<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1><a href="index.php">JavaScript</a></h1>
<?php
$link = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$result = mysqli_query($link, "SELECT * FROM topic");

print('<nav>');
print('<ul>');
while($row = mysqli_fetch_assoc($result)){
  print('<li><a href="index.php?id='.$row['id'].'">'.$row['title'].'</a></li>');
}
print('</ul>');
print('</nav>');

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($link, "SELECT * FROM topic WHERE id=".$id);
  $article = mysqli_fetch_assoc($result);
  $title = $article['title'];
  $description = $article['description'];
} else {
  $title = 'Welcome';
  $description = 'JavaScript is good.';
}
print('<article>');
print('<h2>'.$title.'</h2>');
print($description);
print('</article>');
?>
</body>
</html>
