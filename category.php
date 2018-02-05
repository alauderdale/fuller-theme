<?php get_header(); ?>

<!-- page header -->

<!-- <?php $pageTitle = 'Blog' ?> -->

<?php  set_query_var( 'pageTitle' , $pageTitle );
get_template_part( 'content', 'page_header' ); 
?>




<?php get_footer(); ?>