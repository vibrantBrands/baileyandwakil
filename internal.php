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

<?php require('elements/footer.php'); ?>
