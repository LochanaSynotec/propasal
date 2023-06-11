<?php
include './conn.php';
include './fun.php';
$data = new Databases;  
$success_message = '';  




$_24TIME=date("YmdHis");

 $title=mysqli_real_escape_string($data->conn, $_POST['title']) ;
 $gender=mysqli_real_escape_string($data->conn, $_POST['gender']) ;
 $tel1=mysqli_real_escape_string($data->conn, $_POST['tel1']) ;
 $tel2=mysqli_real_escape_string($data->conn, $_POST['tel2']) ;
 $email=mysqli_real_escape_string($data->conn, $_POST['email']) ;
 $address=mysqli_real_escape_string($data->conn, $_POST['address']) ;
 $name=mysqli_real_escape_string($data->conn, $_POST['name']) ;
 $des=mysqli_real_escape_string($data->conn, $_POST['desc']) ;
 
 $tag=mysqli_real_escape_string($data->conn, $_POST['tag']) ;
//  $TAG= $TITLE." ".$NAME." ".$NOTE." ".$SUB_NAME." ".$TAG2;



 
       

       



      $insert_data = array( 
           'title'         =>    $title, 
           'gender'        =>    $gender, 
           'tel1'          =>    $tel1, 
           'tel2'          =>    $tel2, 
           'email'         =>    $email, 
           'address'       =>    $address, 
           'name'          =>    $name,
           'des'          =>    $des,
           'tag'           =>    $tag,
           'date'          =>   $_DATE,
           'time'          =>   $_TIME,
           
           
      );  
      if($i=$data->insert('ad', $insert_data));
      {
           $success_message = 'Post Inserted'; 

      


       



      } 





             


echo $success_message ;

?>