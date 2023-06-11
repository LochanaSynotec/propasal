<?php
include './conn.php';
include './fun.php';
$data = new Databases;  
$success_message = 'error';  


 $NOTE=mysqli_real_escape_string($data->conn, $_POST['NOTE']) ;
 $NAME=mysqli_real_escape_string($data->conn, $_POST['NAME']) ;
 $EMAIL=mysqli_real_escape_string($data->conn, $_POST['EMAIL']) ;
 






      $insert_data = array( 
        
           'NOTE'          =>    $NOTE, 
           'NAME'          =>    $NAME,
           'EMAIL'           =>   $EMAIL,
           'DATE'           =>   $_DATE,
           'TIME'           =>   $_TIME,
           
           
      );  
      if($i=$data->insert('request', $insert_data)){

        $success_message="inser";

      }
     


             


echo $success_message ;

?>