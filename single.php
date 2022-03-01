<?php
/**
 * The single post template file
 *
 * @package AccessibleMinimalism
 */

get_header();

// Load posts loop.
while ( have_posts() ) {
    the_post();

    the_title('<h2>', '</h2>');

    ?>

    <ul>

    <?php

    $customFields = get_post_custom();

    foreach($customFields as $key => $value): ?>

        <?php if (in_array($key, ['_edit_lock', '_edit_last'])) continue; ?>


        <li><b> <?php echo $key; ?> </b> <?php echo $value[0]; ?></li>

    <?php 
    
    endforeach;  

    ?>

    </ul>

    <?php 

    the_content();

}

get_footer();
