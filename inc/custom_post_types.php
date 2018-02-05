<?php

//create post types


function create_my_post_types() {

    //add teaser
    $port_args = array(
      'public' => true,
      'label'  => 'Teaser',
      'taxonomies' => array('category'), 
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' )
    );
    register_post_type( 'teaser', $port_args );
    
}

add_action( 'init', 'create_my_post_types' );


