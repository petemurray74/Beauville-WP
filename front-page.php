<?php
/**
 * Template Name: Home page
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 * BAESED on thematics template-page-fullwidth.php
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
	            thematic_abovepost();
			?>

	
	        <?php
	        thematic_belowpost();
	        ?>
	
			</div><!-- #content -->
			
			<?php thematic_belowcontent(); ?> 
			
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

  
    // calling footer.php
    get_footer();

?>