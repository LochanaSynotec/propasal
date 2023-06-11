<?php

if (empty($_GET['PP_ID'])) {
  exit();
} else {
 $ID=$_GET['PP_ID'];
}


include './link_page.php';
$data = new Databases; 

$TITLE=''; 
$SUB_NAME=''; 
$NOTE=''; 
$TAG2=''; 
$DATE=''; 
$TIME=''; 
$NAME=''; 






$sql="SELECT * FROM book WHERE ID=$ID";
$exam_data = $data->select($sql); 

foreach($exam_data as $row)  
{  
                         
$TITLE=$row["TITLE"]; 
$SUB_NAME=$row["SUB_NAME"]; 
$NOTE=$row["NOTE"]; 
$TAG2=$row["TAG2"]; 
$DATE=$row["DATE"]; 
$TIME=$row["TIME"]; 
$NAME=$row["NAME"]; 

}  

$TITLE=nl2br($TITLE);
$SUB_NAME=nl2br($SUB_NAME);
$NOTE=nl2br($NOTE);
$TAG2=nl2br($TAG2);
$NAME=nl2br($NAME);

$sql="SELECT * FROM path WHERE EXAM_ID=$ID";
$path_data = $data->select($sql); 



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
      <h2><?php echo $TITLE?></h2>
      <h2>
      <?php
        $count=0;
        foreach($path_data as $row)  
        {  
                                 
          $URL=$row["URL"];
          $count=$count+1; 
        ?>
         <?php echo $count?>.<a href="<?php echo $URL?>" target="_blank">Please Click to View  Note or Pastpaper or Book {<span style="font-size:20px"> <?php echo $TITLE?></span>}</a><br>

        <?php
        }  

      ?>
      </h2>
      <br>
      <h5><?php echo $SUB_NAME?></h5>
      <h5><?php echo $NOTE ?></h5>
      <h5><?php echo $TAG2?></h5>
      <h5> Publisher - <?php echo $NAME?>  | <?php echo $DATE?></h5>
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


