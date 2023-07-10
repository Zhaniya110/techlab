<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package techlab
 */
get_header();
?>
<div class="content-container pt-5 pb-5 ">
    <?php while( have_posts() ): ?>
        <?php the_post(); ?>
        <?php if ( has_post_thumbnail() ) :
            $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
            <div class=" pt-5 pb-5 full-width-featured-image" style="background-image:url(<?php echo $featured_image[0]; ?>);">
                <h2 ><?php the_title(); ?></h2>
            </div>
        <?php endif; ?>
        <div class="container pt-5 pb-5">
            <div class="row  pt-5 pb-5 ">
                <div class="article-info col-md-3">
                 <h1> <?php  the_title(); ?> </h1>
                 <p>  <?php  the_taxonomies(  );?> </p>
                </div>
                <div id="actual-article" class="col-md-8">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>