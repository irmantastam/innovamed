<?php
  /*
  Template Name: Front Page
  */
?>

<?php get_header(); ?>

<main class="main main--front-page front-page">

  <section class="inner">

    <?php include get_template_directory() . '/acf-templates/hero-image.php'; ?>
    <?php include get_template_directory() . '/acf-templates/greeting.php'; ?>

    <?php if (have_posts()) : the_post(); ?>
      <div class="content">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>

  </section>

</main>

<?php get_footer(); ?>
