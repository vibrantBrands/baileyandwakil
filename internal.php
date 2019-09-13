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

<section class="internal_content">
		<?php
		  $a = new Area("Internal Content"); 
		  $a->display($c);
		?>
</section>

<section class="image-row">
    <div>
    	<img src='<?php echo $this->getThemePath() ?>/images/doctor1.png' />
    	<div class="info">
    		<h3>Doctor Name</h3>
	    	<p>MD. FACS</p>
	    	<i class="fas fa-plus-circle"></i>
    	</div>
    </div>
    <div>
    	<img src='<?php echo $this->getThemePath() ?>/images/doctor2.png' />
    	<div class="info">
    		<h3>Doctor Name</h3>
	    	<p>MD. FACS</p>
	    	<i class="fas fa-plus-circle"></i>
    	</div>
    </div>
    <div>
    	<img src='<?php echo $this->getThemePath() ?>/images/doctor3.png' />
    	<div class="info">
    		<h3>Doctor Name</h3>
	    	<p>MD. FACS</p>
	    	<i class="fas fa-plus-circle"></i>
    	</div>
    </div>
</section>

<?php require('elements/footer.php'); ?>
