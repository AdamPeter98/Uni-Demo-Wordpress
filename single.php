<?php get_header();?>
<?php
    while(have_posts()){


        the_post();?>
              
            <div class="page-banner">
                <div class="page-banner__bg-image" style="background-image: url(<?php 
                
                //banner image
                $img = get_field('page_banner_background_image');
                echo $img['url'];?>);"></div>
                <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title()?></h1>
                <div class="page-banner__intro">
             </div>
                </div>  
            </div>
      
            <div class="container container--narrow page-section">

            <div class="metabox metabox--position-up metabox--with-home-link">
                    <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home </a> <span class="metabox__main">Posted by <?php the_author_posts_link()?> on <?php 
                $date = 'n.j';
                the_time($date)?></span></p>
                    </div>
            <div class="generic-content"><?php the_content()?></div>

            </div>

 <?php }?>

<?php get_footer();?>