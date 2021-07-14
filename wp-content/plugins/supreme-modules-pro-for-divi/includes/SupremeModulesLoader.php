<?php
/*Temporary fix*/
if ( ! function_exists( 'et_core_is_fb_enabled' ) ) :
	function et_core_is_fb_enabled() {
		return function_exists( 'et_fb_is_enabled' ) && et_fb_is_enabled();
	}
endif;
if ( ! function_exists( 'et_divi_divider_style_choices' ) ) :
	/**
	 * Returns divider style choices
	 *
	 * @return array
	 */
	function et_divi_divider_style_choices() {
		return apply_filters(
			'et_divi_divider_style_choices',
			array(
				'solid'  => esc_html__( 'Solid', 'Divi' ),
				'dotted' => esc_html__( 'Dotted', 'Divi' ),
				'dashed' => esc_html__( 'Dashed', 'Divi' ),
				'double' => esc_html__( 'Double', 'Divi' ),
				'groove' => esc_html__( 'Groove', 'Divi' ),
				'ridge'  => esc_html__( 'Ridge', 'Divi' ),
				'inset'  => esc_html__( 'Inset', 'Divi' ),
				'outset' => esc_html__( 'Outset', 'Divi' ),
			)
		);
	}
endif;
/*End of Temporary fix*/

if ( ! function_exists( 'dsm_load_divi_modules' ) ) :
	function dsm_load_divi_modules() {
		$dsm_load_divi_modules = array(
			'et_pb_accordion',
			'et_pb_audio',
			'et_pb_counters',
			'et_pb_blog',
			'et_pb_blurb',
			'et_pb_circle_counter',
			'et_pb_code',
			'et_pb_button',
			'et_pb_comments',
			'et_pb_contact_form',
			'et_pb_countdown_timer',
			'et_pb_cta',
			'et_pb_divider',
			'et_pb_filterable_portfolio',
			'et_pb_fullwidth_code',
			'et_pb_fullwidth_header',
			'et_pb_fullwidth_image',
			'et_pb_fullwidth_map',
			'et_pb_fullwidth_menu',
			'et_pb_fullwidth_portfolio',
			'et_pb_fullwidth_post_slider',
			'et_pb_fullwidth_post_title',
			'et_pb_fullwidth_slider',
			'et_pb_gallery',
			'et_pb_image',
			'et_pb_login',
			'et_pb_map',
			'et_pb_number_counter',
			'et_pb_portfolio',
			'et_pb_post_slider',
			'et_pb_post_title',
			'et_pb_post_nav',
			'et_pb_pricing_tables',
			'et_pb_search',
			'et_pb_shop',
			'et_pb_sidebar',
			'et_pb_signup',
			'et_pb_slider',
			'et_pb_social_media_follow',
			'et_pb_tabs',
			'et_pb_team_member',
			'et_pb_testimonial',
			'et_pb_text',
			'et_pb_toggle',
			'et_pb_video',
			'et_pb_video_slider',
			'dsm_text_badges',
			'dsm_button',
			'dsm_contact_form_7',
			'dsm_embed_google_map',
			'dsm_embed_twitter_timeline',
			'dsm_facebook_comments',
			'dsm_facebook_feed',
			'dsm_flipbox',
			'dsm_floating_multi_images',
			'dsm_gradient_text',
			'dsm_icon_divider',
			'dsm_menu',
			'dsm_perspective_image',
			'dsm_text_divider',
			'dsm_typing_effect',
			'dsm_image_hover_reveal',
			'dsm_image_reveal',
			'dsm_glitch_text',
			'dsm_star_rating',
			'dsm_tilt_image',
			'dsm_pricelist',
			'dsm_shuffle_letters',
			'dsm_image_carousel',
			'dsm_caldera_forms',
			'dsm_business_hours',
			'dsm_icon_list',
			'dsm_dual_heading',
			'dsm_image_hotspots',
			'dsm_animated_gradient_text',
			'dsm_mask_text',
			'dsm_scroll_image',
			'dsm_card',
			'dsm_shapes',
			'dsm_facebook_like_button',
			'dsm_facebook_embed',
			'dsm_text_rotator',
			'dsm_block_reveal_image',
			'dsm_block_reveal_text',
			'dsm_before_after_image',
			'dsm_lottie',
		);
		return $dsm_load_divi_modules;
	}
endif;

if ( ! function_exists( 'dsm_load_readme_divi_modules' ) ) :
	function dsm_load_readme_divi_modules() {
		$dsm_load_readme_divi_modules = array( 'et_pb_text', 'et_pb_blog', 'et_pb_code', 'et_pb_cta', 'et_pb_blurb' );
		return $dsm_load_readme_divi_modules;
	}
endif;
// End.
