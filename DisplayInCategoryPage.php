<?php
namespace QuickCustomPosts;

/**
 * Class DisplayInCategoryPage
 *
 * @package QuickCustomPosts
 */
class DisplayInCategoryPage {
	/**
	 * Types to be added to $query.
	 *
	 * @var array Object
	 */
	protected $post_types;

	/**
	 * DisplayInCategoryPage constructor.
	 *
	 * @param array $post_types Array of post types.
	 */
	public function __construct( array $post_types ) {
		$this->post_types = $post_types;
		add_filter( 'pre_get_posts', array( $this, 'query_post_type' ) );
	}

	/**
	 * Add array of post types to query results.
	 *
	 * @param array $query Wordpress query.
	 *
	 * @return array
	 */
	public function query_post_type( $query ) {
		if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
			$query->set( 'post_type', $this->post_types );

			return $query;
		}
	}
}