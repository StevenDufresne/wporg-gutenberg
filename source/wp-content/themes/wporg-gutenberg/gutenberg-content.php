<?php

$localised_domain = parse_url( home_url( '/' ), PHP_URL_HOST );

$title = __( 'Say Hello to Gutenberg, the WordPress Editor', 'wporg' );

$content = '<!-- wp:group {"align":"full","layout":{"inherit":false,"contentSize":"1200px"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"bottom":"10%","top":"60px"}}},"className":"site-header","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group site-header has-link-color" style="padding-top:60px;padding-bottom:10%"><!-- wp:image {"id":17,"width":38,"height":38,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022/06/site_icon.png" alt="" class="wp-image-17" width="38" height="38"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
 
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"level-6"} -->
<h1 class="has-level-6-font-size">' . esc_html__( 'Say Hello to Gutenberg, the WordPress Editor', 'wporg' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"level-2"} -->
<p class="has-level-2-font-size">' . esc_html__( 'Experience the flexibility that blocks allow, whether you’re building your first site or write code for a living.', 'wporg' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( "https://{$localised_domain}/download/" ) . '"  target="_blank">' . esc_html__( 'Try Gutenberg today in WordPress', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"60px"}}}} -->
<div class="wp-block-group" style="padding-bottom:60px"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><em>' . wp_kses_post( __( 'This page was built with blocks — pieces of content that you can move around. <strong>Click around to explore them.</strong>', 'wporg' ) ) . '</em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"https://wordpress.org/gutenberg/files/2022/05/Gradient-Background.png","id":111079,"hasParallax":true,"dimRatio":10,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:120px;padding-bottom:120px;background-image:url(https://wordpress.org/gutenberg/files/2022/05/Gradient-Background.png)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"wideSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","left":"0px","bottom":"30px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":243,"width":35,"height":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022/06/block-media-text.png" alt="" class="wp-image-243" width="35" height="35"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-tertiary-color has-text-color has-medium-font-size">' . esc_html__( 'Create modern layouts with rich content.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:30px;padding-left:0px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":244,"width":36,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022/06/block-gallery.png" alt="" class="wp-image-244" width="36"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-tertiary-color has-text-color has-medium-font-size">' . esc_html__( 'Trust that your editor looks like your website.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"bottom":"30px"}}}} -->
<div class="wp-block-column" style="padding-bottom:30px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":242,"width":22,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022/06/mobile.png" alt="" class="wp-image-242" width="22"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-tertiary-color has-text-color has-medium-font-size">' . esc_html__( 'Work across screen sizes and devices.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"30px"}}}} -->
<div class="wp-block-column" style="padding-bottom:30px"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"id":241,"width":25,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022//06/plugin.png" alt="" class="wp-image-241" width="25"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-tertiary-color has-text-color has-medium-font-size">' . esc_html__( 'Do more with fewer plugins.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"overlayColor":"background","minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:120px;padding-bottom:120px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide", "className":"wporg-gutenberg-block-layout", "layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group wporg-gutenberg-block-layout alignwide"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-bottom:0px"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"align":"wide","className":"wporg-gutenberg-block-layout"} -->
<div class="wp-block-group alignwide wporg-gutenberg-block-layout"><!-- wp:heading {"align":"wide","fontSize":"level-5"} -->
<h2 class="alignwide has-level-5-font-size" id="be-your-own-builder">' . esc_html__( 'Be your own builder.', 'wporg' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">' . esc_html__( 'Blocks allow you to build your own custom posts and pages without any coding knowledge. Here’s a selection of the default blocks included with Gutenberg:', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%","className":"wporg-gutenberg-hide-on-mobile"} -->
<div class="wp-block-column wporg-gutenberg-hide-on-mobile" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%","style":{"spacing":{"padding":{"top":"10px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;flex-basis:25%"><!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . esc_url( "https://{$localised_domain}/plugins/browse/block/" ) . '" target="_blank">' . esc_html__( 'Browse all blocks', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"20px","className":"wporg-gutenberg-hide-on-mobile"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer wporg-gutenberg-hide-on-mobile"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-top:0px;padding-bottom:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1192,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Paragraph.png" alt="" class="wp-image-1192"/><figcaption>' . esc_html__( 'Paragraph', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1219,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Heading.png" alt="" class="wp-image-1219"/><figcaption>' . esc_html__( 'Heading', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-top:0px;padding-bottom:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1220,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Media-Text.png" alt="" class="wp-image-1220"/><figcaption>' . esc_html__( 'Media &amp; Text', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1221,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Image.png" alt="" class="wp-image-1221"/><figcaption>' . esc_html__( 'Image', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":192,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://wordpress.org/gutenberg/files/2022/05/Cover-1024x1024.png" alt="" class="wp-image-192"/><figcaption>' . esc_html__( 'Cover', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1222,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Gallery.png" alt="" class="wp-image-1222"/><figcaption>' . esc_html__( 'Gallery', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1226,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Video.png" alt="" class="wp-image-1226"/><figcaption>' . esc_html__( 'Video', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1227,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Audio.png" alt="" class="wp-image-1227"/><figcaption>' . esc_html__( 'Audio', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":225,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://wordpress.org/gutenberg/files/2022/05/Collumns.png" alt="" class="wp-image-225"/><figcaption>' . esc_html__( 'Columns', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1229,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/File.png" alt="" class="wp-image-1229"/><figcaption>' . esc_html__( 'File', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1230,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/Code.png" alt="" class="wp-image-1230"/><figcaption>' . esc_html__( 'Code', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":1231,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="https://wordpress.org/gutenberg/files/2022/05/List.png" alt="" class="wp-image-1231"/><figcaption>' . esc_html__( 'List', 'wporg' ) . '</figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"customOverlayColor":"#fbfaf7","minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:120px;padding-bottom:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#fbfaf7"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"wporg-gutenberg-block-layout","layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group wporg-gutenberg-block-layout"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-right:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"top","width":"53%","style":{"spacing":{"padding":{"bottom":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-bottom:0px;flex-basis:53%"><!-- wp:group {"align":"wide","className":"wporg-gutenberg-block-layout","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wporg-gutenberg-block-layout"><!-- wp:heading {"align":"wide","fontSize":"level-5"} -->
<h2 class="alignwide has-level-5-font-size" id="head-start">' . esc_html__( 'Give your creativity a head start.', 'wporg' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px","className":"wporg-gutenberg-hide-on-mobile"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer wporg-gutenberg-hide-on-mobile"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"level-2"} -->
<p class="has-level-2-font-size">' . esc_html__( 'Beautiful content doesn’t have to be designed from scratch. Patterns are collections of pre-arranged blocks you can assemble to make your content impactful, meaningful and appealing.', 'wporg' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%","className":"wporg-gutenberg-block-layout"} -->
<div class="wp-block-column wporg-gutenberg-block-layout" style="flex-basis:70%"><!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"style":{"color":{"text":"#ffffff"}, "className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" href="' . esc_url( "https://{$localised_domain}/patterns/" ) . '" style="color:#ffffff" target="_blank">' . esc_html__( 'Block Pattern Directory', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button -->

<!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://learn.wordpress.org/lesson-plan/how-to-use-wordpress-block-patterns/" target="_blank">' . esc_html__( 'Learn how to create patterns', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","className":"wporg-gutenberg-hide-on-mobile"} -->
<div class="wp-block-column wporg-gutenberg-hide-on-mobile" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"className":"wporg-gutenberg-hide-on-mobile"} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer wporg-gutenberg-hide-on-mobile"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"2%","className":"wporg-gutenberg-hide-on-mobile"} -->
<div class="wp-block-column wporg-gutenberg-hide-on-mobile" style="flex-basis:2%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%"><!-- wp:image {"id":212,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="https://wordpress.org/gutenberg/files/2022/06/pattern-preview.png" alt="" class="wp-image-212"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"overlayColor":"background","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:120px;padding-bottom:120px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","className":"wporg-gutenberg-block-layout","layout":{"inherit":false,"contentSize":"1200px"}} -->
<div class="wp-block-group alignwide wporg-gutenberg-block-layout"><!-- wp:heading {"align":"wide","textColor":"primary","fontSize":"level-5"} -->
<h2 class="alignwide has-primary-color has-text-color has-level-5-font-size" id="gutenberg-everyone">' . esc_html__( 'Gutenberg ❤️ everyone', 'wporg' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","right":"0px","left":"0px"}}},"className":"wporg-gutenberg-block-layout","layout":{"inherit":false}} -->
<div class="wp-block-group wporg-gutenberg-block-layout" style="padding-top:60px;padding-right:0px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:15px;padding-bottom:15px"><!-- wp:column {"verticalAlignment":"top","layout":{"inherit":false}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size"><strong>' . esc_html__( 'Created by the community.', 'wporg' ) . '</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:30px"><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color">' . esc_html__( 'Built by people from all over the world who work daily, meet weekly, and ship biweekly. You can be a part of it.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://make.wordpress.org/core/handbook/tutorials/navigating-the-community/" target="_blank">' . esc_html__( 'Join the WordPress Community', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"primary","className":"alignwide is-style-wide wporg-gutenberg-hide-on-mobile"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background alignwide is-style-wide wporg-gutenberg-hide-on-mobile"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:15px;padding-bottom:15px"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size"><strong>' . esc_html__( 'Built for a great developer experience.', 'wporg' ) . '</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:30px"><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color">' . esc_html__( 'Gutenberg lives on GitHub using the WordPress REST API, JavaScript, and React.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://developer.wordpress.org/block-editor/explanations/architecture/key-concepts/" target="_blank">' . esc_html__( 'Browse the documentation', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"primary","className":"alignwide is-style-wide wporg-gutenberg-hide-on-mobile"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background alignwide is-style-wide wporg-gutenberg-hide-on-mobile"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:15px;padding-bottom:15px"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size"><strong>' . esc_html__( 'Designed for compatibility.', 'wporg' ) . '</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:30px"><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color">' . esc_html__( 'Gutenberg recommends migrating features to blocks but supports previous versions.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://developer.wordpress.org/block-editor/explanations/faq/#compatibility" target="_blank">' . esc_html__( 'Learn more about compatibility', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"primary","className":"alignwide is-style-wide wporg-gutenberg-hide-on-mobile"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background alignwide is-style-wide wporg-gutenberg-hide-on-mobile"/>
<!-- /wp:separator -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"15px","bottom":"15px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:15px;padding-bottom:15px"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:paragraph {"textColor":"primary","fontSize":"medium"} -->
<p class="has-primary-color has-text-color has-medium-font-size"><strong>' . esc_html__( 'Focused on accessibility.', 'wporg' ) . '</strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"right":"30px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:30px"><!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color">' . esc_html__( 'Designing with and for everyone is at the core of the editor and its future.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:wporg/wporg-gutenberg-button -->
<div class="wp-block-wporg-wporg-gutenberg-button wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://make.wordpress.org/accessibility/" target="_blank">' . esc_html__( 'See accessibility improvements', 'wporg' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:wporg/wporg-gutenberg-button --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"customOverlayColor":"#ecf6fa","minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:60px;padding-bottom:60px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#ecf6fa"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"60px"}}},"layout":{"contentSize":""}} -->
<div class="wp-block-group alignwide" style="padding-bottom:60px"><!-- wp:heading {"align":"wide","fontSize":"level-5"} -->
<h2 class="alignwide has-level-5-font-size" id="new-to-wordpress">' . esc_html__( 'New to WordPress?', 'wporg' ) . '<br>' . esc_html__( 'No problem.', 'wporg' ) . '</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"20px"}}}} -->
<div class="wp-block-column" style="padding-top:20px;flex-basis:20%"><!-- wp:image {"align":"right","id":36,"width":30,"height":30,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022/06/wmark.png" alt="" class="wp-image-36" width="30" height="30"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"bottom","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:35%"><!-- wp:wporg/wporg-gutenberg-link -->
<div class="wp-block-wporg-wporg-gutenberg-link"><!-- wp:paragraph {"fontSize":"level-1"} -->
<p class="has-level-1-font-size">' .
	sprintf(
	/* translators: 1: The URL to learn.wordpress.org.  */
		wp_kses_post( __( 'You can learn all the basics on <a href="%1$s" target="_blank">Learn WordPress</a>, a whole section dedicated to helping you get started.', 'wporg' ) ),
		esc_url( 'https://learn.wordpress.org' )
	) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:wporg/wporg-gutenberg-link -->

<!-- wp:spacer {"height":"10px","className":"wporg-gutenberg-hide-on-mobile"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer wporg-gutenberg-hide-on-mobile"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%","className":"wporg-gutenberg-hide-on-mobile"} -->
<div class="wp-block-column wporg-gutenberg-hide-on-mobile" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:60%"><!-- wp:wporg/wporg-gutenberg-link -->
<div class="wp-block-wporg-wporg-gutenberg-link"><!-- wp:paragraph {"textColor":"secondary","fontSize":"level-3"} -->
<p class="has-secondary-color has-text-color has-level-3-font-size"><a href="https://learn.wordpress.org/workshop/how-to-install-wordpress/" target="_blank">' . esc_html__( 'How to Install WordPress ↗' ) . '</a><br><a href="https://learn.wordpress.org/workshop/how-to-choose-install-a-theme/" target="_blank">' . esc_html__( 'How to Choose and Install a Theme ↗' ) . '</a><br><a href="https://learn.wordpress.org/workshop/intro-to-block-patterns/" target="_blank">' . esc_html__( 'Intro to Block Patterns ↗' ) . '</a><br><a href="https://learn.wordpress.org/workshop/advanced-layouts-with-the-block-editor/" target="_blank">' . esc_html__( 'Advanced Layouts With the Block Editor ↗' ) . '</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:wporg/wporg-gutenberg-link --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"customOverlayColor":"#fdfdfd","minHeightUnit":"px","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:60px;padding-bottom:60px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#fdfdfd"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:paragraph {"fontSize":"level-2"} -->
<p class="has-level-2-font-size">' . esc_html__( 'Some more helpful content and places to dig deeper about Gutenberg.', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:wporg/wporg-gutenberg-link -->
<div class="wp-block-wporg-wporg-gutenberg-link"><!-- wp:paragraph {"textColor":"secondary","fontSize":"level-3"} -->
<p class="has-secondary-color has-text-color has-level-3-font-size"> <a href="https://developer.wordpress.org/block-editor/explanations/faq/" target="_blank">' . esc_html__( 'Gutenberg FAQs ↗', 'wporg' ) . '</a><br> <a href="https://wordpress.tv/?s=gutenberg" target="_blank">' . esc_html__( 'WordPress.tv talks about Gutenberg ↗' ) . '</a> <br> <a href="https://developer.wordpress.org/block-editor/contributors/design/#goal-of-gutenberg" target="_blank">' . esc_html__( 'Gutenberg Design Principles ↗' ) . '</a><br> <a href="https://wordpress.org/support/article/wordpress-editor/" target="_blank">' . esc_html__( 'WordPress Editor Documentation ↗' ) . '</a><br> <a href="https://make.wordpress.org/core/2020/05/20/ways-to-keep-up-with-full-site-editing-fse/" target="_blank">' . esc_html__( 'Development Updates ↗' ) . '</a> </p>
<!-- /wp:paragraph --></div>
<!-- /wp:wporg/wporg-gutenberg-link --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"https://wordpress.org/gutenberg/files/2022/05/Gradient-Background-2-1.png","id":111078,"hasParallax":true,"dimRatio":10,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"120px","right":"0px","bottom":"120px","left":"0px"}}}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:120px;padding-right:0px;padding-bottom:120px;padding-left:0px;background-image:url(https://wordpress.org/gutenberg/files/2022/05/Gradient-Background-2-1.png)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"1000px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns" style="padding-top:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"right":"30px","left":"30px"}}}} -->
<div class="wp-block-column" style="padding-right:30px;padding-left:30px;flex-basis:100%"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.2,"fontStyle":"normal","fontWeight":"300"}},"textColor":"tertiary","fontSize":"level-4"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-level-4-font-size" style="font-style:normal;font-weight:300;line-height:1.2">' . esc_html__( '“Gutenberg meets our challenges and opportunities head on while simultaneously benefitting everyone who makes a living working in the WP ecosystem. It’s about a lot more than just blocks.”', 'wporg' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-link-color has-small-font-size"> — MATT MULLENWEG, IN <a href="https://ma.tt/2017/08/we-called-it-gutenberg-for-a-reason/" target="_blank">MA.TT</a></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"customOverlayColor":"#ecf6fa","minHeightUnit":"px","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:60px;padding-bottom:60px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#ecf6fa"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false,"contentSize":"1200px"}} -->
<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"level-5"} -->
<h2 class="alignwide has-level-5-font-size" id="thanks-for-trying-gutenberg" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">' . esc_html__( 'Thanks for trying Gutenberg!', 'wporg' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"bottom","align":"full","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:wporg/wporg-gutenberg-link -->
<div class="wp-block-wporg-wporg-gutenberg-link"><!-- wp:paragraph {"fontSize":"level-1"} -->
<p class="has-level-1-font-size">' .
	sprintf(
	/* translators: 1: The URL to the Gutenberg plugin.  */
		wp_kses_post( __( 'Gutenberg is available as part of WordPress 5.0 and later. New developments and experiments will continue in the <a href="%1$s" target="_blank">Gutenberg plugin</a>.', 'wporg' ) ),
		esc_url( "https://{$localised_domain}/plugins/gutenberg/" )
	) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:wporg/wporg-gutenberg-link --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"wporg-gutenberg-hide-on-mobile"} -->
<div class="wp-block-column wporg-gutenberg-hide-on-mobile"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:30px"><!-- wp:wporg/wporg-gutenberg-link -->
<div class="wp-block-wporg-wporg-gutenberg-link"><!-- wp:paragraph {"align":"right","fontSize":"normal"} -->
<p class="has-text-align-right has-normal-font-size"><a href="https://twitter.com/WordPress" target="_blank">' . esc_html__( 'Twitter ↗', 'wporg' ) . '<br>
</a><a href="https://github.com/WordPress/gutenberg" target="_blank">' . esc_html__( 'GitHub ↗', 'wporg' ) . '</a>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:wporg/wporg-gutenberg-link -->

<!-- wp:image {"align":"right","id":17,"width":38,"height":38,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full is-resized"><img src="https://wordpress.org/gutenberg/files/2022/06/site_icon.png" alt="" class="wp-image-17" width="38" height="38"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->';

return compact( 'title', 'content' );
