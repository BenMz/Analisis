<!DOCTYPE html>
<html>
  <head>
    <title>Audentio Design Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php  echo base_url('/public/css/bootstrap.min.css')?>" type="text/css" media="screen" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php  echo base_url('public/css/bootstrap-responsive.css')?>" rel="stylesheet">
  </head>
  <body>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="#">Audentio Dashboard</a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse">
              <!-- .nav, .navbar-search, .navbar-form, etc -->
                <ul class="nav">
                <li class="active">
                  <a href="#">Home</a>
                </li>
                <li><a href="#">My Proyects</a></li>
                <li><a href="#">New Proyect</a></li>
            </ul>
              <form class="navbar-search pull-right">
                <input type="text" class="search-query" placeholder="Search">
              </form>
            </div>

          </div>
        </div>
      </div>
      
      <div class="container-fluid">
          <!--End: Header -->
          <!--Start: Body -->
           <div class="row-fluid">
               <div class="span2">
                 <!--Sidebar content-->
               </div>
               <div class="span10">
                 <h1>Hello, world!</h1>
               </div>
             </div>
          <!--End: Body -->
          <!--Start: Footer -->
        </div>
   
       
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php  echo base_url('/public/js/bootstrap.min.js')?>"></script>
  </body>
</html>
        <!--End: Footer -->