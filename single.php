<?php get_header();?>

    <section class="row">
        <div class="col-lg-3">
            <!-- Sidebar -->
            <?php if( is_active_sidebar('page-sidebar')): ?>

            <?php dynamic_sidebar('page-sidebar');?>

            <?php endif;?>
        </div>


        <!-- Hier Code für die Seiten Allgemein -->
        <div class="col-lg-9">
            <div class="container">
                <h1><?php the_title();?></h1>


                <!--Hier Geändert für Bild für Thumpnail-->
                <?php if(has_post_thumbnail()):?>

                <img src="<?php the_post_thumbnail_url('largest')?>" class="img-fluid">

                <?php endif; ?>

                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php get_footer();?>