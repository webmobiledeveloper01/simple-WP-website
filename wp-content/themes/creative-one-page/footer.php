<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Creative One Page
 */
?>

<footer role="contentinfo">
  <?php if (get_theme_mod('creative_one_page_show_hide_footer', true)){ ?>
    <?php //Set widget areas classes based on user choice
      $creative_one_page_widget_areas = get_theme_mod('creative_one_page_footer_widget_areas', '4');
      if ($creative_one_page_widget_areas == '3') {
        $cols = 'col-lg-4 col-md-4';
      } elseif ($creative_one_page_widget_areas == '4') {
        $cols = 'col-lg-3 col-md-3';
      } elseif ($creative_one_page_widget_areas == '2') {
        $cols = 'col-lg-6 col-md-6';
      } else {
        $cols = 'col-lg-12 col-md-12';
      }
    ?>
    <div id="footer" class="copyright-wrapper">
      <div class="container">
        <div class="row">
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-1'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-2'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-3'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php }?>
  <?php if (get_theme_mod('creative_one_page_show_hide_copyright', true)) {?>
    <div class="copyright p-3 text-center">
      <p class="mb-0"><?php creative_one_page_credit();?> <?php echo esc_html(get_theme_mod('creative_one_page_footer_copy', __('By Themeshopy', 'creative-one-page')));?></p>
    </div>
  <?php }?>
</footer>
<?php if( get_theme_mod( 'creative_one_page_enable_disable_scroll',true) != '' || get_theme_mod( 'creative_one_page_responsive_scroll',true) != '') { ?>
  <?php $creative_one_page_theme_lay = get_theme_mod( 'creative_one_page_scroll_setting','Right');
    if($creative_one_page_theme_lay == 'Left'){ ?>
      <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','creative-one-page'); ?>"><i class="<?php echo esc_attr(get_theme_mod('creative_one_page_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'creative-one-page'); ?></span></button>
    <?php }else if($creative_one_page_theme_lay == 'Center'){ ?>
      <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','creative-one-page'); ?>"><i class="<?php echo esc_attr(get_theme_mod('creative_one_page_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'creative-one-page'); ?></span></button>
    <?php }else{ ?>
      <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','creative-one-page'); ?>"><i class="<?php echo esc_attr(get_theme_mod('creative_one_page_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'creative-one-page'); ?></span></button>
  <?php }?>
<?php }?>

<?php wp_footer();?>
</body>
</html>