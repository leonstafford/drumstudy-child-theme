<?php
/**
 * The front page template file
 *
 * @package DrumChildTheme
 */

get_header();

?>

<p><b><?php single_cat_title(); ?></b></p>

<p><?php echo category_description(3); ?></p> 

<?php

$categoryID = $wp_query->get_queried_object_id();

$categoryWPQuery = new WP_Query(
    [
        'order' => 'ASC',
        'orderby' => 'title',
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'cat'=> $categoryID,
    ]);

if ( $categoryWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $categoryWPQuery->have_posts() ) : $categoryWPQuery->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>

