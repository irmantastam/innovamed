<?php
  // ACF template: Greeting.

  // Template variables:
  if ( function_exists( 'get_field' ) ) :
    $greetingPhoto = get_field('greeting_photo');
    $greetingLabel = get_field('greeting_label');
    $greetingText = get_field('greeting_text');
    $greetingLink = get_field('greeting_link');
    $greetingLinkText = get_field('greeting_link_text');
  endif;
?>

<?php if ($greetingPhoto || $greetingLabel || $greetingText || $greetingLink || $greetingLinkText): ?>
  <div class="greeting">

    <?php if ($greetingPhoto): ?>
      <div class="greeting__image">
        <img
          src="<?php echo $greetingPhoto; ?>"
          alt="<?php _e('INNOVAMED - evidence based physiotherapy', 'innovamed'); ?>"
          title="<?php _e('INNOVAMED - evidence based physiotherapy', 'innovamed'); ?>"
        />
      </div>
    <?php endif; ?>

    <?php if ($greetingLabel || $greetingText || ($greetingLink && $greetingLinkText)): ?>
      <div class="greeting__text">

        <?php if ($greetingLabel): ?>
          <h1 class="greeting__title">
            <?php echo $greetingLabel; ?>
          </h1>
        <?php endif; ?>

        <?php if ($greetingText): ?>
          <p class="greeting__body">
            <?php echo $greetingText ?>
          </p>
        <?php endif; ?>

        <?php if ($greetingLink && $greetingLinkText): ?>
          <a class="greeting__link" href="<?php echo $greetingLink; ?>">
            <?php echo $greetingLinkText; ?>
          </a>
        <?php endif; ?>

      </div>
    <?php endif; ?>

  </div>
<?php endif; ?>
