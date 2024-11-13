<?php
/**
 * gutenbergtheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gutenbergtheme
 */

if ( ! defined( 'WPORGPATH' ) ) {
	define( 'WPORGPATH', get_theme_file_path( '/inc/' ) );
}

add_filter( 'should_load_separate_core_block_assets', '__return_false', 20 );

add_action(
	'enqueue_block_assets',
	function () {
		wp_enqueue_script( 'button-js', get_stylesheet_directory_uri() . '/blocks/button/button.js', array( 'wp-blocks', 'wp-element', 'wp-block-editor' ), null );
		wp_enqueue_style( 'button-css', get_stylesheet_directory_uri() . '/blocks/button/style.css', null, filemtime( __DIR__ . '/blocks/button/style.css' ) );
		wp_enqueue_script( 'link-js', get_stylesheet_directory_uri() . '/blocks/link/link.js', array( 'wp-blocks', 'wp-element', 'wp-block-editor' ), null );
		wp_enqueue_script( 'shared-modifications', get_stylesheet_directory_uri() . '/js/shared-modifications.js', array( 'wp-blocks', 'wp-hooks' ), filemtime( __DIR__ . '/js/shared-modifications.js' ) );
	}
);

/**
 * This function was removed from the Gutenberg plugin in v5.3.
 */
if ( ! function_exists( 'gutenberg_editor_scripts_and_styles' ) ) {
	/**
	 * Scripts & Styles.
	 *
	 * Enqueues the needed scripts and styles when visiting the top-level page of
	 * the Gutenberg editor.
	 *
	 * @since 0.1.0
	 *
	 * @param string $hook Screen name.
	 */
	function gutenberg_editor_scripts_and_styles( $hook ) {

		if ( false ) {
			/**
			 * Scripts
			 */
			$temporary_content = include __DIR__ . '/gutenberg-content-mobile.php';
			$script            = sprintf(
				'wp.domReady( function () { document.querySelector(".wp-site-blocks").innerHTML = %s } );',
				wp_json_encode( do_blocks( $temporary_content['content'] ) )
			);
			wp_add_inline_script( 'wp-edit-post', $script );

			/**
			 * Styles
			 */
			wp_enqueue_style( 'custom-mobile-styles', get_stylesheet_directory_uri() . '/style-mobile.css', false, filemtime( __DIR__ . '/style-mobile.css' ) );
			$block_editor_css = get_block_editor_theme_styles()[0]['css'];
			wp_add_inline_style(
				'custom-mobile-styles',
				$block_editor_css
			);
		} else {
			// Enqueue heartbeat separately as an "optional" dependency of the editor.
			// Heartbeat is used for automatic nonce refreshing, but some hosts choose
			// to disable it outright.
			wp_enqueue_script( 'heartbeat' );

			global $post;

			// Set initial title to empty string for auto draft for duration of edit.
			// Otherwise, title defaults to and displays as "Auto Draft".
			$is_new_post = 'auto-draft' === $post->post_status;

			// Set the post type name.
			$post_type        = get_post_type( $post );
			$post_type_object = get_post_type_object( $post_type );
			$rest_base        = ! empty( $post_type_object->rest_base ) ? $post_type_object->rest_base : $post_type_object->name;

			$preload_paths = array(
				'/',
				'/wp/v2/types?context=edit',
				'/wp/v2/taxonomies?per_page=-1&context=edit',
				'/wp/v2/themes?status=active',
				sprintf( '/wp/v2/%s/%s?context=edit', $rest_base, $post->ID ),
				sprintf( '/wp/v2/types/%s?context=edit', $post_type ),
				sprintf( '/wp/v2/users/me?post_type=%s&context=edit', $post_type ),
				array( '/wp/v2/media', 'OPTIONS' ),
				array( '/wp/v2/blocks', 'OPTIONS' ),
			);

			/**
			 * Preload common data by specifying an array of REST API paths that will be preloaded.
			 *
			 * Filters the array of paths that will be preloaded.
			 *
			 * @param array $preload_paths Array of paths to preload
			 * @param object $post         The post resource data.
			 */
			$preload_paths = apply_filters( 'block_editor_preload_paths', $preload_paths, $post );

			// Ensure the global $post remains the same after
			// API data is preloaded. Because API preloading
			// can call the_content and other filters, callbacks
			// can unexpectedly modify $post resulting in issues
			// like https://github.com/WordPress/gutenberg/issues/7468.
			$backup_global_post = $post;

			$preload_data = array_reduce(
				$preload_paths,
				'rest_preload_api_request',
				array()
			);

			// Restore the global $post as it was before API preloading.
			$post = $backup_global_post;

			wp_add_inline_script(
				'wp-api-fetch',
				sprintf( 'wp.apiFetch.use( wp.apiFetch.createPreloadingMiddleware( %s ) );', wp_json_encode( $preload_data ) ),
				'after'
			);

			wp_add_inline_script(
				'wp-blocks',
				sprintf( 'wp.blocks.setCategories( %s );', wp_json_encode( get_block_categories( $post ) ) ),
				'after'
			);

			// Assign initial edits, if applicable. These are not initially assigned
			// to the persisted post, but should be included in its save payload.
			if ( $is_new_post ) {
				// Override "(Auto Draft)" new post default title with empty string,
				// or filtered value.
				$initial_edits = array(
					'title'   => $post->post_title,
					'content' => $post->post_content,
					'excerpt' => $post->post_excerpt,
				);
			} else {
				$initial_edits = null;
			}

			// Preload server-registered block schemas.
			wp_add_inline_script(
				'wp-blocks',
				'wp.blocks.unstable__bootstrapServerSideBlockDefinitions(' . json_encode( get_block_editor_server_block_settings() ) . ');'
			);

			/**
			 * Filters the allowed block types for the editor, defaulting to true (all
			 * block types supported).
			 *
			 * @param bool|array $allowed_block_types Array of block type slugs, or
			 *                                        boolean to enable/disable all.
			 * @param object $post                    The post resource data.
			 */
			$allowed_block_types = apply_filters( 'allowed_block_types', true, $post );

			// Get all available templates for the post/page attributes meta-box.
			// The "Default template" array element should only be added if the array is
			// not empty so we do not trigger the template select element without any options
			// besides the default value.
			$available_templates = wp_get_theme()->get_page_templates( get_post( $post->ID ) );
			$available_templates = ! empty( $available_templates ) ? array_merge(
				array(
					'' => apply_filters( 'default_page_template_title', __( 'Default template', 'gutenberg' ), 'rest-api' ),
				),
				$available_templates
			) : $available_templates;

			// Media settings.
			$max_upload_size = wp_max_upload_size();
			if ( ! $max_upload_size ) {
				$max_upload_size = 0;
			}

			// Editor Styles.
			global $editor_styles;
			$styles = array();

			if ( $editor_styles && current_theme_supports( 'editor-styles' ) ) {
				foreach ( $editor_styles as $style ) {
					if ( filter_var( $style, FILTER_VALIDATE_URL ) ) {
						$styles[] = array(
							'css' => file_get_contents( $style ),
						);
					} else {
						$file = get_theme_file_path( $style );
						if ( file_exists( $file ) ) {
							$styles[] = array(
								'css'     => file_get_contents( $file ),
								'baseURL' => get_theme_file_uri( $style ),
							);
						}
					}
				}
			}

			// Lock settings.
			$user_id = wp_check_post_lock( $post->ID );
			if ( $user_id ) {
				/**
				 * Filters whether to show the post locked dialog.
				 *
				 * Returning a falsey value to the filter will short-circuit displaying the dialog.
				 *
				 * @since 3.6.0
				 *
				 * @param bool         $display Whether to display the dialog. Default true.
				 * @param WP_Post      $post    Post object.
				 * @param WP_User|bool $user    The user id currently editing the post.
				 */
				if ( apply_filters( 'show_post_locked_dialog', true, $post, $user_id ) ) {
					$locked = true;
				} else {
					$locked = false;
				}

				$user_details = null;
				if ( $locked ) {
					$user         = get_userdata( $user_id );
					$user_details = array(
						'name' => $user->display_name,
					);
					$avatar       = get_avatar( $user_id, 64 );
					if ( $avatar ) {
						if ( preg_match( "|src='([^']+)'|", $avatar, $matches ) ) {
							$user_details['avatar'] = $matches[1];
						}
					}
				}

				$lock_details = array(
					'isLocked' => $locked,
					'user'     => $user_details,
				);
			} else {

				// Lock the post.
				$active_post_lock = wp_set_post_lock( $post->ID );
				$lock_details     = array(
					'isLocked'       => false,
					'activePostLock' => esc_attr( implode( ':', $active_post_lock ) ),
				);
			}

			$editor_settings = array(
				'availableTemplates'     => $available_templates,
				'allowedBlockTypes'      => $allowed_block_types,
				'disableCustomColors'    => get_theme_support( 'disable-custom-colors' ),
				'disableCustomFontSizes' => get_theme_support( 'disable-custom-font-sizes' ),
				'disablePostFormats'     => ! current_theme_supports( 'post-formats' ),
				'titlePlaceholder'       => apply_filters( 'enter_title_here', __( 'Add title', 'gutenberg' ), $post ),
				'bodyPlaceholder'        => apply_filters( 'write_your_story', __( 'Start writing or type / to choose a block', 'gutenberg' ), $post ),
				'isRTL'                  => is_rtl(),
				'autosaveInterval'       => 10,
				'maxUploadFileSize'      => $max_upload_size,
				'allowedMimeTypes'       => get_allowed_mime_types(),
				'styles'                 => $styles,
				'imageSizes'             => gutenberg_get_available_image_sizes(),
				'richEditingEnabled'     => user_can_richedit(),
				'fullscreenMode'         => true,

				// Ideally, we'd remove this and rely on a REST API endpoint.
				'postLock'               => $lock_details,
				'postLockUtils'          => array(
					'nonce'       => wp_create_nonce( 'lock-post_' . $post->ID ),
					'unlockNonce' => wp_create_nonce( 'update-post_' . $post->ID ),
					'ajaxUrl'     => admin_url( 'admin-ajax.php' ),
				),

				// Whether or not to load the 'postcustom' meta box is stored as a user meta
				// field so that we're not always loading its assets.
				'enableCustomFields'     => (bool) get_user_meta( get_current_user_id(), 'enable_custom_fields', true ),
			);

			$post_autosave = gutenberg_get_autosave_newer_than_post_save( $post );
			if ( $post_autosave ) {
				$editor_settings['autosave'] = array(
					'editLink' => get_edit_post_link( $post_autosave->ID ),
				);
			}

			if ( ! empty( $post_type_object->template ) ) {
				$editor_settings['template']     = $post_type_object->template;
				$editor_settings['templateLock'] = ! empty( $post_type_object->template_lock ) ? $post_type_object->template_lock : false;
			}

			$editor_context  = new WP_Block_Editor_Context( array( 'post' => $post ) );
			$editor_settings = get_block_editor_settings( $editor_settings, $editor_context );

			$init_script = <<<JS
			( function() {
				window._wpLoadBlockEditor = new Promise( function( resolve ) {
					wp.domReady( function() {
						resolve( wp.editPost.initializeEditor( 'editor', "%s", %d, %s, %s ) );
					} );
				} );
			} )();
			JS;

			$script = sprintf(
				$init_script,
				$post->post_type,
				$post->ID,
				wp_json_encode( $editor_settings ),
				wp_json_encode( $initial_edits )
			);
			wp_add_inline_script( 'wp-edit-post', $script );

			/**
			 * Scripts
			 */
			wp_enqueue_media(
				array(
					'post' => $post->ID,
				)
			);
			wp_enqueue_editor();
		}

		/**
		 * Styles
		 */
		wp_enqueue_style( 'wp-edit-post' );

		/*
		These styles are usually registered by Gutenberg and register properly when the user is signed in.
		However, if the use is not registered they are not added. For now, include them, but this isn't a good long term strategy

		See: https://github.com/WordPress/wporg-gutenberg/issues/26
		*/
		wp_enqueue_style( 'global-styles' );
		wp_enqueue_style( 'wp-block-library' );
		wp_enqueue_style( 'wp-block-image' );
		wp_enqueue_style( 'wp-block-group' );
		wp_enqueue_style( 'wp-block-heading' );
		wp_enqueue_style( 'wp-block-button' );
		wp_enqueue_style( 'wp-block-paragraph' );
		wp_enqueue_style( 'wp-block-separator' );
		wp_enqueue_style( 'wp-block-columns' );
		wp_enqueue_style( 'wp-block-cover' );
		wp_enqueue_style( 'global-styles-css-custom-properties' );
		wp_enqueue_style( 'wp-block-spacer' );

		/**
		 * Fires after block assets have been enqueued for the editing interface.
		 *
		 * Call `add_action` on any hook before 'admin_enqueue_scripts'.
		 *
		 * In the function call you supply, simply use `wp_enqueue_script` and
		 * `wp_enqueue_style` to add your functionality to the Gutenberg editor.
		 *
		 * @since 0.4.0
		 */
		do_action( 'enqueue_block_editor_assets' );

		// Remove Emoji fallback support
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
}


/**
 * This function was removed from the Gutenberg plugin in v5.4.
 */
if ( ! function_exists( 'gutenberg_get_available_image_sizes' ) ) {
	/**
	 * Retrieve The available image sizes for a post
	 *
	 * @return array
	 */
	function gutenberg_get_available_image_sizes() {
		$size_names = apply_filters(
			'image_size_names_choose',
			array(
				'thumbnail' => __( 'Thumbnail', 'gutenberg' ),
				'medium'    => __( 'Medium', 'gutenberg' ),
				'large'     => __( 'Large', 'gutenberg' ),
				'full'      => __( 'Full Size', 'gutenberg' ),
			)
		);
		$all_sizes  = array();
		foreach ( $size_names as $size_slug => $size_name ) {
			$all_sizes[] = array(
				'slug' => $size_slug,
				'name' => $size_name,
			);
		}
		return $all_sizes;
	}
} // /function_exists()

/**
 * This function was removed from the Gutenberg plugin in v5.4.
 */
if ( ! function_exists( 'gutenberg_get_autosave_newer_than_post_save' ) ) {
	/**
	 * Retrieve a stored autosave that is newer than the post save.
	 *
	 * Deletes autosaves that are older than the post save.
	 *
	 * @param  WP_Post $post Post object.
	 * @return WP_Post|boolean The post autosave. False if none found.
	 */
	function gutenberg_get_autosave_newer_than_post_save( $post ) {
		// Add autosave data if it is newer and changed.
		$autosave = wp_get_post_autosave( $post->ID );
		if ( ! $autosave ) {
			return false;
		}
		// Check if the autosave is newer than the current post.
		if (
		mysql2date( 'U', $autosave->post_modified_gmt, false ) > mysql2date( 'U', $post->post_modified_gmt, false )
		) {
			return $autosave;
		}
		// If the autosave isn't newer, remove it.
		wp_delete_post_revision( $autosave->ID );
		return false;
	}
} // /function_exists()

add_action(
	'template_redirect',
	function() {
		if ( ! is_front_page() ) {
			wp_safe_redirect( home_url( '/' ), 301 );
			exit;
		}

		show_admin_bar( true );

		add_action(
			'wp_enqueue_scripts',
			function() {
				wp_enqueue_script( 'postbox', admin_url( 'js/postbox.min.js' ), array( 'jquery-ui-sortable' ), false, 1 );
				wp_enqueue_style( 'dashicons' );
				wp_enqueue_style( 'media' );
				wp_enqueue_style( 'admin-menu' );
				wp_enqueue_style( 'admin-bar' );
				wp_enqueue_style( 'l10n' );

				if ( false ) {
					return;
				}

				$post = get_post();

				// Temporarily hardcode content
				$temporary_content = include __DIR__ . '/gutenberg-content.php';

				wp_add_inline_script(
					'wp-api-fetch',
					sprintf(
						'wp.apiFetch.use( wp.apiFetch.createPreloadingMiddleware( %s ) );',
						wp_json_encode(
							array(
								'/wp/v2/pages/' . $post->ID . '?context=edit' => array(
									'body' => array(
										'id'             => $post->ID,
										'title'          => array( 'raw' => $temporary_content['title'] ),
										'content'        => array(
											'block_format' => 1,
											'raw'          => $temporary_content['content'],
										),
										'excerpt'        => array( 'raw' => '' ),
										'date'           => '',
										'date_gmt'       => '',
										'modified'       => '',
										'modified_gmt'   => '',
										'link'           => home_url( '/' ),
										'guid'           => array(),
										'parent'         => 0,
										'menu_order'     => 0,
										'author'         => 0,
										'featured_media' => 0,
										'comment_status' => 'closed',
										'ping_status'    => 'closed',
										'template'       => '',
										'meta'           => array(),
										'_links'         => array(),
										'type'           => 'page',
										'status'         => 'pending', // pending is the best state to remove draft saving possibilities.
										'slug'           => '',
										'generated_slug' => '',
										'permalink_template' => home_url( '/' ),
									),
								),
							)
						)
					),
					'after'
				);
			},
			11
		);

		add_action(
			'wp_enqueue_scripts',
			function( $hook ) {
				// Gutenberg requires the post-locking functions defined within:
				// See `show_post_locked_dialog` and `get_post_metadata` filters below.
				include_once ABSPATH . 'wp-admin/includes/post.php';

				gutenberg_editor_scripts_and_styles( $hook );
			}
		);

		add_action(
			'enqueue_block_editor_assets',
			function() {
				if ( false ) {
					return;
				}

				wp_enqueue_script( 'plugin-w-button-js', get_stylesheet_directory_uri() . '/plugins/w-button/index.js', array( 'wp-blocks', 'wp-edit-post', 'wp-plugins', 'wp-components' ), filemtime( __DIR__ . '/plugins/w-button/index.js' ) );
				wp_enqueue_style( 'plugin-w-button-css', get_stylesheet_directory_uri() . '/plugins/w-button/style.css', null, filemtime( __DIR__ . '/plugins/w-button/style.css' ) );

				wp_enqueue_script( 'plugin-disable-features-js', get_stylesheet_directory_uri() . '/plugins/disable-features/index.js', array( 'wp-edit-post', 'wp-plugins' ), filemtime( __DIR__ . '/plugins/disable-features/index.js' ) );

				wp_enqueue_script( 'editor-modifications', get_stylesheet_directory_uri() . '/js/editor-modifications.js', array( 'wp-blocks', 'wp-edit-post', 'wp-hooks', 'wp-i18n', 'wp-plugins', 'wp-element' ), filemtime( __DIR__ . '/js/editor-modifications.js' ) );
				wp_enqueue_style( 'custom-editor-styles', get_stylesheet_directory_uri() . '/style-editor.css', false, filemtime( __DIR__ . '/style-editor.css' ) );
			}
		);

		// Disable post locking dialogue.
		add_filter( 'show_post_locked_dialog', '__return_false' );

		// Everyone can richedit! This avoids a case where a page can be cached where a user can't richedit.
		$GLOBALS['wp_rich_edit'] = true;
		add_filter( 'user_can_richedit', '__return_true', 1000 );

		// Homepage is always locked by @wordpressdotorg
		// This prevents other logged-in users taking a lock of the post on the front-end.
		add_filter(
			'get_post_metadata',
			function( $value, $post_id, $meta_key ) {
				if ( $meta_key !== '_edit_lock' ) {
					return $value;
				}

				// This filter is only added on a front-page view of the homepage for this site, no other checks are needed here.

				return time() . ':5911429'; // WordPressdotorg user ID
			},
			10,
			3
		);

		// Disable use XML-RPC
		add_filter( 'xmlrpc_enabled', '__return_false' );

		// Disable X-Pingback to header
		function disable_x_pingback( $headers ) {
			unset( $headers['X-Pingback'] );

			return $headers;
		}
		add_filter( 'wp_headers', 'disable_x_pingback' );

		function frontenberg_site_title() {
			return esc_html__( 'The new Gutenberg editing experience', 'wporg' );
		}

		// Disable Jetpack Blocks for now.
		add_filter( 'jetpack_gutenberg', '__return_false' );
	}
);

/**
 * Let unauthenticated users embed media in Frontenberg.
 */
function frontenberg_enable_oembed( $all_caps ) {
	if (
		0 === strpos( $_SERVER['REQUEST_URI'], '/gutenberg/wp-json/oembed/1.0/proxy' ) ||
		0 === strpos( $_SERVER['REQUEST_URI'], '/gutenberg/wp-json/gutenberg/v1/block-renderer/core/archives' ) ||
		0 === strpos( $_SERVER['REQUEST_URI'], '/gutenberg/wp-json/gutenberg/v1/block-renderer/core/latest-comments' )
	) {
		$all_caps['edit_posts'] = true;
	}

	return $all_caps;
}
add_filter( 'user_has_cap', 'frontenberg_enable_oembed' );

/**
 * Ajax handler for querying attachments on the front-end.
 *
 * The default handler is used for wp-admin/upload.php but this is used for all front-end requests.
 *
 * @since 3.5.0
 */
function frontenberg_wp_ajax_query_attachments() {
	if ( current_user_can( 'manage_options' ) && str_contains( $_SERVER['HTTP_REFERER'] ?? '', '/wp-admin/' ) ) {
		// Let the core handler handle this.
		return;
	}

	if ( 97589 !== absint( $_REQUEST['post_id'] ) ) {
		wp_send_json_error();
	}

	$query = isset( $_REQUEST['query'] ) ? (array) $_REQUEST['query'] : array();
	$keys  = array(
		's',
		'order',
		'orderby',
		'posts_per_page',
		'paged',
		'post_mime_type',
		'post_parent',
		'post__in',
		'post__not_in',
		'year',
		'monthnum',
	);
	foreach ( get_taxonomies_for_attachments( 'objects' ) as $t ) {
		if ( $t->query_var && isset( $query[ $t->query_var ] ) ) {
			$keys[] = $t->query_var;
		}
	}

	$query = array_intersect_key( $query, array_flip( $keys ) );

	// Validate that the input looks correct.
	foreach ( $query as $var => $val ) {
		if ( empty( $val ) || is_scalar( $val ) ) {
			continue;
		}

		if ( in_array( $var, [ 'post__in', 'post__not_in', 'post_mime_type' ] ) ) {
			// These should be arrays of strings
			$scalar = array_filter( $val, 'is_scalar' );

			if ( wp_is_numeric_array( $val ) && $scalar == $val ) {
				continue;
			}
		}

		wp_send_json_error( "The value of $var doesn't look right to me." );
	}

	$query['post_type'] = 'attachment';
	if ( MEDIA_TRASH
		&& ! empty( $_REQUEST['query']['post_status'] )
		&& 'trash' === $_REQUEST['query']['post_status'] ) {
		$query['post_status'] = 'trash';
	} else {
		$query['post_status'] = 'inherit';
	}

	// Filter query clauses to include filenames.
	if ( isset( $query['s'] ) ) {
		add_filter( 'posts_clauses', '_filter_query_attachment_filenames' );
	}

	if ( empty( $query['post__in'] ) ) {
		$query['post__in'] = range( 97654, 97659 );
	}

	/**
	 * Filters the arguments passed to WP_Query during an Ajax
	 * call for querying attachments.
	 *
	 * @since 3.7.0
	 *
	 * @see WP_Query::parse_query()
	 *
	 * @param array $query An array of query variables.
	 */
	$query = apply_filters( 'ajax_query_attachments_args', $query );
	$query = new WP_Query( $query );

	$posts = array_map( 'wp_prepare_attachment_for_js', $query->posts );
	$posts = array_filter( $posts );

	wp_send_json_success( $posts );
}
add_action( 'wp_ajax_nopriv_query-attachments', 'frontenberg_wp_ajax_query_attachments' );
add_action( 'wp_ajax_query-attachments',        'frontenberg_wp_ajax_query_attachments', 0 ); // Core is at 1, we want to hook in earlier.

/**
 * Removes tagline, which is used more as a description on this site.
 *
 * @param array $title {
 *     The document title parts.
 *
 *     @type string $title   Title of the viewed page.
 *     @type string $page    Optional. Page number if paginated.
 *     @type string $tagline Optional. Site description when on home page.
 *     @type string $site    Optional. Site title when not on home page.
 * }
 */
function gutenberg_title_parts( $title ) {
	unset( $title['tagline'] );

	return $title;
}
add_filter( 'document_title_parts', 'gutenberg_title_parts' );

if ( ! function_exists( 'gutenbergtheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gutenbergtheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gutenbergtheme, use a find and replace
		 * to change 'gutenbergtheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gutenbergtheme', get_template_directory() . '/languages' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// We use the excerpt for blog description
		add_post_type_support( 'page', 'excerpt' );
	}
endif;
add_action( 'after_setup_theme', 'gutenbergtheme_setup' );

/**
 * Enqueue scripts and styles.
 */
function gutenbergtheme_scripts() {
	wp_enqueue_style( 'gutenbergtheme-style', get_stylesheet_uri(), array(), 14 );
}
add_action( 'wp_enqueue_scripts', 'gutenbergtheme_scripts' );

/**
 * Add meta tags for richer social media integrations.
 */
function add_social_meta_tags() {
	$post          = get_post();
	$excerpt       = get_the_excerpt( $post );
	$default_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
	$site_title    = function_exists( '\WordPressdotorg\site_brand' ) ? \WordPressdotorg\site_brand() : 'WordPress.org';

	$og_fields = array(
		'og:title'       => esc_html__( 'The new Gutenberg editing experience', 'wporg' ),
		'og:description' => $excerpt,
		'og:site_name'   => $site_title,
		'og:type'        => 'website',
		'og:url'         => home_url(),
		'og:image'       => esc_url( $default_image ),
	);

	foreach ( $og_fields as $property => $content ) {
		printf(
			'<meta property="%1$s" content="%2$s" />' . "\n",
			esc_attr( $property ),
			esc_attr( $content )
		);
	}

	printf(
		'<meta name="description" content="%1$s" />' . "\n",
		esc_attr( $og_fields['og:description'] )
	);

	printf(
		'<meta name="twitter:card" content="%1$s" />' . "\n",
		esc_attr( 'summary_large_image' )
	);

	printf(
		'<meta name="twitter:creator" content="%1$s" />' . "\n",
		esc_attr( '@WordPress' )
	);
}
add_action( 'wp_head', 'add_social_meta_tags' );
