<?php
function header_page()
{
  
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>BookFair.ml</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="cus.css" rel="stylesheet">


    <script src="fun.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

  </head>

  <body>
    <a href="album"></a>
    <nav class="navbar navbar-expand-sm navbar-dark bg" style="background-color:#badc58">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo  route(''); ?>"> <i> 11BookFair.ml11 |</i> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link " href="<?php echo route(''); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php echo  route('reg'); ?>">Post AD</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="<?php echo route('t'); ?>">rr</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?php echo route('t'); ?>">rr</a>
            </li>
          </ul>
        </div>

      </div>
      </div>
    </nav>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176749610-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'UA-176749610-1');
    </script>



    <?php
}


?>