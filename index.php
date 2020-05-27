<?php

    get_header();?>
     <div class="page-banner sec">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/foep.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
      
    </div>  
  </div>
  <div class="container container--narrow page-section">
      
      <?php
    //Display blog posts
    
    while(have_posts()){
        the_post();?>
        <div class = "post-item">
            <h2 class = "headline headline--medium headline--post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

            <div class="meta-box">
                <p>Posted by <?php the_author_posts_link()?> on <?php 
                $date = 'n.j';
                the_time($date)?></p>
            </div>

            <div class="generic-content">
                <?php the_excerpt();?>
                <p><a class = "btn btn--blue" href="<?php the_permalink();?>">Continue reading &raquo;</a></p>
            </div>


        </div>
        <?php }    ?>
        
       <?php //create pagination
        echo paginate_links();
        ?>
        
     
    
        


</div>

    <?php
    get_footer();

?>