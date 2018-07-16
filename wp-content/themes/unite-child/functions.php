<?php
function call_custom_fields( $post_ID ) {
$country = wp_get_post_terms($post_ID, 'country', array("fields" => "names"));
$genre = wp_get_post_terms($post_ID, 'genre', array("fields" => "names"));
?>
	<div class="custom_information">
		<p><label>Country-</label> <span><?php echo $country[0];?></span></p>
		<p><label>Genre-</label> <span><?php echo $genre[0];?></span></p>
		<p><label>Ticket Price-</label> <span><?php echo get_post_meta($post_ID, 'wpcf-ticket_price',true);?></span></p>
		<p><label>Release Date-</label> <span><?php echo date("d-m-Y", strtotime(get_post_meta($post_ID, 'wpcf-release-date',true)));?></span></p>
	</div>
<?php
}
add_action('call_custom_fields_archive', 'call_custom_fields');


function recent_films_shortcode(){
	$args = array(
	'numberposts' => 5,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'film',
	'post_status' => 'publish',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
echo "<h3 class='widget-title'>Recent Films</h3><ul>";
foreach($recent_posts as $films){
	echo "<a href='http://localhost/wordpress/film/".$films['post_name']."'><li>".$films['post_title']."</li></a>";
}
echo "</ul>";
}
add_shortcode('recent_films','recent_films_shortcode');