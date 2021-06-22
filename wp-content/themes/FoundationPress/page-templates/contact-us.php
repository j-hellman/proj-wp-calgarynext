<?php
/*
Template Name: Contact Us Page
*/

get_header(); ?>

<body id="contactMenu">

<div class="c-wrapper">
  <div class="contact-container">
    <h2 class="contact-brand">CONTACT US</h2>
    <div class="contact-wrapper">
      
      <div class="company-info">
        <h3>Calgary Next</h3>
        <!-- Icons -->
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> 111 7 Ave SW Calgary, AB</li>
          <li><i class="fas fa-phone-alt"></i> 123 123 1234</li>
          <li><i class="fas fa-envelope"></i> inquiry@calgarynext.com</li>
        </ul>
        <div class="contact-form-title">
          <h3>Send Us Your News!</h3>
        </div>
        <!-- THE ACTUAL FORM, edit this in Gravity Forms Plugin -->
        <?php echo do_shortcode('[gravityform id="3"]'); ?>
      </div>
      
    </div>
  </div>
</div>


<?php get_footer(); ?>
