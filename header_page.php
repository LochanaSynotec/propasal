<?php
function header_page()
{
global $com;





  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title><?PHP echo $com['name'];?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="<?PHP echo base_url();?>/cus.css" rel="stylesheet">
    <script src="<?PHP echo base_url();?>/fun.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

  </head>


  <div class="container-fluid p-5 bg- text-black text-center">
  <a  href="<?PHP echo  route(" ") ?>" > <h1  class='h1-txt'><?PHP echo $com['name'];?></h1></a>
  <h5 style="color:white"> You can Search and Upload Book |  Exam Past Paper | Note | Projrect | Education Details </h5> 
</div>


  <nav class="navbar navbar-expand-sm  navbar-dark" style="background-color: var(--back-color);">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?PHP echo  route(" ") ?>">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?PHP echo  route(" ") ?>">All Ads</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?PHP echo  route("reg") ?>">Post Ad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  

<body>
    
    <?php
}


?>