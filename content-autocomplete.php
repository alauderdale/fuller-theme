<?php

	//industries

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

	///skills
	$args2 = array(

	   'hide_empty' => 0,
	   'taxonomy' => 'job_listing_tag'
	);

	$skillsArray = array();

	$skills = get_categories($args2);
	 if ( ! empty( $skills ) && ! is_wp_error( $skills ) ){
	     foreach ( $skills as $skill ) {
	       $skillsArray[]=$skill->name;
	     }
	 }


	$skilllist = json_encode($skillsArray);
	$termslist = json_encode($termsArray);

?>

<script>

	var termslistjson = '<?php echo $termslist ?>';
	var termslistjsonparsed = JSON.parse(termslistjson);

	var skilllistjson = '<?php echo $skilllist ?>';
	var skilllistjsonparsed = JSON.parse(skilllistjson);


	var masterList = termslistjsonparsed.concat(skilllistjsonparsed);


</script>