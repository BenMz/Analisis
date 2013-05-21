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
      <p class="muted">
          <small>
              <em>Prefered colors:</em> <?php echo $project['colors'] ?><br />
              <em>Liked website:</em> <?php echo $project['liked_websites']?>
          </small>
      <p>
      </p>
    </div>
</section>
<aside class="span3">
    <dl>
        <dt>Company Name</dt>
        <dd><?php echo $project['company_name']?></dd>
        <dt>Website Name</dt>
        <dd><?php echo $project['website_name']?></dd>
        <dt>Website URL</dt>
        <dd><?php echo $project['website_url']?></dd>
    </dl>
</aside>
