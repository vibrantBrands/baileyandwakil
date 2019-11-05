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
        <a href="/eye-care">
          <img src="<?php echo $this->getThemePath(); ?>/images/eye-care.png" alt="Eye Care">
        </a>
      </div>
      <div class="grid-item">
        <a href="/conditions">
          <img src="<?php echo $this->getThemePath(); ?>/images/conditions.png" alt="Conditions">
        </a>
      </div>
      <div class="grid-item">
        <a href="/cataract-surgery">
          <img src="<?php echo $this->getThemePath(); ?>/images/cataract.png" alt="Cataract Surgery">
        </a>
      </div>
      <div class="grid-item">
        <a href="/patient-forms">
          <img src="<?php echo $this->getThemePath(); ?>/images/patient-forms.png" alt="Patient Forms">
        </a>
      </div>
      <div class="grid-item">
        <a href="/appointments">
          <img src="<?php echo $this->getThemePath(); ?>/images/schedule-icon.png" alt="Appointments">
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
      <div>
        <p>In addition to being an extremely competent doctor with excellent credentials, Dr. Wakil is also a kind human being who speaks directly to my elderly mother jduring her appointments. This is refreshing! Many physicians speak and look directly at a family memberm and not the patient, and this is demeaning. My mother, although frail, has her faculties and it is wonderful to see her treated with dignity.</p>
      </div>

      <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non odio quis felis lacinia viverra. Donec vestibulum augue elit, ac consectetur metus elementum vel. Mauris molestie elit augue, id efficitur enim ultricies vitae. Curabitur at egestas ex. Donec volutpat pellentesque est, ultricies ornare risus efficitur non.
        </p>
      </div>

      <div>
        <p>Donec ac dictum est. Aenean sed dui finibus, sollicitudin ipsum vitae, vulputate neque. Ut feugiat, orci non iaculis cursus, sem libero scelerisque augue, in fringilla quam erat sollicitudin erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tellus ante, consequat sit amet aliquet vitae, pulvinar eu sapien.</p>
      </div>

      <div>
        <p>Mauris commodo libero at pharetra laoreet. Etiam aliquet, velit sed eleifend lobortis, lectus diam pharetra dolor, non rutrum odio ipsum et massa. </p>
      </div>

      <div>
        <p>Sed maximus est eget ipsum condimentum ultrices. Sed ut lacinia sapien. Integer molestie ultricies tellus non iaculis.</p>
      </div>
    </div>
  </section>

  <section class="services">
    <h2>Our Services</h2>
    <div class="carousel">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="Lasik">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lenses.png" alt="Intraocular Lenses">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
      <img src="<?php echo $this->getThemePath(); ?>/images/lasik.png" alt="">
    </div>
  </section>

<!-- end main content wrapper -->
</div>

<?php require('elements/footer.php'); ?>
