<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wabi-theme
 */

get_header('index');
?>
	<div id="animated-bg"></div>
	<main id="primary" class="site-main">
<?php
	get_template_part('template-parts/upper-jumbotron');
	?>
	<div class="container">
	<?php
	$sql = get_projects();	
	foreach($sql as $project){
		?>
			<div class="row col-6">
				<h2> <?php echo $project -> title?>
				</h2>
				<?php 
					$pictures = get_project_pictures($project -> id);
						$urlimg = wp_upload_dir()["baseurl"] .'/projects-resources/' . $pictures[0] ->url ;
						?>

					<img src="<?php echo $urlimg; ?>"alt="">
			</div>
	<?php
	};
	?>
</div>
<?php
	$args=array(
		'post_type' => 'project'
	);
	$loop = new WP_Query($args);
	while ( $loop->have_posts() ) : $loop->the_post(); 
        print the_title(); 
        the_excerpt(); 
    endwhile;
	if ( have_posts('projects') ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content');

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		get_template_part('template-parts/try');	
		?>

	</main><!-- #main -->

<?php
get_footer('index');
