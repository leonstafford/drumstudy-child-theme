<?php
/**
 * The front page template file
 *
 * @package DrumChildTheme
 */

get_header();

?>

<p><b>Resources for the lifetime learner.</b></p>

<p>Drum Study offers a curated list of quality drumming resources.</p>

<?php

$onlineDrumLessonsWPQuery = new WP_Query(
    [
        'order' => 'ASC',
        'orderby' => 'title',
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'online-drum-lessons',

    ]);

$drumSoftwareWPQuery = new WP_Query(
    [
        'order' => 'ASC',
        'orderby' => 'title',
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'drum-games',

    ]);

$drumPodcastsWPQuery = new WP_Query(
    [
        'order' => 'ASC',
        'orderby' => 'title',
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'drum-podcasts',

    ]);

$positiveVibesWPQuery = new WP_Query(
    [
        'order' => 'ASC',
        'orderby' => 'title',
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'positive-vibes',

    ]);

$assistanceWPQuery = new WP_Query(
    [
        'order' => 'ASC',
        'orderby' => 'title',
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'drummer-assistance',

    ]);

?>

<ul>
    <li><?php echo $onlineDrumLessonsWPQuery->post_count;?> <a href="/category/online-drum-lessons/">Professional Drum Teaching Websites</a></li>
    <li><?php echo $drumSoftwareWPQuery->post_count;?> <a href="/category/drum-games/">Drum Software &amp; Games</a></li>
    <li><?php echo $drumPodcastsWPQuery->post_count;?> <a href="/category/drum-podcasts/">Drum Podcasts</a></li>
    <li><?php echo $positiveVibesWPQuery->post_count;?> <a href="/category/positive-vibes/">Positive Vibes Drum Stories</a></li>
    <li><?php echo $assistanceWPQuery->post_count;?> <a href="/category/drummer-assistance/">Drummer Support Opportunities</a></li>
</ul>

<h2>Online Drum Lesson Providers</h2>


<?php
 
if ( $onlineDrumLessonsWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $onlineDrumLessonsWPQuery->have_posts() ) : $onlineDrumLessonsWPQuery->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<h2>Drum Software/Games</h2>

<?php
 
if ( $drumSoftwareWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $drumSoftwareWPQuery->have_posts() ) : $drumSoftwareWPQuery->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<h2>Drum Podcasts</h2>

<?php
 
if ( $drumPodcastsWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $drumPodcastsWPQuery->have_posts() ) : $drumPodcastsWPQuery->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<h2>Positive Vibes Drum Stories</h2>

<?php
 
if ( $positiveVibesWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $positiveVibesWPQuery->have_posts() ) : $positiveVibesWPQuery->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<h2>Drummer Assistance</h2>

<?php

 
if ( $assistanceWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $assistanceWPQuery->have_posts() ) : $assistanceWPQuery->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>

