<?php
header('Access-Control-Allow-Origin: *');
$lan = $_REQUEST['lan'];

if($lan == 'es'){

  $home[] = array('img'=>'books/cover.jpg', 'idBook'=>'1234');
  $news[] = array(
     'title'=> "test",
     'editorial'=>'test',
     'idBook'=>'123456',
     'img'=>'images/1.png'
  );

  $news[] = array(
     'title'=> "test",
     'editorial'=>'test',
     'idBook'=>'123456',
     'img'=>'images/2.png'
  );

  $news[] = array(
     'title'=> "test",
     'editorial'=>'test',
     'idBook'=>'123456',
     'img'=>'images/3.png'
  );

  $news[] = array(
     'title'=> "test",
     'editorial'=>'test',
     'idBook'=>'123456',
     'img'=>'images/4.png'
  );

  $news[] = array(
     'title'=> "test",
     'editorial'=>'test',
     'idBook'=>'123456',
     'img'=>'images/5.png'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

  $features[] = array(
    'idBook'=>'123456',
    'img'=>'books/cover.jpg'
  );

}
$inicio = array('home'=> $home, 'news'=>$news, 'features'=>$features);
echo json_encode($inicio);
?>
