<?php

    get_header();?>
     <div class="page-banner sec">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/foep.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
     
      <div class="page-banner__intro">
     </div>
    </div>  
  </div>
  <div class="container container--narrow page-section">
       <h1 class="title">Study Programs</h1>
      <ul class= "link-list min-list">
      <?php

    //Display programs
    
    while(have_posts()){
        the_post();?>

          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>


        <?php }    ?>
        
       <?php //create pagination
        echo paginate_links();
        ?>
     </ul>   
     
    
        


</div>

    <?php
    get_footer();

?>