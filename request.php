<?php
include './link_page.php';
header_page();


?>

<div class="container-fluid p-5 bg- text-black text-center" style="background-color:#badc58">
  <h1 style="color:white">BookFair.ml</h1>
  <h5 style="color:black"> Online Library | Request you book , note , pastpaper </h5> 
</div>
<br>
<div class="container-fluid">
<form id="form_request" action="request_scr.php">
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">

     <div class="card">
      <div class="card-body">

		<div class="form-group">
      <label for="email">Your Name<sup style="color:red ">*</sup>:</label>
      <input type="text" class="form-control" name="NAME" required>
		</div><br>

    <div class="form-group">
      <label for="email">Your Email:</label>
      <input type="email" class="form-control" name="EMAIL" >
    </div><br>

		<div class="form-group">
      <label for="email">Request Book | Note | Past Paper Name (Write Note)<sup style="color:red ">*</sup>:</label>
      <textarea class="form-control" rows="6" name="NOTE" required placeholder="I want ABC campus exam past paper"></textarea>
		</div><br>
      
      <div class="d-grid">
        <button type="submit" class="btn btn- btn-block" style="background-color:#badc58";>Submit</button>
      </div>

      </div>
    </div>

  </div>
  <div class="col-sm-3"></div>
</div>
</form>
</div>
<br>

<?php
footer_page();

?>
</body>
</html>

<script type="text/javascript">
  
$(function () {
  
        $("#form_request").submit('click', function (event) {
        // alert('t');
        var submit_url=$('#form_request').attr('action')


         Swal.fire({
                icon: 'info',
                title: 'Please Wait ! ',
                text: 'Please Wait !',
                footer: ''
              }) 

        event.preventDefault();
          var data = new FormData(this)
          $.ajax({
            type: 'POST',
            url:submit_url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
            //alert(data);

            Swal.fire({
                icon: 'success',
                title: 'success ! ',
                text: 'THAN YOU !',
                footer: ''
              }) 
          
         }    
       });
   });
});


</script>