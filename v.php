<?php

if (empty($_GET['slug'])) {
  exit();
} else {
 $slug=$_GET['slug'];
}


include './link_page.php';
$data = new Databases; 

$title=''; 
$des=''; 
$tel1=''; 
$tel2=''; 
$address=''; 
$email=''; 
$name=''; 
$gender=''; 
$tag=''; 






$sql="SELECT * FROM ad WHERE slug='$slug'";
$exam_data = $data->select($sql); 

foreach($exam_data as $row)  
{  
                         
$title=$row["title"]; 
$des=$row["des"]; 
$tel1=$row["tel1"]; 
$tel2=$row["tel2"]; 
$address=$row["address"]; 
$email=$row["email"]; 
$name=$row["name"]; 
$gender=$row["gender"]; 
$tag=$row["tag"]; 
$time=$row["time"]; 
$date=$row["date"]; 

}  

$title=nl2br($title);
$des=nl2br($des);
$tel1=nl2br($tel1);
$tel2=nl2br($tel2);
$address=nl2br($address);
$email=nl2br($email);
$name=nl2br($name);
$gender=nl2br($gender);
$tag=nl2br($tag);
$tatimeg=nl2br($time);
$date=nl2br($date);


header_page();

?>


<div class="container-fluid p-5 bg- text-black text-center" style="background-color:#badc58;">
  <h1 style="color:white">Book Fair.ML</h1>
  <h5 style="color:black"> Online Library </h5> 
  <h5 style="color:white"> You can Search and Upload Book |  Exam Past Paper | Note | Projrect | Education Details </h5> 
</div>
<br>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-4">
        <a href="reg.php" style="text-decoration: none;">
          <div class="d-grid">
            <button type="button" class="btn btn- btn-block" style="background-color:#badc58;">Upload Book |Note | Past Paper  </button>
          </div>
        </a>
  </div>
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
        <a href="all_request.php" style="text-decoration: none;">
          <div class="d-grid">
            <button type="button" class="btn btn- btn-block" style="background-color:#badc58;">Request Book | Note & Past Paper</button>
          </div>
        </a>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8">
    <div class="container p-5 my-5 border">
      <h2><?php echo $title?></h2>
      
      <br>
      <h5><?php echo $gender?></h5>
      <h5><?php echo $des ?></h5>
      <h5> Name - <?php echo $name?> </h5>
      <h5> Tel - <?php echo $tel1?> | <?php echo $tel2?> </h5>
      <h5> email - <?php echo $email?> </h5>
      <h5> Adderss - <?php echo $address?>  
       <h6><?php echo $date?></h6>
      <h5><?php echo $tag?></h5>
      
    </div>

     <center> <a href="index.php" style="text-decoration: none;"><button id="view_more_btn" class="btn btn- btn-block" style="background-color:#badc58"> View All Book , Note ,Past Paper </button></a></center>

  </div>
  <div class="col-sm-2"> </div>
</div>

</div>
<br>
<?php
footer_page();
?>
</body>
</html>


