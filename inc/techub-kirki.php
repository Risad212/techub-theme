<?php

new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub Options', 'techub' ),
		'description' => esc_html__( 'My Panel Description.', 'techub' ),
	]
);


new \Kirki\Section(
	'techub_header_section',
	[
		'title'       => esc_html__( 'Header Info', 'techub' ),
		'description' => esc_html__( 'My Section Description.', 'techub' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);


new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting',
		'label'       => esc_html__( 'Switch Field', 'techub' ),
		'description' => esc_html__( 'Simple switch control', 'techub' ),
		'section'     => 'techub_header_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'techub' ),
			'off' => esc_html__( 'Disable', 'techub' ),
		],
	]
);


new \Kirki\Field\Text(
	[
		'settings' => 'address_text',
		'label'    => esc_html__( 'Header Address Text', 'techub' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'Manchester 21, Zurich, CH', 'techub' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'address_url',
		'label'    => esc_html__( 'Header Address Url', 'techub' ),
		'section'  => 'techub_header_section',
		'default'  => '#',
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'header_email',
		'label'    => esc_html__( 'Header Email', 'techub' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( 'techub@email.com', 'techub' ),
		'priority' => 10,
	]
);


// header social section
new \Kirki\Section(
	'techub_header_social_section',
	[
		'title'       => esc_html__( 'Header Social Section', 'techub' ),
		'description' => esc_html__( 'My Section Description.', 'techub' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);