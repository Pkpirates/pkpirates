<?php
/**
 * Title: Banner
 * Slug: combat/banner
 * Categories: combat, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>","id":595,"dimRatio":70,"overlayColor":"secondary","minHeight":700,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-595" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/slider.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"white","fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-banner-title-font-size" style="margin-top:var(--wp--preset--spacing--60);font-style:normal;font-weight:900;line-height:1;text-transform:uppercase"><?php esc_html_e('Build Your Body','combat'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:12px"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"4px","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}}},"backgroundColor":"primary","className":"banner-sub-title","fontSize":"body-text","fontFamily":"poppins"} -->
<h4 class="wp-block-heading banner-sub-title has-primary-background-color has-background has-poppins-font-family has-body-text-font-size" style="padding-top:12px;padding-right:24px;padding-bottom:12px;padding-left:24px;font-style:normal;font-weight:700;letter-spacing:4px;text-transform:uppercase"><?php esc_html_e('Transform your life','combat'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->