<?php get_header();?>
    <section class="row">
        <div class="col-lg-3">
                <!-- Sidebar -->
                <?php if( is_active_sidebar('blog-sidebar')): ?>

                <?php dynamic_sidebar('blog-sidebar');?>

                <?php endif;?>
        </div>
    


        <div class="col-lg-9">
            <!-- Hier Code für den Blogpost Allgemein -->
            <div class="container">
                <h1><?php single_cat_title();?></h1>

                <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('smallest')?>" class="img-fluid">
                <?php endif; ?>
                
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                    <h3><?php the_title();?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink();?>" class="btn btn-sucess" style="color: green;">mehr</a>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </section>

<?php get_footer();?>