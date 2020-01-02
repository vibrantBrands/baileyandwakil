<?php require('elements/header.php'); ?>
<div class="main-content">

  <section class="topHeading">
    <?php
      $a = new Area("Hero Slider");
      $a->display();
      ?>
      <div class="mobile-contact">
        <a href="tel:5184526003">Contact Us: (518) 452-6003</a>
      </div>
  </section>

  <section class="qualitySect">
    <?php
      $a = new Area("Top Quality Text");
      $a->display();
      ?>
    <div class="grid-container">
      <div class="grid-item">
        <a href="/our-specialties">
          <img src="<?php echo $this->getThemePath(); ?>/images/conditions.png" alt="Conditions">
        </a>
      </div>
      <div class="grid-item">
        <a href="/eye-surgery">
          <img src="<?php echo $this->getThemePath(); ?>/images/eye-surgery.png" alt="Eye Surgery">
        </a>
      </div>
      <div class="grid-item">
        <a href="/patient-forms">
          <img src="<?php echo $this->getThemePath(); ?>/images/patient-forms.png" alt="Patient Forms">
        </a>
      </div>
      <div class="grid-item">
        <a href="insurance">
          <img src="<?php echo $this->getThemePath(); ?>/images/insurance.png" alt="Insurance">
        </a>
      </div>
    </div>
    <!-- <div class="doctorImg">
      <img src="<?php echo $this->getThemePath(); ?>/images/doctor-stock.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/doctor-stock.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/doctor-stock.png" alt="">
    </div>  -->
  </section>

  <!-- THIS WILL NEED TO BE TURNED INTO A SLIDER -->
  <section class="dignitySect">
    <h2>dignity and competence</h2>
    <div class="testimonials">
          <?php
          $a = new Area("Testimonials");
          $a->display();
          ?>
    </div>
  </section>

  <!-- <section class="services">
    <h2>Our Services</h2>
    <div class="carousel">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="Lasik">
      <img src="<?php echo $this->getThemePath(); ?>/images/glaucoma_surgery.jpg" alt="Glaucoma Surgery">
      <img src="<?php echo $this->getThemePath(); ?>/images/lenses.png" alt="Intraocular Lenses">
      <img src="<?php echo $this->getThemePath(); ?>/images/cataract-surgery-slider.jpg" alt="Cataract Surgery">
    </div>
  </section> -->

<!-- end main content wrapper -->
</div>

<?php require('elements/footer.php'); ?>
