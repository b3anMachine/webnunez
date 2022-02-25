<?php
/**
 * About Us Page Pattern
 *
 * @package WordPress
 * @subpackage Allele
 * @since Allele 1.0.0
 */

return array(
			'title'         => __( 'About Us Page', 'allele' ),
			'categories'    => array( 'allele-pages' ),
			'content'       => '<!-- wp:group {"align":"full","backgroundColor":"tl-background","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing has-tl-background-background-color has-background"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:media-text {"mediaId":3118,"mediaLink":"' . esc_url( get_theme_file_uri( 'images/highlight-4.jpg' ) ) . '","linkDestination":"none","mediaType":"image","className":"is-allele-no-spacing"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-allele-no-spacing"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( 'images/highlight-4.jpg' ) ) . '" alt="" class="wp-image-3118 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"backgroundColor":"tl-background","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-tl-background-background-color has-background"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":5} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 id="we-are-creative-digital-agency" style="font-style:normal;font-weight:700">' . __( 'We are creative digital agency.', 'allele' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":5} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"tl-background-alt","className":"is-style-allele-no-spacing","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull is-style-allele-no-spacing has-tl-background-alt-background-color has-background"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<h3 class="has-text-align-center" id="our-services-1" style="font-style:normal;font-weight:700">' . __( 'Our Wall', 'allele' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . __( 'Augue eget arcu dictum varius. Venenatis a condimentum vitae sapien pellentesque habitant morbi tristique. Sit amet consectetur adipiscing elit.', 'allele' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"is-small-gap"} -->
<div class="wp-block-columns alignwide is-small-gap"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"tl-background","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-tl-background-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:700">' . __( '125+', 'allele' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"tl-meta","fontSize":"small"} -->
<p class="has-text-align-center has-tl-meta-color has-text-color has-small-font-size">' . __( 'Awards', 'allele' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"tl-background","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-tl-background-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:700">' . __( '175K', 'allele' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"tl-meta","fontSize":"small"} -->
<p class="has-text-align-center has-tl-meta-color has-text-color has-small-font-size">' . __( 'Clients', 'allele' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"tl-background","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-tl-background-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:700">' . __( '70+', 'allele' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"tl-meta","fontSize":"small"} -->
<p class="has-text-align-center has-tl-meta-color has-text-color has-small-font-size">' . __( 'Countries', 'allele' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"backgroundColor":"tl-background","className":"is-style-allele-box-shadow"} -->
<div class="wp-block-group is-style-allele-box-shadow has-tl-background-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
<p class="has-text-align-center has-huge-font-size" style="font-style:normal;font-weight:700">' . __( '305K', 'allele' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"tl-meta","fontSize":"small"} -->
<p class="has-text-align-center has-tl-meta-color has-text-color has-small-font-size">' . __( 'Projects', 'allele' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":1,"className":"is-tiny-spacing-tb"} -->
<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-tiny-spacing-tb"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
);
