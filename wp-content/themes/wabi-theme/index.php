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
	<div class="container-fluid">
		<div class="row">
<?php
	$args=array(
		'post_type' => 'project',
		'order' => 'ASC'
	);
	$loop = new WP_Query($args);
	$count = 0;
	while ( $loop->have_posts() ) : $loop->the_post();
	$count++;
	$picArr = get_projects_images_urls(get_the_ID());
	?>
	<div class="prj-box col-md-6 p-0 m-0">
		
		<img src="
			<?php echo wp_upload_dir()['baseurl'] .'/'.'projects-resources/'. $picArr[0]['url'];?>"
		alt="">
		
		<h2 class="text-capitalize"> <?echo get_post_meta(get_the_ID() , 'project_title' , true)  ?> </h2>
	</div>

	<div class="modal" id="modal_wait" tabindex="-1" role="dialog" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body d-flex justify-content-center align-items-center">
                        <div class="container">
                        <div id="<?php echo 'carouselExampleControls' . strval($count);?>" class=" carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="close" ></div>
                               <!---- CAROUSEL ITEMS ---->
                                <?php 
								foreach($picArr as $index =>$pic) ?>
                                <div class="carousel-item <?php if($index == 0) echo 'active'; ?>">
                                    <img class="d-block w-100" src="<?php echo wp_upload_dir()['baseurl'].'/'.'projects-resources/' . $pic['url']?>" alt="">
                                    <!--- CAROUSEL CAPTIONS --->
                                    <div class="carousel-caption d-none d-md-block carousel-description">
                                        <h5 class="text-capitalize"><?php get_post_meta(get_the_ID() , 'project_title' , true) ?></h5>
                                        <p class="text-capitalize"><?php echo $pic['description'] ?></p>
                                      </div>
                                </div>
                              
                                <!---- CAROUSEL CONROLLERS ---->
                            </div>
                               <a class="carousel-control-prev" href="<?php echo '#carouselExampleControls' . ($index + 1) ?>" role="button" data-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Previous</span>
                             </a>
                              <a class="carousel-control-next" href="<?php echo '#carouselExampleControls' . ($index + 1) ?>" role="button" data-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                             </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php
    endwhile;
	?>
    </div>

	</div>
	</main><!-- #main -->
	<section id="bottom-jumbotron">
    <div class="container-fluid">
        <div class="row my-auto">
            <div class="col-12 col-md-12">
                <h1 class="w-75">we create progress by designing and developing.</h1>
            </div>
            <div class="col-6 offset-6 my-5">
                <p>Ogni brand, come le persone, possiede un nome, un carattere, una reputazione.
                    Ogni brand trasmette emozioni. Operiamo attraverso una profonda conoscenza del marketing,
                    del design, della grafica, del web e dei più moderni strumenti di comunicazione. </p>
            </div>
        </div>
    </div>
</section>

<section id="parallax" style="background-image: url( <?php echo  wp_upload_dir()['baseurl'] .'/'.'projects-resources/parallax-home.jpg' ?>)"></section>
<div class="container-fluid p-5">
        <div class="row">
            <div class="col-12 text-left m-auto p-4">
                <h5 id="clients-title" class="w-100 border-bottom border-white py-5">
                    <strong class="text-capitalize">some of our best clients.</strong>
                </h5>
            </div>
            <?php for ($i = 1 ; $i <= 44 ; $i++ ){?> 
            <div class=" col-12 col-md-4 col-lg-3">
                <img class="m-auto w-100" src="<?php echo wp_upload_dir()['baseurl'] . '/clients-logos/logo-'  . $i .'.png' ?>" alt="">
             </div> 
			 <?php };?>
        </div>  
    </div>
<?php
get_footer('index');?>
