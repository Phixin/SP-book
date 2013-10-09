<?php
header('Access-Control-Allow-Origin: *');

$category = $_REQUEST['c'];
$page = $_REQUEST['p'];


if($category == 'infantil'){
    
    $cat[$category][1][]= array(
        "title"=>"test1.1",
        "numBooks"=>"10",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][1][]= array(
        "title"=>"test1.2",
        "numBooks"=>"10",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][1][]= array(
        "title"=>"test1.3",
        "numBooks"=>"10",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][2][]= array(
        "title"=>"test2.1",
        "numBooks"=>"20",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][2][]= array(
        "title"=>"test2.2",
        "numBooks"=>"20",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][2][]= array(
        "title"=>"test2.3",
        "numBooks"=>"20",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][3][]= array(
        "title"=>"test3.1",
        "numBooks"=>"30",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][3][]= array(
        "title"=>"test3.1",
        "numBooks"=>"30",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );
    $cat[$category][3][]= array(
        "title"=>"test3.1",
        "numBooks"=>"30",
        "idBook"=>"123456",
        "img"=>"books/cover.jpg"
    );

}

echo json_encode($cat[$category][$page]);

?>