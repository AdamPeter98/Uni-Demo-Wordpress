<?php get_header();?>


<div class="page-banner">
  <div class="page-banner__bg-image" style="
  object-fit: cover;
  background-image: url(<?php echo get_theme_file_uri('/images/d.jpg')?>);
  
  "></div>
    <div class="page-banner__content_main container t-center c-white">
    
      <h1 class="headline headline--large">UBB-FSEGA</h1>
      <h2 class="headline headline--medium">Best Romanian higher education institution in Economics & Business.</h2>
      <br>
      <a href="<?php echo get_post_type_archive_link('program')?>" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
       
        <?php 
          $homepageEvents = new WP_Query(array(

            'posts_per_page' =>3, // publish all posts
            'post_type'=>'event',
            
          

          ));
        
          while($homepageEvents->have_posts()){
            $homepageEvents->the_post(); ?>
           
           <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month"><?php
            //custom fields plugin
            $date = new DateTime(get_field('event_date'));
            echo $date->format('M');
           ?></span>
            <span class="event-summary__day"><?php
            echo $date->format('d');
            ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title()?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 20)?> <a href="<?php the_permalink();?>" class="nu gray">Learn more</a></p>
          </div>
        </div>



          <?php }


        ?>

      
        
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/events');?>" class="btn btn--blue">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
        <?php 
        
        $homepage = new WP_Query(array(
          'posts_per_page' =>3
        )); 


        while($homepage->have_posts()){

         $homepage->the_post();?>
          <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink();?>">
            <span class="event-summary__month"><?php the_time('M');?></span>
            <span class="event-summary__day"><?php the_time('d');?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(),20);?> <a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>
          </div>
        </div>
          <?php
        }
        wp_reset_postdata();

        ?>

        
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog');?>" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>



<?php get_footer();?>
