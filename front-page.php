<?php
/**
 * The front page template file
 *
 * @package DrumChildTheme
 */

get_header();

?>

<p><b>Drum Study Resources</b></p>

<p>For the lifetime learner.</p>

<p>Drum Study offers a curated list of quality drumming resources.</p>

<ul>
    <li>Professional Drum Teaching Websites</li>
    <li>Curated free video lessons</li>
    <li>Drumless tracks to play along to</li>
    <li>Sheet music for drums</li>
</ul>

<h2>Online Drum Lesson Providers</h2>

<?php

$allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
 
if ( $allPostsWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <ul>

        <?php

        $customFields = get_post_custom();

        foreach($custom as $key => $value): ?>

            <li><b> <?php echo $key; ?> </b> <?php echo $value; ?></li>

        <?php endforeach; ?>

        </ul>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>

