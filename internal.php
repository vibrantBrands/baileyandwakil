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
     <div class="header_image" style="background:url('<?php echo $this->getThemePath() ?>/images/placeholder.jpg');background-size:cover">
          </div>
           
       <?php endif; ?>

       <h1 class="page-title"><?php echo $title; ?></h1>
</section>


<section class="internal_content_wrapper">

  <div class="internal_content_container content">
    <?php
      $a = new Area("Internal Content"); 
      $a->display($c);
    ?>
  </div>
  
  <div class="sidebar_container">
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
</section>

<?php require('elements/footer.php'); ?>