<?php
$data = file_get_contents('http://opentutorials.org');
preg_match('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@',$data, $matches);
print_r($matches);
 ?>
