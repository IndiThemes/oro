<?php 
/**
 *	Upsell Section
 */
 
 function oro_upsell_customize_register( $wp_customize ) {
	 
	 $wp_customize->add_section(
		 'oro_pro', array(
			 'title'	=>	esc_html__('Get ORO Plus!', 'oro'),
			 'priority'	=>	49
		 )
	 );
	 
	 $wp_customize->add_setting(
		 'oro_pro_link', array(
			 'default'	=> '',
			 'sanitize_callback'	=>	'sanitize_text_field'
		 )
	 );
	 
	 $wp_customize->add_control(
		 new Oro_Custom_Link_Control(
			 $wp_customize, 'oro_pro_link', array(
			 'label'	=>	__('Check out ORO Plus', 'oro'),
			 'description'	=> __('Liked ORO? You can get the extended version of ORO with more features to blow you away! Some of the features include<ul><li>WooCommerce Ready</li><li>MailChimp Ready</li><li>Google Fonts</li><li>Header Slider</li><li>Infinite Colors</li><li>Multiple Layouts</li><li>and much more...</li></ul><br>', 'oro'),
			 'type'	=>	'oro-link',
			 'section'	=>	'oro_pro',
			 'settings'	=>	'oro_pro_link',
			 'input_attrs'	=>	array(
				'url'	=>	'https://demo.indithemes.com/oro-plus'
				)
			)
		)
	);
	 
	 
	$wp_customize->add_section(
		'oro_upsell_section', array(
			 'title'		=>	__('Theme Links', 'oro'),
			 'description'	=>	__('Theme related Links to help you out and support our work.<br><br><strong>Thanks for using our Theme!</strong> :-)', 'oro'),
			 'priority'		=>	50
		 )
	);
	
	$wp_customize->add_setting(
		'oro_support_link', array(
			'default'			=>	'',
			'sanitize_callback'	=>	'sanitize_text_field'
		)
	);
	
	$wp_customize->add_control(
		new Oro_Custom_Link_Control(
			$wp_customize,
			'oro_support_link',
			array(
				'label'		=>	__('support@indithemes.com', 'oro'),
				'description'	=>	__('Have suggestions, need help or want to drop some feedback, you can reach us directly by mail', 'oro'),
				'type'			=>	'oro-link',
				'section'		=>	'oro_upsell_section',
				'settings'		=>	'oro_support_link',
				'priority'		=>	10,
				'input_attrs'	=>	array(
							'url'	=>	'mailto:support@indithemes.com'
							)
			)
		)
	);
	
	$wp_customize->add_setting(
		'oro_review_link', array(
			'default'			=>	'',
			'sanitize_callback'	=>	'sanitize_text_field'
		)
	);
	
	$wp_customize->add_control(
		new Oro_Custom_Link_Control(
			$wp_customize,
			'oro_review_link',
			array(
				'label'		=>	__('Review Us', 'oro'),
				'description'	=>	__('Like the Theme, give us a <span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>', 'oro'),
				'type'			=>	'oro-link',
				'section'		=>	'oro_upsell_section',
				'settings'		=>	'oro_review_link',
				'priority'		=>	20,
				'input_attrs'	=>	array(
							'url'	=>	'https://wordpress.org/support/theme/oro/reviews/'
							)
			)
		)
	);
	
	$wp_customize->add_setting(
		'oro_indi_link', array(
			'default'			=>	'',
			'sanitize_callback'	=>	'sanitize_text_field'
		)
	);
	
	$wp_customize->add_control(
		new Oro_Custom_Link_Control(
			$wp_customize,
			'oro_indi_link',
			array(
				'label'		=>	__('Visit our Site', 'oro'),
				'description'	=>	__('Check out more of our cool themes at IndiThemes.com', 'oro'),
				'type'			=>	'oro-link',
				'section'		=>	'oro_upsell_section',
				'settings'		=>	'oro_indi_link',
				'priority'		=>	30,
				'input_attrs'	=>	array(
							'url'	=>	'https://indithemes.com'
							)
			)
		)
	);
 }
 add_action('customize_register', 'oro_upsell_customize_register');