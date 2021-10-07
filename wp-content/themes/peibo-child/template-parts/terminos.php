<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */
/* Template Name: terminos */
get_header();
?>

<div class="container-fluid page-privacidad  mt-5 pt-5">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class=" maskLegalesMiddle"></div>
    <section class="container">
      <div class=" maskTerminos"></div>

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
