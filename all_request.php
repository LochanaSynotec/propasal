<?php
include './link_page.php';
$data = new Databases; 
$dis='';
$sql="SELECT * FROM `request` ORDER BY ID DESC";
$post_data = $data->select($sql); 

foreach($post_data as $post)  
{  
                         
$NAME=$post["NAME"]; 
$NOTE=$post["NOTE"]; 

$dis.= "<div class='card'>
                  <div class='card-body'>
                    <h4 class='card-title'>$NOTE</h4>
                    <p class='card-text'> $NAME </p>
                  </div>
                </div>    
                <br>   ";

                          
}  

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
        <a href="request.php" style="text-decoration: none;">
          <div class="d-grid">
            <button type="button" class="btn btn- btn-block" style="background-color:#badc58;">Add your request (book ,  note , past paper)  + </button>
          </div>
        </a>
  </div>
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-2">
   <!--   col 2   !-->
  </div>
  <div class="col-sm-8">
   <?php echo $dis;?>
  </div>
  <div class="col-sm-2">
    <!--   col 2   !-->
  </div>
</div>

</div>
<br>
<?php
footer_page();
?>
</body>
</html>
