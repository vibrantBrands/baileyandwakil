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
  </div>


  <section class="image-row doctor-pictures">
    <div>
      <img src='<?php echo $this->getThemePath() ?>/images/doctor1.png' />
      <div class="info">
        <h3>Thomas Bailey</h3>
        <p>MD. FACS</p>
        <i class="fas fa-plus-circle"></i>
      </div>
    </div>
    <div>
      <img src='<?php echo $this->getThemePath() ?>/images/aida_wakil_web.jpg' />
      <div class="info">
        <h3>Aida Walki</h3>
        <p>MD. FACS</p>
        <i class="fas fa-plus-circle"></i>
      </div>
    </div>
    <div>
      <img src='<?php echo $this->getThemePath() ?>/images/david_auringer_web.jpg' />
      <div class="info">
        <h3>David E. Auringer</h3>
        <p>MD</p>
        <i class="fas fa-plus-circle"></i>
      </div>
    </div>
</section>

<section class="drs-bios">
  <div class="dr-bio">
    <?php
      $a = new Area("Doctor Bio 1");
      $a->display();
      ?>
  </div>
  <div class="dr-bio">
    <?php
      $a = new Area("Doctor Bio 2");
      $a->display();
      ?>
  </div>
  <div class="dr-bio">
    <?php
      $a = new Area("Doctor Bio 3");
      $a->display();
      ?>
  </div>
</section>

</div>


<?php require('elements/footer.php'); ?>
