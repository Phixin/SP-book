<?php
header('Access-Control-Allow-Origin: *');

$name = $_REQUEST['name'];
$mail = $_REQUEST['email'];

if($name != '' && $mail != ''){
  if($name == 'gio' && $mail == 'h@l.com'){
   $register = array('status'=>2, 'idUser'=>1);

  }	else {
	$register = array('status'=>1, 'idUser'=>5);
  }

}  else {
	$register = array('status'=>0, 'idUser'=>'');
}
echo json_encode($register);
?>