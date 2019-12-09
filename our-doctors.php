<?php require('elements/header.php'); ?>

<section class="internal_heading">
	 <?php
       $page = Page::getCurrentPage();
       $title = $page->getCollectionName();
           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>

       <div class="header_image" style="background:url('<?php echo $image_src; ?>');background-size:cover">
          </div>
           
           
       <?php else: ?>
		 <div class="header_image" style="background:url('<?php echo $this->getThemePath() ?>/images/doctors-header.png');background-size:cover">
          </div>
           
       <?php endif; ?>

       <h1 class="page-title"><?php echo $title; ?></h1>
</section>

<div class="drs-bg">
  <div class="container">
      <p>
        For more than three decades, individuals throughout Albany and surrounding New York areas have trusted our eye care center for their vision needs. Visit Bailey, Wakil & Auringer Eye Physicians & Surgeons PLLC for the best in cutting-edge procedures and personalized care.
      </p>
      <?php
      $a = new Area("Doctor Bios");
      $a->display();
      ?>
  </div>

</div>


<?php require('elements/footer.php'); ?>
