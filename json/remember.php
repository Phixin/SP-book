<?php
header('Access-Control-Allow-Origin: *');

$mail = $_REQUEST['email'];

if($mail == 'info@houselab.com'){
  $remenber = 1;
} else {
  $remenber = 0;	
}
echo json_encode($remenber);
?>