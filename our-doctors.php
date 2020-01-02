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
       <div class="mobile-contact">
          <a href="tel:5184526003">Contact Us: (518) 452-6003</a>
      </div>
</section>

<div class="drs-bg">
  <div class="container">
      <?php
        $a = new Area("Center Text");
        $a->display();
      ?>
      <?php
      $a = new Area("Doctor Bios");
      $a->display();
      ?>
  </div>

</div>


<?php require('elements/footer.php'); ?>
