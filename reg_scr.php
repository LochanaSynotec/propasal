<?php
include './conn.php';
include './fun.php';
$data = new Databases;  
$success_message = '';  


$last_id=0;
$sql="SELECT * FROM ad ORDER BY id DESC LIMIT 1";
$exam_data = $data->select($sql); 

foreach($exam_data as $row)  
{                          
$last_id=$row["id"]; 
}  
$last_id=$last_id+1;
$_24TIME=date("Ymd");

$slug_code=$_24TIME."".$last_id;

 $title=mysqli_real_escape_string($data->conn, $_POST['title']) ;
 $gender=mysqli_real_escape_string($data->conn, $_POST['gender']) ;
 $tel1=mysqli_real_escape_string($data->conn, $_POST['tel1']) ;
 $tel2=mysqli_real_escape_string($data->conn, $_POST['tel2']) ;
 $email=mysqli_real_escape_string($data->conn, $_POST['email']) ;
 $address=mysqli_real_escape_string($data->conn, $_POST['address']) ;
 $name=mysqli_real_escape_string($data->conn, $_POST['name']) ;
 $des=mysqli_real_escape_string($data->conn, $_POST['des']) ;
 
 
 $tag=mysqli_real_escape_string($data->conn, $_POST['tag']) ;
 $all_tag= $title." ".$gender." ".$tel1." ".$tel2." ".$email." ".$address." ".$name." ".$des." ".$tag;


 $slug=createSlug($title);
 $slug=$slug."@".$slug_code;
       

       



      $insert_data = array( 
           'title'         =>    $title, 
           'slug'         =>     $slug, 
           'gender'        =>    $gender, 
           'tel1'          =>    $tel1, 
           'tel2'          =>    $tel2, 
           'email'         =>    $email, 
           'address'       =>    $address, 
           'name'          =>    $name,
           'des'          =>     $des,
           'tag'           =>    $tag,
           'all_tag'      =>     $all_tag,
           'date'          =>   $_DATE,
           'time'          =>   $_TIME,
           
           
      );  
      if($i=$data->insert('ad', $insert_data));
      {
           $success_message = 'Post Inserted'; 

      


       



      } 





             


echo $success_message ;

?>