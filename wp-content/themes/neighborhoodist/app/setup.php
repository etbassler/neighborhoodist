<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
		
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_style('sage/style.css', '/wp-content/themes/neighborhoodist/resources/style.css', false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

   // wp_enqueue_style('sage/fonts', 'https://fonts.googleapis.com/css?family=opensans', false, null);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
    add_theme_support('soil', [
        'clean-up',
        'disable-rest-api',
        'disable-asset-versioning',
        'disable-trackbacks',
        'google-analytics' => 'UA-XXXXX-Y',
        'js-to-footer',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);
    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});

/**
 * Load up some webfawnts asynchronously.
 * @link https://github.com/typekit/webfontloader
 */
function add_webfontloader() { ?>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['OpenSans:100,300,400,700,900']
    },
    typekit: {
    id: 'efs7nkv'
  }
  });
</script>

<?php }
add_action('wp_footer',  __NAMESPACE__ . '\\add_webfontloader');

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

  }, 10, 4 );

  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', __NAMESPACE__ . '\\cc_mime_types' );

  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', __NAMESPACE__ . '\\fix_svg' );

  function colors_acf_input_admin_footer() { ?>
    <script type="text/javascript">
    (function($) {
    acf.add_filter('color_picker_args', function( args, $field ){
    // add the hexadecimal codes here for the colors you want to appear as swatches
    args.palettes = ['#4C9FEB', '#0235BB', '#12122F']
    // return colors
    return args;
    });
    })(jQuery);
    </script>
    <?php }
add_action('acf/input/admin_footer',  __NAMESPACE__ . '\\colors_acf_input_admin_footer');

function fontawesome() {
    echo '<script src="https://kit.fontawesome.com/3d1d77a063.js" crossorigin="anonymous"></script>';
  }
  add_action( 'wp_head', __NAMESPACE__ . '\\fontawesome' );

  function restrict_blocks( $allowed_blocks) {
    $allowed_blocks = array(
        'acf/related',
        'acf/home',
        'acf/two-column-text',
        'acf/before-after',
        'acf/form',
        'acf/text',
        'acf/gallery',
        'acf/image',
        'acf/cta',
    );
    return $allowed_blocks;
}
add_filter( 'allowed_block_types',  __NAMESPACE__ . '\\restrict_blocks');

add_theme_support( 'align-wide' );
