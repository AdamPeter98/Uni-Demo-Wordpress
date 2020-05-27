<?php get_header();?>
<?php
    while(have_posts()){

        the_post();?>
              
            <div class="page-banner">
                <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/foep.jpg')?>);"></div>
                <div class="page-banner__content container container--narrow">
                <h1 class="page-banner__title"><?php the_title()?></h1>
                <div class="page-banner__intro">
                    </div>
                </div>  
            </div>
      
            <div class="container container--narrow page-section">

            <div class="metabox metabox--position-up metabox--with-home-link">
                    <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program');?>"><i class="fa fa-home" aria-hidden="true"></i> Study Programs </a> <span class="metabox__main"><?php the_title()?></span></p>
                    </div>
            <div class="generic-content"><?php the_content()?></div>
            <br>
            <br>

            


            <?php
            
            //Show professors related to this program

            $relatedProf = new WP_Query(array(
                'posts_per_page' =>-1,
                'post_type' => 'professor',
                'orderby' => 'title',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"'.get_the_ID().'"'

                    )
                )
            ));

           if($relatedProf->have_posts()){

            echo '<ul class="professor-cards">';
            while($relatedProf->have_posts()){
                $relatedProf->the_post();?>
                <li class="professor-card__list-item">
                <a class="professor-card" href="<?php the_permalink();?>">
                
                    <img class = "professor-card__image"
                    src="<?php the_post_thumbnail_url();?>"
                    >
                    <span class="professor-card__name"><?php
                    the_title();
                    ?></span>

                </a>
                
                </li>

            <?php }
                echo '</ul>';
           }

            ?>

            </div>

 <?php }?>

<?php get_footer();?>