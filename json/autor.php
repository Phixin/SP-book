<?php
header('Access-Control-Allow-Origin: *');

$autor[] = array(
     'autor'=> "test",
     'img'=>'books/cover.jpg',
     'books'=>'12'
);
$autor[] = array(
     'autor'=> "test2",
     'img'=>'books/cover.jpg',
     'books'=>'12'
);
$autor[] = array(
     'autor'=> "test3",
     'img'=>'books/cover.jpg',
     'books'=>'12'
);

echo json_encode($autor);
?>