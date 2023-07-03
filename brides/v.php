<?php

include './link_page.php';
$data = new Databases; 






$currentURL = "http";
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
    $currentURL .= "s";
}
$currentURL .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($currentURL);

// Accessing individual components
$scheme = $parts['scheme'];
$host = $parts['host'];
$path = $parts['path'];
$arr_path=explode('/',$path);


if (empty($arr_path[4])) {
//  exit();
} else {
  $slug=$arr_path[4];
}




$title=''; 
$des=''; 
$tel1=''; 
$tel2=''; 
$address=''; 
$email=''; 
$name=''; 
$gender=''; 
$tag=''; 


$all='';



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

$arr = explode("#", $tag);

				foreach ($arr as $key => $val) {
					if ($key == 0) {

					} else {
						$all .= "<code><a href=''>#$val </a></code>";
					}


				}


header_page();

?>
<br>
<div class="container-fluid">
<br>
<div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-8 ">
    <div class="container p-5 my-5  view-page">
      <h2><?php echo $title?>  <?php echo $tel1?> </h2>
      <br>
      <hr>
      <h5><?php echo $des ?></h5>
      <br>
      <hr>
      <h5> Name  :  <?php echo $name?> </h5>
      <h5> Gender : <?php echo $gender?> </h5>
      <h5> Tel    :     <?php echo $tel1?> | <?php echo $tel2?> </h5>
      <h5> email : <?php echo $email?> </h5>
      <h5> Adderss : <?php echo $address?>  
       <h6><?php echo $date?></h6>
       <br>
      <div><?php echo $all?></div>
      
    </div>

     <center> <a href="index.php" style="text-decoration: none;"><button id="view_more_btn" class="btn btn- btn-block cus-btn" > View All Book , Note ,Past Paper </button></a></center>

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
<?PHP
footerLink();
?>


