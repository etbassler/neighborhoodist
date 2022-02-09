<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{
    protected $acf = true;


    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public function primarymenu()
    {
        $args = array(
          'theme_location'    => 'primary_navigation',
          'menu_class'        => 'navbar-nav',
          'walker'            => new \App\wp_bootstrap4_navwalker(),
          'depth' => 2
        );
        return $args;
    }

    public function getRelatedContent()
    {
        $overrideIDs = get_field('more_featured_homes_overrides');
        if ($overrideIDs !== null && count($overrideIDs) > 0 ){
            $overrideargs = array(
            'post_type' => ['home'],
            'post__in'      => $overrideIDs
            );
            $overridequery = new WP_Query($overrideargs);
            $relatedargs = array(
                'posts_per_page'	=> 3 - count($overrideIDs),
                'post_type'		=> ['home'],
                'post__not_in'      => $overrideIDs
                // 'meta_key'		=> 'color',
                // 'meta_value'	=> 'red'
            );
        } else {
        $relatedargs = array(
            'posts_per_page'	=> 3 ,
            'post_type'		=> ['home'],
            'post__not_in'      => $overrideIDs
            // 'meta_key'		=> 'color',
            // 'meta_value'	=> 'red'
        );
    }
        // query
        $relatedquery = new WP_Query( $relatedargs );

        if ($overrideIDs !== null && count($overrideIDs) > 0){
            $wp_query = new WP_Query();
            $wp_query->posts = array_merge( $overridequery->posts, $relatedquery ->posts );

            //populate post_count count for the loop to work correctly
            $wp_query->post_count = $overridequery->post_count + $relatedquery ->post_count;
            return $wp_query;
        }
        return $relatedquery;
    }
    /**
     * Outputs an image from ACF ID.
     *
     * @echo string | (an img tag)
     */
    public function acfimg( $id = null, $size = 'thumbnail', $classes = '' ) {
        if( !$id)
        return;
      echo wp_get_attachment_image( $id, $size, "", array( "class" => $classes ) );
    }

     /**
     * Outputs a link from ACF ID.
     *
     * @echo string | (an img tag)
     */
    public function acflink( $array = [],  $classes = '' ) {
        if( empty($array))
        return;
      echo '<a class="'. $classes .'" href="'. $array->url .'" target="'. $array->target .'">'. $array->title .'</a>';
    }

    public function get_post_top_term($id = '') {
        $term_list = wp_get_post_terms($id, 'category', array("fields" => "names"));

        if ($term_list[0] !== "Uncategorized"){
            return $term_list[0];
        } else {
            return false;
        }
    }

    public function get_post_partial_logo($id = '') {
        $partialLogo = get_field('partial_logo',$id);

        if ($partialLogo){
        $img = "<img src='".$partialLogo['url']."' alt='".$partialLogo['alt']."'/>";
        return $img;
        } else{
            return false;
        }
    }
}