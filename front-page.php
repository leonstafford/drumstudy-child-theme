<?php
/**
 * The front page template file
 *
 * @package DrumChildTheme
 */

get_header();

?>

<p><b>Welcome to my site!</b></p>

<p>I created this site for a few reasons:</p>

<ul>
    <li> to force me to learn in public for extra pressure/motivation</li>
    <li> to help others with learning resources and to see my embarrassing struggle hopefully bear fruit with persistence</li>
    <li> to get more familiar with Strattic's awesome static WordPress publishing system, as a user, not just a developer/employee</li>
    <li> to see me fork my <a href="https://github.com/leonstafford/accessible-minimalism-hugo-theme">Accessible Minimalism Hugo Theme</a> to WordPress</li>
</ul>

<h2>My latest Hebrew &amp; Arabic study notes</h2>

<?php accessible_minimalism_display_latest_blog_posts(); ?>

<?php get_footer(); ?>

