<?php

include '../link_page.php';
$data = new Databases;
header_page();

?>

<br>
<div class="container-fluid">

  <br>
  <div class="row">
    <div class="col-sm-2">
      <!--   col 2   !-->
    </div>
    <div class="col-sm-8">
      <div class="input-group mb-3">

        <input type="text" class="form-control search-input" id="search_text" onkeyup="search()" placeholder="Search">
      </div>


      <div id="www"></div>
      <center><button id="view_more_btn" class="btn btn- btn-block" style="background-color:#badc58" onclick="t()"> View
          More </button></center>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">

  var s_id = 0;


  function t() {
    // alert('data.sql');
    var SEARCH_VAL = $("#search_text").val();

    $.ajax({
      type: 'POST',
      url: '../search_dis.php',
      data: { ID: s_id, SEARCH_VAL: SEARCH_VAL,CAT_TYPE:'BRIDES' },
      dataType: "json",
      success: function (data) {
        var dli = parseInt(data.last_id);
        s_id = dli;
        //alert(s_id);
        $('#www').append(data.dis_i);
        if ('YES' != data.view_btn) {
          $('#view_more_btn').hide();
        }

      }
    });

  }

  t();

  function search() {
    s_id = 0;
    var SEARCH_VAL = $("#search_text").val();

    $.ajax({
      type: 'POST',
      url: 'search_dis.php',
      data: { ID: 0, SEARCH_VAL: SEARCH_VAL,CAT_TYPE:'BRIDES' },
      dataType: "json",
      success: function (data) {
        //alert(data.SEARCH_VAL);
        var dli = parseInt(data.last_id);
        s_id = dli;
        //alert(data.last_id);
        $('#www').empty();
        $('#www').append(data.dis_i);
        if ('YES' != data.view_btn) {
          $('#view_more_btn').hide();
        } else {
          $('#view_more_btn').show();
        }

      }
    });

  }



</script>