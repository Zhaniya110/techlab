<?php


if (!function_exists('techlab_theme_setup')) {
    /*Theme setup*/
    function techlab_theme_setup()
    {
        load_theme_textdomain('techlab', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumnails');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'techlab')


            )



        );
    }


}

add_action('after_setup_theme', 'techlab_theme_setup');


function techlab_assets()
{


    //Enqueue CSS Files
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400;1,600&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), 'v5.1.1', 'all');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '4.1.0', 'all');

    //Main Files
    wp_enqueue_style('techlab', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');

    //Js Files
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), 'v5.3.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {

        wp_enqueue_script('comment-reply');

    }



}

add_action('wp_enqueue_scripts', 'techlab_assets');


function techlab()
{
$args = array(
'labels' => array(
'name' => 'TechLab курсы',
'singular_name' => 'TechLab курс'
),
'hierarchical' => true ,// true - like page, false - like post
'public' => true,
'menu_icon' => 'dashicons-welcome-learn-more',
'has_archive'=> true,
'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.02188 3.0166C2.00986 3.02865 2 4.03912 2 5.26216V7.4858H4.22995H6.45991V5.24636V3.00696L4.25184 3.00084C3.03742 2.99747 2.03394 3.00458 2.02188 3.0166ZM13.8459 3.02276C13.8372 3.03141 13.8301 4.03928 13.8301 5.26246V7.48641L16.0506 7.47665L18.2711 7.4669V5.23778V3.00862L16.0664 3.00783C14.8537 3.00737 13.8545 3.0141 13.8459 3.02276ZM7.93394 10.1312V17.2371H10.164H12.394L12.3845 10.141L12.375 3.04479L10.1544 3.03504L7.93394 3.02529V10.1312ZM13.8679 15.045V17.2371H16.0789H18.29V15.045V12.8528H16.0789H13.8679V15.045Z" fill="black"/>
</svg>'),
'supports' => array('title','editor','thumnail'),
'rewrite' => array('slug','techlab-courses')
);
register_post_type('techlab', $args);
}

add_action('init','techlab');



function techlab_taxonomy(){
 $args = array (
               
            'labels' => array(

                          'name' => 'Категории Курсов',
                          'singular_name' => 'Курс' 
                                
            ),
            'public' => true,
            'hierarchical' => true,

        );
 register_taxonomy( 'Категории Курсов', array('techlab'), $args );
}

add_action('init','techlab_taxonomy');

