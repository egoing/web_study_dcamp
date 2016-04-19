<?php
$id = $_GET['id'];
$article1 = array('title'=>'변수와 상수', 'description'=>'변수는...');
$article2 = array('title'=>'조건문', 'description'=>'조건문은...');
$article3 = array('title'=>'반복문', 'description'=>'반복문은...');
$article4 = array('title'=>'함수', 'description'=>'함수는...');
$list = array($article1, $article2, $article3, $article4);
?>

<html>
<head>
  <meta charset="utf-8">
  <title><?php print($list[$id]['title']); ?></title>
</head>
<body>
<?php
print('<ol>');
$i = 0;
while($i < count($list)){
  print('<li><a href="index.php?id='.$i.'">'.$list[$i]['title'].'</a></li>');
  $i = $i + 1;
}
print('</ol>');

print('<h3>'.$list[$id]['title'].'</h3>');
print($list[$id]['description']);
?>
</body>
</html>
