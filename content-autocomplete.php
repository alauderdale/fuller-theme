<?php

	$args = array(

	   'hide_empty' => 0,
	   'taxonomy' => 'job_listing_category'
	);

	$termsArray = array();

	$terms = get_categories($args);
	 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	     foreach ( $terms as $term ) {
	       $termsArray[]=$term->name;
	     }
	 }

	$termslist = json_encode($termsArray);

?>

<script>
	var termslistjson = '<?php echo $termslist ?>';
	var termslistjsonparsed = JSON.parse(termslistjson);
</script>