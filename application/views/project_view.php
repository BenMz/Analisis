<?php
    $status = "";
    switch($project['status']){
        case 0 : $status = "Pending"; break;
        case 1 : $status = "Rejected"; break;
        case 2 : $status = "Accepted"; break;
    }
                ?>
<section class="span9">
    <div class="hero-unit">
      <h2><?php echo $project['name']?> <em class="muted">[<?php echo $status ?>]</em></h2>
      <p><?php echo $project['description'] ?></p>
      <p>
        <a class="btn btn-primary btn-large">
            Sign Up
        </a>
      </p>
    </div>
    
</section>
