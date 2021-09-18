<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<?php
$category = get_queried_object();
echo $category->name;

 $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 0,
       'parent' => $category->term_id,
       'taxonomy' => 'product_cat'
    );
  $subcats = get_categories($args);
  print_r($subcats);
    echo '<ul class="wooc_sclist">';
      foreach ($subcats as $sc) {
        $link = get_term_link( $sc->slug, $sc->taxonomy );
         	echo 'jdklasjdljasdlsj';
	
		  
		   $all_products = get_posts( array(
		  
		 
    'post_type' => 'product',
    'numberposts' => -1,
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'Vätskebehandling', /*category name*/
            'operator' => 'IN',
            )
        ),
    ));
	//print_r($all_products);
	 foreach($all_products as $theproduct){
		 echo $theproduct->post_title;
	 }
      }
   
	 

$queried_object = get_queried_object();
$value = get_field('myho', $queried_object);

print_r ($terms );
	echo get_field( $terms->term_id, 'myho' , true ); 
	echo $value;
get_footer( 'shop' );
