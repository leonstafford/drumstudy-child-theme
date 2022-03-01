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

<ul>
    <li>Professional Drum Teaching Websites</li>
    <li>Drum Games</li>
</ul>

<i>Coming soon</i>
<ul>
    <li>Curated free video lessons</li>
    <li>Drumless tracks to play along to</li>
    <li>Sheet music for drums</li>
</ul>

<h2>Online Drum Lesson Providers</h2>

<?php

$allPostsWPQuery = new WP_Query(
    [
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'online-drum-lessons',

    ]);
 
if ( $allPostsWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <ul>

        <?php

        $customFields = get_post_custom();

        foreach($customFields as $key => $value): ?>

            <?php if ( $key[0] === '_' ) continue; ?>

            <li><b> <?php echo $key; ?> </b> <?php echo $value[0]; ?></li>

        <?php endforeach; ?>

        </ul>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<h2>Drum Games</h2>

<?php

$allPostsWPQuery = new WP_Query(
    [
        'post_type'=> 'post',
        'post_status'=> 'publish',
        'posts_per_page'=> -1,
        'category_name'=> 'drum-games',

    ]);
 
if ( $allPostsWPQuery->have_posts() ) : ?>
 
<ul>
     <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

        <ul>

        <?php

        $customFields = get_post_custom();

        foreach($customFields as $key => $value): ?>

            <?php if ( $key[0] === '_' ) continue; ?>

            <li><b> <?php echo $key; ?> </b> <?php echo $value[0]; ?></li>

        <?php endforeach; ?>

        </ul>

    <?php endwhile; ?>
</ul>

<?php wp_reset_postdata(); ?>

<?php endif; ?>

<?php get_footer(); ?>

