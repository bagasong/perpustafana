<?php get_header();?>


<div class="content">

    <div class="container">
        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('post_image');?>" alt="<?php the_title();?> class="img-fluid mb-5"> 
        <?php endif;?>

        <div class="row" style="padding: 2rem 0 0 0">
                    
            <!-- <div class="col-lg-3">
                <div class="sticky-top" style="top:50px">
                    <?php get_sidebar();?>
                </div>
            </div>    -->

            <div class="col">

                <div class="title_page">
                    <?php the_title();?>
                </div>

                <?php if(have_posts()) : while(have_posts()) : the_post();?>

                <?php the_content();?>

            <?php endwhile ; else: endif;?>

            </div>
            
        </div>
        
        

        

    </div>

</div>


<?php get_footer();?>  
