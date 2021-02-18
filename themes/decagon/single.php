<?php get_header(); ?>

        </header>

        <div class="single-page-container">
            <div class="single-page-body">
                <?php
                 while(have_posts()){
                     the_post();
                 ?>
                <h6><?php echo get_the_category_list(', ') ?></h6>
                <h1><?php the_title();?></h1>
                <div class="author">
                    <div class="author-details">
                        <div class="dp">
                            <?php if (get_avatar(get_the_author_meta('ID')) !== false){
                             echo get_avatar(get_the_author_meta('ID'), 39); 
                            }else{ ?>
                            <img src="<?php echo get_template_directory_uri().'/images/faith.svg'?>" alt="<?php the_author() ?>" />
                        <?php }?>
                            
                        </div>
                        <div class="author-name">
                            <h5><?php the_author()?></h5>
                            <span><?php the_time('M d, Y'); ?></span>
                        </div>
                    </div>
                    <div class="author-social">
                        <h5>share</h5>
                        <div>
                            <a target='_blank' href='https://twitter.com/share?url=<?php the_permalink() ?>'><img src="<?php echo get_template_directory_uri() . '/assets/img/tweeter.svg' ?>" alt="tweeter"></a>
                            <a target='_blank' href='http://www.facebook.com/sharer.php?u=<?php the_permalink()?>'><img src="<?php echo get_template_directory_uri() . '/assets/img/facebook.svg' ?>" alt="facebook"></a>
                            <a target='_blank' href='http://www.linkedin.com/shareArticle?url=<?php the_permalink()?>'><img src="<?php echo get_template_directory_uri() . '/assets/img/linkdin.svg' ?>" alt="linkedin"></a>
                        </div>
                    </div>
                </div>
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                <?php the_content() ?>
                
                <div class="addition"></div>
            </div>

            <?php }
            
            require_once dirname(__FILE__).'/inc/suscribe.php';
            
            ?>

        </div>
    </div>

    <?php wp_footer(); ?>

</body>

</html>