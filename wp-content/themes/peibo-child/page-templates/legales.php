<?php
/*
* Template Name: Legales
* @package Peibo_Child
*/
get_header();
?>

<div class="container-fluid page-privacidad  mt-5 pt-5">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class=" maskLegalesMiddle "></div>
    <section class="container">
      <div class=" maskLegales animateHorizontalDos"></div>

      <div class="row d-flex justify-content-center customPadding">
        <div class="col-sm-10">
          
          <div class="row mt-5 mb-5">
            <h1><?php the_title(); ?></h1>

          </div>
          <div class="row pb-5 col-md-12 contentInformativaText">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
      <br>
    </section>
  </div>

  <div class=" maskLegalesBottom"></div>

<?php
get_footer();
