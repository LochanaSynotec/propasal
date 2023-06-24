<?php
include './link_page.php';


header_page();


?>


<br>
<div class="container-fluid">
  <form id="form_submit" action="reg_scr.php">
    <div class="row">
    <div class="col-sm-3"></div>
      <div class="col-sm-6">

        <div class="card reg">
          <div class="card-body">

            <div class="form-group">
              <label for="email">Title <sup style="color:red ">*</sup>:</label>
              <input type="text" class="form-control" name="title" required>
            </div><br>

            <div class="form-group">
              <label for="email">Your Name<sup style="color:red ">*</sup>:</label>
              <input type="text" class="form-control" name="name" required>
            </div><br>

            <div class="form-group">
              <label for="email">Gender<sup style="color:red ">*</sup>:</label>
              <select class="form-control" name='gender'>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
              </select>
            </div><br>

            <div class="form-group">
              <label for="email">Tel 1<sup style="color:red ">*</sup>:</label>
              <input type="text" class="form-control" name="tel1" required>
            </div><br>
            <div class="form-group">
              <label for="email">Tel 2<sup style="color:red ">*</sup>:</label>
              <input type="text" class="form-control" name="tel2" required>
            </div><br>
            <div class="form-group">
              <label for="email">Email<sup style="color:red ">*</sup>:</label>
              <input type="text" class="form-control" name="email" required>
            </div><br>
            <div class="form-group">
              <label for="email">Address<sup style="color:red ">*</sup>:</label>
              <input type="text" class="form-control" name="address" required>
            </div><br>
            <div class="form-group">
              <label for="email">Description<sup style="color:red ">*</sup>:</label>
              <textarea class="form-control" rows="6" name="des" required></textarea>
            </div><br>

            <div class="form-group">
              <label for="email">Tag (Key is searching )<sup style="color:red ">*</sup>:</label>
              <textarea class="form-control" rows="6" name="tag" placeholder="2002  EnglishPastpaper  ABCCampus"
                required></textarea>
            </div><br>
            <div class="d-grid">
              <button type="submit" class="btn btn- btn-block cus-btn">Save</button>
            </div>

          </div>
        </div>

      </div>
      <div class="col-sm-3"></div>
    </div>
</div>

</div>
</div>
</form>
</div>
<br>

<?php
footer_page();

?>
</body>

</html>