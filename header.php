<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>



</head>


  <body class='index'>
    <nav class='navbar navbar-default navbar-fixed-top global-nav'>
      <div class='container half-padding-bottom'>
        <div class='navbar-header'>
          <a class='navbar-brand' href='<?php bloginfo('url')?>'>
            <img src='<?php bloginfo('template_url'); ?>/images/logo.png' width='169'>
          </a>
          <div class='navbar-right'>
            <ul class='nav navbar-nav'>
              <li class='visible-xs search-jobs-toggle'>
                <a href='<?php echo get_permalink( get_page_by_path( 'jobs' ) ); ?>'>
                  <i class='fa fa-search'></i>
                  Jobs
                </a>
              </li>
              <li>
                <a href='<?php echo get_permalink( get_page_by_path( 'post a job' ) ); ?>'>
                  Post a Job
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>


