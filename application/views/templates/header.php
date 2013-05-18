<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title?></title>
    <?php
        $this->load->helper('url');
        $this->load->helper('array');
    ?>
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
            <a class="brand" href="<?php echo base_url() ?>">Audentio Dashboard</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    
                    <?php foreach ($nav_items as $litem): ?>
                        <?php 
                            //Estandarizamos los parámetros del link
                            $item = elements(array('active', 'link', 'name'), $litem);
                        ?>
                    <li <?php echo ($item['active']== True) ? "class='active'" : "" ?>>
                        
                        <a href="<?php echo $item['link']?>">
                            <?php echo $item['name'];?>
                        </a>
                    </li>
                    <?php endforeach;?>
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