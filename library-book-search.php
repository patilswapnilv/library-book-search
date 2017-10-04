<?php

/**
 *
 * This file is read by WordPress to generate the plugin information in the plugin Dashboard. This file also includes all of the dependencies used by the * plugin, registers the activation and deactivation functions, and defines a
 * function that starts the plugin.
 *
 * @author 				patilswapnnilv
 * @link 				  https://github.com/patilswapnilv/library-book-search/
 * @since 				1.0.0
 * @package 			library-book-search
 *
 * @wordpress-plugin
 * Plugin Name: 		Library Book Search
 * Plugin URI: 			https://github.com/patilswapnilv/library-book-search
 * Description: 		A simple way to manage books opening posts
 * Version: 			  1.0.0
 * Author: 				  patilswapnnilv
 * Author URI: 			https://github.com/patilswapnilv/library-book-search/
 * License: 			  GPL-2.0+
 * License URI: 		http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: 		library_book_search
 * Domain Path: 		/languages
 */

 function library_register_my_cpts() {

	/**
	 * Post Type: Book.
	 */

	$labels = array(
		"name" => __( "Book", "library_book_search" ),
		"singular_name" => __( "Books", "library_book_search" ),
		"menu_name" => __( "Library", "library_book_search" ),
		"all_items" => __( "All Books", "library_book_search" ),
		"add_new" => __( "Add New", "library_book_search" ),
		"add_new_item" => __( "Add New Book", "library_book_search" ),
		"edit_item" => __( "Edit Book Details", "library_book_search" ),
		"new_item" => __( "New Book", "library_book_search" ),
		"view_item" => __( "View Book Detail", "library_book_search" ),
		"view_items" => __( "View Books' Details", "library_book_search" ),
		"search_items" => __( "Search for a Book", "library_book_search" ),
		"not_found" => __( "No Book Found", "library_book_search" ),
		"not_found_in_trash" => __( "No Book Found in Trash", "library_book_search" ),
		"featured_image" => __( "Featured Image", "library_book_search" ),
		"set_featured_image" => __( "Set Featured Image", "library_book_search" ),
		"remove_featured_image" => __( "Remove Featured Image", "library_book_search" ),
		"use_featured_image" => __( "Use Featured Image", "library_book_search" ),
		"archives" => __( "Books Archives", "library_book_search" ),
		"insert_into_item" => __( "Insert in Book", "library_book_search" ),
		"uploaded_to_this_item" => __( "Uploaded to this Book Detail", "library_book_search" ),
		"filter_items_list" => __( "Filter Books List", "library_book_search" ),
		"items_list_navigation" => __( "Books List Navigation", "library_book_search" ),
		"items_list" => __( "Books List", "library_book_search" ),
		"attributes" => __( "Book Attributes", "library_book_search" ),
	);

	$args = array(
		"label" => __( "Book", "library_book_search" ),
		"labels" => $labels,
		"description" => "CPT for Book library",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "library",
		"has_archive" => "library",
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "library", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-book-alt",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "library", $args );
}

add_action( 'init', 'library_register_my_cpts' );


function library_register_my_taxes() {

	/**
	 * Taxonomy: Authors.
	 */

	$labels = array(
		"name" => __( "Authors", "library_book_search" ),
		"singular_name" => __( "Author", "library_book_search" ),
		"menu_name" => __( "Authors", "library_book_search" ),
		"all_items" => __( "All Authors", "library_book_search" ),
		"edit_item" => __( "Edit Authors", "library_book_search" ),
		"view_item" => __( "View Authors", "library_book_search" ),
		"update_item" => __( "Update Author Name", "library_book_search" ),
		"add_new_item" => __( "Add New Author", "library_book_search" ),
		"new_item_name" => __( "New Author Name", "library_book_search" ),
		"parent_item" => __( "Parent Author", "library_book_search" ),
		"parent_item_colon" => __( "Parent Authors Colon", "library_book_search" ),
		"search_items" => __( "Search Authors", "library_book_search" ),
		"popular_items" => __( "Popular Authors", "library_book_search" ),
		"add_or_remove_items" => __( "Add or Remove Authors", "library_book_search" ),
		"not_found" => __( "No Authors Found", "library_book_search" ),
		"no_terms" => __( "No Authors", "library_book_search" ),
		"items_list_navigation" => __( "Authors List Navigation", "library_book_search" ),
		"items_list" => __( "Authors List", "library_book_search" ),
	);

	$args = array(
		"label" => __( "Authors", "library_book_search" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Authors",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'writer', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "writers",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "writer", array( "library" ), $args );

	/**
	 * Taxonomy: Publishers.
	 */

	$labels = array(
		"name" => __( "Publishers", "library_book_search" ),
		"singular_name" => __( "Publisher", "library_book_search" ),
		"menu_name" => __( "Publishers", "library_book_search" ),
		"all_items" => __( "All Publishers", "library_book_search" ),
		"edit_item" => __( "Edit Publisher", "library_book_search" ),
		"view_item" => __( "View Publishers", "library_book_search" ),
		"update_item" => __( "Update Publishers Name", "library_book_search" ),
		"add_new_item" => __( "Add New Publisher", "library_book_search" ),
		"new_item_name" => __( "New Publisher Name", "library_book_search" ),
		"parent_item" => __( "Parent Publisher", "library_book_search" ),
		"parent_item_colon" => __( "Parent Publisher Colon", "library_book_search" ),
		"search_items" => __( "Search Publishers", "library_book_search" ),
		"popular_items" => __( "Popular Publishers", "library_book_search" ),
		"add_or_remove_items" => __( "Add or Remove Publishers", "library_book_search" ),
		"not_found" => __( "No Publishers Found", "library_book_search" ),
		"no_terms" => __( "No Publishers", "library_book_search" ),
		"items_list_navigation" => __( "Publishers List Navigation", "library_book_search" ),
		"items_list" => __( "Publishers List", "library_book_search" ),
	);

	$args = array(
		"label" => __( "Publishers", "library_book_search" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Publishers",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'publishers', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "publishers",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "publishers", array( "library" ), $args );
}

add_action( 'init', 'library_register_my_taxes' );

// Add term page
function library_taxonomy_add_new_meta_field() {
	// this will add the custom meta field to the add new term page
	?>
	<div class="form-field">
		<label for="term_meta[custom_term_meta]"><?php _e( 'Example meta field', 'library_book_search' ); ?></label>
		<input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="">
		<p class="description"><?php _e( 'Enter a value for this field','library_book_search' ); ?></p>
	</div>
<?php
}
add_action( 'writer_add_form_fields', 'library_taxonomy_add_new_meta_field', 10, 2 );
