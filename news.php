<?php
/**
 * Template Name: News list page
 *
 *
 */

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>

		<div id="container">
		
		    <?php thematic_abovecontent(); ?>
		
		    <div id="content">
		
				
				<?php 
				thematic_singlepost();
				?>

<?php

global $post;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'posts_per_page' => 30, 'numberposts' => -1, 'order'=> 'DESC' , 'cat'=> 5 , 'paged'=>$paged);
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>

<div id="post-<?php the_ID(); ?>" class="<?php thematic_post_class(); ?>">
	<?php thematic_postheader(); ?>
	<div class="entry-content">
	<?php thematic_content(); ?>
	</div><!-- .entry-content -->
	<?php thematic_postfooter();?>

</div><!-- #post -->

<?php endforeach; ?>


	

		    </div><!-- #content -->
		    
		    <?php 
			thematic_belowcontent(); ?> 
		    
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    thematic_sidebar();
    
    // calling footer.php
    get_footer();

?>