<?php 

/*Template Name: Koleksi Buku*/

get_header();?>


<div class="content">

    <div class="container">
    
        <div class="row" >
                            
            <div class="col-12">
            
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