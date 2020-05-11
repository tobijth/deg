<!-- Hier Code für die Front Page -->
<?php get_header();?>
    <section class="row">
        <div class="col-lg-3">

            <!-- Sidebar -->
            <?php if( is_active_sidebar('front-sidebar')): ?>

            <?php dynamic_sidebar('front-sidebar');?>

            <?php endif;?>

        </div>
        <div class="col-lg-9">
            <div class="container">
                <h1><?php the_title();?></h1>

                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>
            </div>          
        </div>
    </section>
<?php get_footer();?>
