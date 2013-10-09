<?php
header('Access-Control-Allow-Origin: *');

  $au = $_REQUEST['au'];

  if($au == 'true'){
  	$abooks[] = array(
     'theme'=> "test",
     'img'=>'books/cover.jpg',
     'books'=>'12'
    );

  	$abooks[] = array(
     'theme'=> "test",
     'img'=>'books/cover.jpg',
     'books'=>'12'
    );

  }
echo json_encode($book);
?>