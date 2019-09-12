<?php require('elements/header.php'); ?>
<div class="main-content">

  <section class="topHeading">

    <h1>The capital</br> region's leader</br> in eye care</h1>
    <h3 class="tagline">Celebrating over 30 years.</h3>
    <a href="#">
      <button>Learn More</button>
    </a>
  </section>

  <section class="qualitySect">
    <?php
      $a = new Area("Top Quality Text");
      $a->display();
      ?>
    <div class="grid-container">
      <div class="grid-item">
        <img src="<?php echo $this->getThemePath(); ?>/images/eye-care.png" alt="">
      </div>
      <div class="grid-item">
        <img src="<?php echo $this->getThemePath(); ?>/images/conditions.png" alt="">
      </div>
      <div class="grid-item">
        <img src="<?php echo $this->getThemePath(); ?>/images/cataract.png" alt="">
      </div>
      <div class="grid-item">
        <img src="<?php echo $this->getThemePath(); ?>/images/patient-forms.png" alt="">
      </div>
      <div class="grid-item">
        <img src="<?php echo $this->getThemePath(); ?>/images/schedule-icon.png" alt="">
      </div>
      <div class="grid-item">
        <img src="<?php echo $this->getThemePath(); ?>/images/insurance.png" alt="">
      </div>
    </div>
    <div class="doctorImg">
      <img src="<?php echo $this->getThemePath(); ?>/images/doctor3.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/doctor3.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/doctor3.png" alt="">
    </div>
  </section>

  <!-- THIS WILL NEED TO BE TURNED INTO A SLIDER -->
  <section class="dignitySect">
    <h2>dignity and competence</h2>
    <div class="testimonials">
      <div>
        <p>In addition to being an extremely competent doctor with excellent credentials, Dr. Wakil is also a kind human being who speaks directly to my elderly mother jduring her appointments. This is refreshing! Many physicians speak and look directly at a family memberm and not the patient, and this is demeaning. My mother, although frail, has her faculties and it is wonderful to see her treated with dignity.</p>
      </div>

      <div>
        <p>Bacon ipsum dolor amet capicola salami hamburger ribeye short ribs, in boudin jowl anim et. Ea hamburger buffalo exercitation. Sunt ullamco magna dolor jerky boudin flank excepteur pork belly est ad qui duis porchetta. Ad proident burgdoggen aliquip. Beef cupim burgdoggen meatloaf, consectetur commodo tenderloin flank exercitation prosciutto ut.
        </p>
      </div>

      <div>
        <p>this is another testimonial</p>
      </div>

      <div>
        <p>And another one</p>
      </div>

      <div>
        <p>Bacon ipsum dolor amet capicola salami hamburger ribeye short ribs, in boudin jowl anim et. Ea hamburger buffalo exercitation. Sunt ullamco magna dolor jerky boudin flank excepteur pork belly est ad qui duis porchetta. Ad proident burgdoggen aliquip. Beef cupim burgdoggen meatloaf, consectetur commodo tenderloin flank exercitation prosciutto ut.</p>
      </div>
    </div>
  </section>

  <section class="services">
    <h2>Our Services</h2>
    <div class="carousel">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
    </div>
  </section>

<!-- end main content wrapper -->
</div>

<?php require('elements/footer.php'); ?>
