# Quick Custom Posts

## Quickly Create Custom Posts in Wordpress.


Download to plugins folder and activate.

In the quick_custom_posts function:
Define your textdomain in the $textdomain variable.
Define the options.

```$rewrite                = array(
	'slug'       => 'cpt',
	'with_front' => true,
	'pages'      => true,
);```


```$settings_custom_post_1 = array(
	'menu_icon'       => 'dashicons-building',
	'public'          => true,
	'has_archive'     => true,
	'capability_type' => 'post',
	'query_var'       => true,
	'show_ui'         => true,
	'show_in_menu'    => true,
	'taxonomies'      => array( 'category' , 'post_tag'),
	'rewrite'         => $rewrite,
	'supports'        => array(
		'title',
		'editor',
		'excerpt',
		'genesis-seo',
		'thumbnail',
		'genesis-layouts',
		'genesis-cpt-archives-settings',
	),
);```

Use make function to create the custom post type (handle, singular name, plural name).

`$custom_post_1->make( 'cpt', 'CPT', 'CPTs', $settings_custom_post_1 );`


Add your new custom post type to the main loop.

```$add_to_category_page = new DisplayInCategoryPage( array(
	'nav_menu_item',
	'post',
	'cpt',
	'page'
) );```



