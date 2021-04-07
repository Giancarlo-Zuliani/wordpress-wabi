<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="fixed-index-header" class="container-fluid m-auto">
        <div class="row m-auto px-5 d-flex w-100 align-items-center justify-content-between">
            <a class="" id="header-index-logo" href=" <?php echo home_url() ?> "><img src="https://www.wabi.it/img/logo.svg" alt="wabi-logo"></a>
            <a href=" <?php echo get_home_url() . '/?page_id=34' ?> ">start a project</a>
        </div>
    </div>
    <?php
	get_template_part('template-parts/upper-jumbotron');
	?>

