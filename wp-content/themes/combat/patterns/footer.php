<?php
/**
 * Title: Footer
 * Slug: combat/footer
 * Categories: combat, footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","right":"20px","bottom":"100px","left":"20px"}},"color":{"background":"#1d1f27"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() . '/images/foo-bg.jpg'); ?>","id":297,"source":"file","title":"foo-bg"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#1d1f27;padding-top:100px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"Background","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"right":{"color":"#484f55","width":"1px"},"top":{},"bottom":{},"left":{}}}} -->
<div class="wp-block-column" style="border-right-color:#484f55;border-right-width:1px"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#919fab"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu pharetra ex. Etiam eget','combat'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"19px"}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:19px"><?php esc_html_e('CALL US ANYTIME','combat'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":5,"style":{"typography":{"fontSize":"33px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:33px"><a href="tel:" data-type="tel" data-id="tel:"><?php esc_html_e('+123 45677345','combat'); ?></a></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"19px"}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:19px"><?php esc_html_e('VISIT OUR LOCATION','combat'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('12 Main Street Pt. London England','combat'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"right":{"color":"#484f55","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="border-right-color:#484f55;border-right-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"letterSpacing":"1px","fontSize":"30px"}},"textColor":"white"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:30px;letter-spacing:1px"><?php esc_html_e('Latest News','combat'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":25,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-title {"level":5,"isLink":true,"style":{"color":{"text":"#919fab"},"elements":{"link":{"color":{"text":"#919fab"}}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"letterSpacing":"1px","fontSize":"30px"}},"textColor":"white"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:30px;letter-spacing:1px"><?php esc_html_e('Our Services','combat'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Home','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Help Center','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Health Care','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Insurance Claim','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Facilities','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('careers','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Privacy Policy','combat'); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#919fab"}}},"color":{"text":"#919fab"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"12px"}}}} -->
<p class="has-text-color has-link-color" style="color:#919fab;margin-top:12px;font-style:normal;font-weight:600;text-transform:uppercase"><a href="#"><?php esc_html_e('Contact','combat'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"#484f55","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70"}},"color":{"text":"#919fab"},"elements":{"link":{"color":{"text":"#919fab"}}}},"layout":{"type":"default"},"fontSize":"small"} -->
<div class="wp-block-group alignwide has-text-color has-link-color has-small-font-size" style="border-top-color:#484f55;border-top-width:1px;color:#919fab;margin-top:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"Background"} -->
<p class="has-background-color has-text-color"><?php esc_html_e('© Copyright 2024. All Rights Reserved.','combat'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}}},"textColor":"Background"} -->
<p class="has-background-color has-text-color has-link-color"><a rel="noreferrer noopener" href="<?php echo esc_url('https://www.flythemes.net/'); ?>" target="_blank"><?php esc_html_e('Fly Themes','combat'); ?></a> <?php esc_html_e('and','combat'); ?> <a href="<?php echo esc_url( __('https://wordpress.org','combat')); ?>"><?php esc_html_e('WordPress','combat'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->