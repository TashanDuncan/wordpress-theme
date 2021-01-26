<?php

/*
Template Name: GG
*/
?>

<?php get_header('gg');?>

<div class="container">

    <h1><?php the_title();?></h1>

        <div class="row">
        
        
        </div>

    <?php get_template_part('includes/section', 'content');?>

</div>

<?php get_footer();?>