<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlab
 */
get_header( ); ?>
<div class="content-container container pt-5 pb-5">
    <h1 class="page-title"><?php the_archive_title(); ?></h1>    
    <div class="container">
        <div class="row">
            <div class="blog-posts col-md-8">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="blog-post">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( has_post_thumbnail() ) :
                            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'dosth-blog-thumbnail' ); ?>
                            <div class="blog-post-thumb">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" alt='' /></a>
                            </div>
                        <?php endif; ?>
                        <?php the_excerpt(); ?>
                        <a class="read-more-link" href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'nd_dosth' ); ?></a>
                        <?php $categories = get_the_category(); ?>
                        <?php if ( ! empty( $categories ) ) : ?>
                            <div class="posted-in">
                                <span><?php _e( 'Posted In', 'nd_dosth' ); ?></span>
                                <a href="<?php echo get_category_link( $categories[0]->term_id ); ?>"> 
                                    <?php echo $categories[0]->name; ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Blog Posts found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
            </div>
            <div id="blog-sidebar" class="col-md-4">
                <?php if ( is_active_sidebar( 'blog' ) ) : ?>
                    <div class="blog-widgets-container">
                        <?php dynamic_sidebar( 'blog' ); ?>
                    </div>
                <?php endif; ?>                
            </div>
        </div>
    </div>
</div>
<?php
get_footer();