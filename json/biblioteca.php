<?php
header('Access-Control-Allow-Origin: *');

$i = $_REQUEST['i'];
$au = $_REQUEST['au'];

if($i==5 && $au == true){
 
  $biblio[]= array(
        "title"=>"test1.1",
        "editorial"=>"omega",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg",
        "size"=>"200",
        "demo"=>"true"

  );   
}

echo json_encode($biblio);
?>