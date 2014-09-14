<?php 
/*
|--------------------------------------------------------------------------
| the header
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Basic page sets 
     =============================================================== -->
	  <meta charset="<?php bloginfo('chartset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true,'right'); ?><?php bloginfo('name' ); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
     <!-- Mobile Specific Meta 
     =============================================================== -->
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/> 
    <!-- CSS files
     =============================================================== -->
    <!-- Latest compiled and minified BootstrapCSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/master.css">
    <!-- Favicons
     =============================================================== -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon-114-precomposed.png">
       <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon-72-precomposed.png">
                     <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory');?>/images/apple-touch-icon-57-precomposed.png">
                                                            <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- wp_head 
    =============================================================== -->
    <?php wp_head(); ?>   
    <!-- ===============================================================
    end wp_head -->
</head>
<body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<div class="container mainbox"> <!-- master container -->