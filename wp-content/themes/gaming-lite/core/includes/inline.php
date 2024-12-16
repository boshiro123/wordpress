<?php

$gaming_lite_custom_css = '';


$gaming_lite_is_dark_mode_enabled = get_theme_mod( 'gaming_lite_is_dark_mode_enabled', false );

if ( $gaming_lite_is_dark_mode_enabled ) {

    $gaming_lite_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2) {';
    $gaming_lite_custom_css .= 'background: #000;';
    $gaming_lite_custom_css .= '}';

    $gaming_lite_custom_css .= '.some {';
    $gaming_lite_custom_css .= 'background: #000 !important;';
    $gaming_lite_custom_css .= '}';

	$gaming_lite_custom_css .= '.sticky .post-content{';
    $gaming_lite_custom_css .= 'color: #000';
    $gaming_lite_custom_css .= '}';

	$gaming_lite_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a,#main-menu ul.sub-menu li a{';
    $gaming_lite_custom_css .= 'color: #000 !important';
    $gaming_lite_custom_css .= '}';

    $gaming_lite_custom_css .= '.some{';
    $gaming_lite_custom_css .= 'background: #fff;';
    $gaming_lite_custom_css .= '}';

    $gaming_lite_custom_css .= '.some {';
    $gaming_lite_custom_css .= 'background: #fff !important;';
    $gaming_lite_custom_css .= '}';
	

    $gaming_lite_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span{';
    $gaming_lite_custom_css .= 'color: #fff;';
    $gaming_lite_custom_css .= '}';

    $gaming_lite_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular,a{';
    $gaming_lite_custom_css .= 'color: #fff !important;';
    $gaming_lite_custom_css .= '}';

	$gaming_lite_custom_css .= '.post-box{';
    $gaming_lite_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $gaming_lite_custom_css .= '}';
}

	/*---------------------------text-transform-------------------*/

	$gaming_lite_text_transform = get_theme_mod( 'menu_text_transform_gaming_lite','CAPITALISE');

    if($gaming_lite_text_transform == 'CAPITALISE'){

		$gaming_lite_custom_css .='#main-menu ul li a{';

			$gaming_lite_custom_css .='text-transform: capitalize ; font-size: 13px;';

		$gaming_lite_custom_css .='}';

	}else if($gaming_lite_text_transform == 'UPPERCASE'){

		$gaming_lite_custom_css .='#main-menu ul li a{';

			$gaming_lite_custom_css .='text-transform: uppercase ; font-size: 13px;';

		$gaming_lite_custom_css .='}';

	}else if($gaming_lite_text_transform == 'LOWERCASE'){

		$gaming_lite_custom_css .='#main-menu ul li a{';

			$gaming_lite_custom_css .='text-transform: lowercase ; font-size: 13px;';

		$gaming_lite_custom_css .='}';
	}

	/*---------------------------menu-zoom-------------------*/

			$gaming_lite_menu_zoom = get_theme_mod( 'gaming_lite_menu_zoom','None');

		if($gaming_lite_menu_zoom == 'None'){

			$gaming_lite_custom_css .='#main-menu ul li a{';

				$gaming_lite_custom_css .='';

			$gaming_lite_custom_css .='}';

		}else if($gaming_lite_menu_zoom == 'Zoominn'){

			$gaming_lite_custom_css .='#main-menu ul li a:hover{';

				$gaming_lite_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #222222;';

			$gaming_lite_custom_css .='}';
		}

	/*---------------------------Container Width-------------------*/

$gaming_lite_container_width = get_theme_mod('gaming_lite_container_width');

		$gaming_lite_custom_css .='body{';

			$gaming_lite_custom_css .='width: '.esc_attr($gaming_lite_container_width).'%; margin: auto;';

		$gaming_lite_custom_css .='}';


	/*---------------------------Slider-content-alignment-------------------*/

$gaming_lite_slider_content_alignment = get_theme_mod( 'gaming_lite_slider_content_alignment','LEFT-ALIGN');

 if($gaming_lite_slider_content_alignment == 'LEFT-ALIGN'){

		$gaming_lite_custom_css .='.blog_box{';

			$gaming_lite_custom_css .='text-align:left;';

		$gaming_lite_custom_css .='}';


	}else if($gaming_lite_slider_content_alignment == 'CENTER-ALIGN'){

		$gaming_lite_custom_css .='.blog_box{';

			$gaming_lite_custom_css .='text-align:center; right: 30%; left: 30%;';

		$gaming_lite_custom_css .='}';


	}else if($gaming_lite_slider_content_alignment == 'RIGHT-ALIGN'){

		$gaming_lite_custom_css .='.blog_box{';

			$gaming_lite_custom_css .='text-align:right; right: 15%; left: 55%;';

		$gaming_lite_custom_css .='}';

	}

		/*---------------------------Copyright Text alignment-------------------*/

$gaming_lite_copyright_text_alignment = get_theme_mod( 'gaming_lite_copyright_text_alignment','LEFT-ALIGN');

 if($gaming_lite_copyright_text_alignment == 'LEFT-ALIGN'){

		$gaming_lite_custom_css .='.copy-text p{';

			$gaming_lite_custom_css .='text-align:left;';

		$gaming_lite_custom_css .='}';


	}else if($gaming_lite_copyright_text_alignment == 'CENTER-ALIGN'){

		$gaming_lite_custom_css .='.copy-text p{';

			$gaming_lite_custom_css .='text-align:center;';

		$gaming_lite_custom_css .='}';


	}else if($gaming_lite_copyright_text_alignment == 'RIGHT-ALIGN'){

		$gaming_lite_custom_css .='.copy-text p{';

			$gaming_lite_custom_css .='text-align:right;';

		$gaming_lite_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$gaming_lite_related_product_setting = get_theme_mod('gaming_lite_related_product_setting',true);

	if($gaming_lite_related_product_setting == false){

		$gaming_lite_custom_css .='.related.products, .related h2{';

			$gaming_lite_custom_css .='display: none;';

		$gaming_lite_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$gaming_lite_scroll_top_position = get_theme_mod( 'gaming_lite_scroll_top_position','Right');

	if($gaming_lite_scroll_top_position == 'Right'){

		$gaming_lite_custom_css .='.scroll-up{';

			$gaming_lite_custom_css .='right: 20px;';

		$gaming_lite_custom_css .='}';

	}else if($gaming_lite_scroll_top_position == 'Left'){

		$gaming_lite_custom_css .='.scroll-up{';

			$gaming_lite_custom_css .='left: 20px;';

		$gaming_lite_custom_css .='}';

	}else if($gaming_lite_scroll_top_position == 'Center'){

		$gaming_lite_custom_css .='.scroll-up{';

			$gaming_lite_custom_css .='right: 50%;left: 50%;';

		$gaming_lite_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$gaming_lite_pagination_setting = get_theme_mod('gaming_lite_pagination_setting',true);

	if($gaming_lite_pagination_setting == false){

		$gaming_lite_custom_css .='.nav-links{';

			$gaming_lite_custom_css .='display: none;';

		$gaming_lite_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$gaming_lite_slider_opacity_color = get_theme_mod( 'gaming_lite_slider_opacity_color','0.6');

	if($gaming_lite_slider_opacity_color == '0'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.1'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.1';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.2'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.2';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.3'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.3';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.4'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.4';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.5'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.5';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.6'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.6';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.7'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.7';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.8'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.8';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == '0.9'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:0.9';

		$gaming_lite_custom_css .='}';

		}else if($gaming_lite_slider_opacity_color == 'unset'){

		$gaming_lite_custom_css .='.blog_inner_box img{';

			$gaming_lite_custom_css .='opacity:unset';

		$gaming_lite_custom_css .='}';

		}