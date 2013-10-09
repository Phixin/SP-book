<?php
header('Access-Control-Allow-Origin: *');

$user = $_REQUEST['u'];
$pass = $_REQUEST['p'];

if($user == "hlab" && $pass == "gio"){
  $json = array('status'=>1, 'idUser'=>'hlab', 'firstTime'=>'true');
  echo json_encode($json);
} else {
  $json = array('status'=>0, 'idUser'=>'', 'firstTime'=>'false');
  echo json_encode($json);
}
?>
