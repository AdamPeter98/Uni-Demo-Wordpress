<?php

    function pageBanner(){
        //sets up the banner 
        ?>
        
        <div class="page-banner">
                <div class="page-banner__bg-image" style="background-image: url(<?php 
                
                //banner image
                $img = get_field('page_banner_background_image');
                echo $img['url'];

            
                
                ?>);"></div>
                <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title()?></h1>
                <div class="page-banner__intro">
                    <p>
                        <?php the_field('page_banner_subtitle')?>
                    </p> </div>
                </div>  
            </div>


 <?php  }


    function ubb_files(){
        wp_enqueue_script('main.js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,microtime(),true);
        wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"');
        wp_enqueue_style('ubb_main_styles',get_stylesheet_uri(),microtime());
    }

    add_action('wp_enqueue_scripts','ubb_files');

    function uni_fe(){
        register_nav_menu('headerMenuLocation','Header Menu Location');
        register_nav_menu('footerLocation1','Footer Location One');
        register_nav_menu('footerLocation2','Footer Location Two');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('pageBanner',1500,750,true);

    }

    add_action('after_setup_theme','uni_fe');

    function uni_adjust_queries($query){


        //Programs page

        if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
            $query->set('orderby','title');
            $query->set('order','ASC');
            $query->set('posts_per_page', -1); //display all programs
        }


        //Events page

        if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
        $query->set('meta_key','event_data');
        $query->set('orderby', 'meta_value_num');
        $query->set('posts_per_page','5');
        }
    }

    add_action('pre_get_posts','uni_adjust_queries');

?>
