<?php

include './conn.php';
$data = new Databases;


$s_id = $_POST['ID'];
$SEARCH_VAL = $_POST['SEARCH_VAL'];
$CAT_TYPE = $_POST['CAT_TYPE'];



if($CAT_TYPE=="GROOMS") {
    $data->grooms($s_id, $SEARCH_VAL);
}elseif($CAT_TYPE=="BRIDES") {
    $data->brides($s_id, $SEARCH_VAL);
}else{
    $data->r($s_id, $SEARCH_VAL);
}






?>