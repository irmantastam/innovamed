<?php
  // ACF template: Hero Image.

  // Template variables:
  if ( function_exists( 'get_field' ) ) :
    $heroImage = get_field('hero_image');
    $heroVideo = get_field('hero_video');
    $heroText = get_field('hero_text');
    $heroQuotes = get_field('hero_quotes');
  endif;
?>

<?php if ($heroImage || $heroVideo || $heroText || $heroQuotes): ?>
  <div class="hero-image">

    <?php if ($heroImage || $heroVideo): ?>
      <?php if ($heroImage): ?>
        <img
          class="hero-image__image"
          src="<?php echo $heroImage; ?>"
          alt="<?php _e('INNOVAMED - evidence based practice', 'innovamed'); ?>"
          title="<?php _e('INNOVAMED - evidence based practice', 'innovamed'); ?>"
        />
      <?php elseif ($heroVideo): ?>
        <video poster="<?php echo $heroImage; ?>" class="hero-image__video" playsinline autoplay muted loop>
          <source src="<?php echo $heroVideo; ?>" type="video/mp4">
        </video>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ($heroText || $heroQuotes): ?>
      <h2 class="hero-image__text">
        <?php if ($heroText): echo $heroText; ?>
        <?php elseif ($heroQuotes):?>
          <?php 
            $quotes = explode(PHP_EOL, $heroQuotes);
            $randQuote = rand(0, sizeOf($quotes) - 1);

            echo $quotes[$randQuote];
          ?>
        <?php endif; ?>
      </h2>
    <?php endif; ?>

  </div>
<?php endif; ?>
