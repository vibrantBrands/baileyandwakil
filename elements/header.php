<!DOCTYPE html>
<html>
<head>
	    <?php
		$this->inc('app/page_settings.php');
		$po = new PageOptions();

	?>
	  <title>Bailey & Wakil | Eyecare </title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  			
				<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/style.css">

	  <script src="https://kit.fontawesome.com/ecc1038b3a.js"></script>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	  <!-- SLICK SLIDER CDN -->
	  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

	  <?php Loader::element('header_required'); ?> <!-- must be last in load order -->


</head>
	<div class="<?php echo $c->getPageWrapperClass(); ?>"> <!-- sets C5 body class -->
	<body class="<?php if ($po->isHome()) { echo "home_wrapper"; } else {echo "internal_wrapper"; }  ?>">

		<header>
			<div class="logo">
				<a href="/">
					<img src="<?php echo $this->getThemePath(); ?>/images/logo.png" alt="logo">
				</a>
			</div>

			<!-- moble menu --> 
			<div class="toggle-wrapper">
		        <div class="menu-toggle inactive">
		          <div class="bar"></div>
		          <div class="bar"></div>
		          <div class="bar"></div>
		          <span class="bg"></span>
		        </div>
		     </div>

		     <!-- navigation --> 
			<div class="main-menu">
				<div class="top-ctas">
					<a href="tel:5184526002" class="phone"><i class="fa fa-phone"></i>(518) 452-6002</a>
					<a href="/contact-us"><button class="yellow">Contact Us</button></a>
				</div>
				
				<?php
		          $bt = BlockType::getByHandle('autonav');
		          $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
		          $bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
		          $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
		          $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'          
		          $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
		          $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
		          $bt->controller->outputAutoHeaderItems();
		          $bt->render('templates/internal_sidebar'); // for template 'templates/template_name';
		        ?>

			</div>
			
		</header>

		<!-- PLEASE REMOVE THIS SECTION BEFORE LAUNCH -- Just placeholder for some useful C5 elements
		--------------
		<?php
			$a = new Area("Some Name");
			$a->display();
	    ?>
	    -----------
	    
	    -----------
		<?php
			$a = new GlobalArea("Some Name");
			$a->display();
	    ?>
	    -----------

		--------NOTE THAT YOU MUST USE echo $this->getThemePath(); ?> FOR ALL ELEMENTS IN THEME IMAGES/JS/CSS etc. ------
	    <img class="logo" alt="Center for Disability Services Logo" src="<?php echo $this->getThemePath(); ?>/images/cfds-logo-full-color-rgb.jpg"> 
	    -------------

		--------FOR IF YOU ARE USING c5 BUILT IN SLIDESHOW FOR HOMEPAGE SLIDE-----------
	    <?php
		  $a = new Area("Some name");
		  $blocks = $a->getTotalBlocksInArea($c);

		  if ($blocks == 0 && !$c->isEditMode()) { echo "<img src=".$this->getThemePath().".defaultImage.jpg>"; } // Default Header
		  else { $a->display($c); } // Custom header
		?>
		-->