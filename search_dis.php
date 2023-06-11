<?php

include './conn.php';
$data = new Databases;  


$s_id=$_POST['ID'];
$SEARCH_VAL=$_POST['SEARCH_VAL'];

$data->r($s_id,$SEARCH_VAL);




?>


