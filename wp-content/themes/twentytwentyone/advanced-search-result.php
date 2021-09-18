<?php
/*
* Template Name: customrslt
*/
// Get data from URL into variables
get_header();

$height = $_POST['height-range'];
$age = $_POST['age-range'];
if($_POST['weight-range'])
{
	$weight = $_POST['weight-range'];
}
echo $weight;

$query_args = array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC' , 
'meta_query' => array(
		'relation' => 'AND', // both of below conditions must match
		array(
			'key' => 'myage',
			'value' =>$weight,
			'compare' => '>=',
		)
	));
$the_query = new WP_Query( $query_args );
if ( $the_query->have_posts() AND !empty($weight) ) : 
     while ( $the_query->have_posts() ) : $the_query->the_post();
	 the_title();
	 ?>	
	  
				
	 <?php
	 endwhile; 
        wp_reset_postdata(); 
         else :
         
            echo 'Sorry, no posts matched your criteria.'; 
          endif; 
		  
		  

?><?php
/*global $wpdb;

$result = $wpdb->get_results('SELECT DISTINCT  wp_posts.post_title FROM wp_posts INNER JOIN wp_postmeta ON wp_posts.ID=wp_postmeta.post_id WHERE  wp_postmeta.meta_value=25');
 print_r($result);
//$myresult = array_unique($result);
 foreach($result as $data){
	 echo'<br>';
	echo $data->post_title; 
	echo'<br>';
 }
?>