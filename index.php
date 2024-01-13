<?php get_header() ?>

    <div id="content" class="page">

    	<?php

        // Check value exists.
        if( have_rows('content') ):

            // Loop through rows.
            while ( have_rows('content') ) : the_row(); ?>

                <? if( get_row_layout() == 'main_banner' ): ?>

                    <section class="s-banner" style="background-image: url(<?php echo get_sub_field('background_image') ?>);" >
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-10 offset-lg-1 col-lg-9 col-xl-8 col-xxl-10">
                                    <div class="s-banner__content" data-aos="fade-up" data-aos-delay="100">
                                        <h1><?php echo get_sub_field('headline'); ?></h1>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </section>

                <? elseif( get_row_layout() == 'secondary_banner' ): ?>

                    <section class="s-banner-secondary" style="background-image: url(<?php echo get_sub_field('background_image') ?>);">
                        <div class="container">
                            
                            <div class="s-banner-secondary__content">
                                <?php if ( get_sub_field('headline') ): ?>
                                    <h1 data-aos="fade-up" data-aos-delay="100"><?php echo get_sub_field('headline'); ?></h1>
                                <?php endif ?>
                                <?php if ( get_sub_field('subheadind') ): ?>
                                    <div class="subheading" data-aos="fade-up" data-aos-delay="200"><?php echo get_sub_field('subheadind'); ?></div>
                                <?php endif ?>
                            </div>
                                
                        </div>
                    </section>

                <? elseif( get_row_layout() == 'about_us' ): ?>
                    
                    <section class="s-about-us" data-aos="fade-up">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-10 offset-lg-1 col-xxl-8 offset-xxl-2">
                                    <div class="s-about-us__wrap">
                                        <?php if (get_sub_field('text')): ?>
                                            <div class="s-about-us__text">
                                                <p><?php echo get_sub_field('text'); ?></p>
                                            </div>
                                        <?php endif ?>
                                        <?php 
                                        $button = get_sub_field('button');
                                        if( $button ): 
                                            $link_url = $button['url'];
                                            $link_title = $button['title'];
                                            $link_target = $button['target'] ? $button['target'] : '_self';
                                            ?>
                                            <a class="btn btn-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                <? elseif( get_row_layout() == 'services' ): ?>

                    <section class="s-services">
                        <div class="container">

                            <?php if ( get_sub_field('headline') ): ?>
                                <h2 class="section-title lined-title" data-aos="move-left">
                                    <span><?php echo get_sub_field('headline'); ?></span>
                                </h2>
                            <?php endif ?>

                            <div class="row">
                                <?php if( have_rows('services_items') ):
                                    $counter = 0; ?>

                                    <?php while( have_rows('services_items') ) : the_row(); ?>

                                        <div class="col-lg-4 col-md-6 col-sm-12 s-services__column" data-aos="fade-up" data-aos-delay="<?php echo $counter ?>00">
                                            <div class="s-services__card">

                                                <?php if ( get_sub_field('title') ): ?>
                                                    <h3>
                                                        <span class="icon">
                                                            <img src="<?php echo get_template_directory_uri() ?>/images/arrow-orange.png" alt="Arrow" />
                                                        </span>
                                                        <?php echo get_sub_field('title'); ?>
                                                    </h3>
                                                <?php endif ?>
                                                <div class="copy">
                                                    <?php echo get_sub_field('copy'); ?>
                                                </div>
                                                <?php 
                                                $link = get_sub_field('link');
                                                if( $link ): 
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                    <a class="link link-underlined" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    <?php $counter++; 
                                endwhile;

                                // No value.
                                else :
                                    // Do something...
                                endif; ?>
                            </div>

                        </div>
                    </section>

                <? elseif( get_row_layout() == 'cta' ): ?>

                    <section class="s-cta" style="background-image: url(<?php echo get_sub_field('background') ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xxl-6 offset-xxl-3">
                                    <div class="s-cta__content">

                                        <?php if ( get_sub_field('headline') ): ?>
                                            <h2 class="s-cta__subhead" data-aos="fade-up" data-aos-delay="100">
                                                <?php echo get_sub_field('headline'); ?>  
                                            </h2>
                                        <?php endif ?>

                                        <?php if ( get_sub_field('sub-headline') ): ?>
                                            <h3 class="s-cta__headline" data-aos="fade-up" data-aos-delay="200">
                                                <?php echo get_sub_field('sub-headline'); ?>
                                            </h3>
                                        <?php endif ?>
                                        
                                        <?php 
                                        $link = get_sub_field('button');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a class="btn btn-white" 
                                                href="<?php echo esc_url( $link_url ); ?>" 
                                                target="<?php echo esc_attr( $link_target ); ?>"
                                                data-aos="fade-up" data-aos-delay="300"
                                            ><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                <? elseif( get_row_layout() == 'blog_posts' ): ?>

                    <section class="blogs-section">
                        <div class="container">
                            <div class="row">

                                <?php if ( get_sub_field('headline') ): ?>
                                    <div class="col-12">
                                        <h2 class="headline"><?php echo get_sub_field('headline'); ?></h2>
                                    </div>
                                <?php endif ?>
                                
                                <?php
                                $args = array( 
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'posts_per_page' => -1 
                                );

                                $loop = new WP_Query( $args );

                                while ( $loop->have_posts() ) : $loop->the_post();?>

                                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $loop->current_post ?>00">
                                        <a href="<?php echo get_permalink(); ?>" class="blog-post">
                                            <div class="post-img">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                            </div>
                                            <span class="title"><?php the_title(); ?></span>
                                        </a>
                                    </div>
                                    
                                <?php endwhile; 

                                wp_reset_postdata(); ?>

                            </div>
                        </div>
                    </section><!-- /.recipes-wrap-section -->

                <? elseif( get_row_layout() == 'contact' ): ?>

                    <section class="s-contact-us">
                        <div class="container">
                            <div class="s-contact-us__wrap">
                                    
                                <div class="address-block" data-aos="fade-up" data-aos-delay="100">
                                    <div class="address">
                                        <?php echo get_sub_field('contacts'); ?>
                                    </div>

                                    <?php if( have_rows('social') ): ?>

                                        <div class="social">
                                        
                                            <?php while( have_rows('social') ) : the_row(); ?>

                                                <a href="<?php echo get_sub_field('link'); ?>" style="color: <?php echo get_sub_field('icon_color'); ?>;">
                                                    <i class="<?php echo get_sub_field('icon_class'); ?>"></i>
                                                </a>

                                            <?php endwhile; ?>

                                        </div>

                                    <?php else :
                                        // Do something...
                                    endif; ?>
                                </div>
                                
                                <div class="form-block" data-aos="fade-up" data-aos-delay="200">
                                    <?php echo do_shortcode(get_sub_field('form_shortcode')) ?>
                                </div>

                            </div>
                        </div>
                    </section>

                <? elseif( get_row_layout() == 'map' ): ?>

                    <section class="s-map" data-aos="fade-up" data-aos-delay="100">
                        <div class="relation">
                            <div class="relation__ratio relation__ratio--3x1"></div>
                            <?php echo get_sub_field('map_shortcode'); ?>
                        </div>
                    </section>

                <? elseif( get_row_layout() == 'text' ): ?>

                    <section class="s-text">
                        <div class="container">
                            
                            <?php if ( get_sub_field('headline') ): ?>
                                <h2 class="section-title lined-title" data-aos="move-left">
                                    <span><?php echo get_sub_field('headline'); ?></span>
                                </h2>
                            <?php endif ?>

                            <div class="copy" data-aos="fade-up" data-aos-delay="100">
                                <?php echo get_sub_field('copy'); ?>
                            </div>

                        </div>
                    </section>

                <? elseif( get_row_layout() == 'team' ): ?>

                    <section class="s-team">
                        <div class="container">
                            
                            <?php if ( get_sub_field('headline') ): ?>
                                <h2 class="section-title lined-title" data-aos="move-left">
                                    <span><?php echo get_sub_field('headline'); ?></span>
                                </h2>
                            <?php endif ?>

                            <div class="row">
                                <?php if( have_rows('team_members') ):
                                    $counter = 0; ?>

                                    <?php while( have_rows('team_members') ) : the_row(); ?>

                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-delay="<?php echo $counter ?>00">
                                            <div class="team-member">
                                                <div class="photo">
                                                    <?php 
                                                    $image = get_sub_field('photo');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="name"><?php echo get_sub_field('name'); ?></div>
                                            </div>
                                        </div>

                                    <?php $counter++; 
                                endwhile;

                                // No value.
                                else :
                                    // Do something...
                                endif; ?>
                            </div>

                        </div>
                    </section>

                <? endif;

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>

    </div><!-- /.content -->

<?php get_footer() ?>