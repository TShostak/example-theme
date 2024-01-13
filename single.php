<?php get_header() ?>

  
    <div id="content" class="page text-page">

        <div class="container">

            <div class="text-page-wrap">

                <h1><?php echo get_the_title(); ?></h1>

                <?php the_content(); ?>

            </div>

        </div>

    </div><!-- /.content -->

<?php get_footer() ?>