<?php



if(
	is_front_page() ||
	is_page('energy_saving') ||
	is_page('service') ||
	is_page('energy_decision') ||
	is_page('casbee') ||
	is_page('assessment') ||
	is_page('bels') ||
	is_page('improve-profit')
):

echo '<script type="application/ld+json">' . "\n";
echo '{' . "\n";
	echo '"@context": "http://schema.org",' . "\n";
	echo '"@type": "FAQPage",' . "\n";
	echo '"mainEntity":' . "\n";
	echo '	[' . "\n";


	if(is_front_page()) {
		$faq_query = new WP_Query(
			array(
				'post_type' => 'faq',
				'posts_per_page' => 5,
				'post_status' => 'publish',
				'order'=>'DESC',
				'orderby'=>'date',
			)
		);
	}
	else {
		if(is_page('service')) {
			$t = 'all';
		}
		else if(is_page('energy_saving')) {
			$t = 'enegy_saving';
		}
		else if(is_page('energy_decision')) {
			$t = 'enegy_aptitude';
		}
		else if(is_page('casbee')) {
			$t = 'casbee';
		}
		else if(is_page('assessment')) {
			$t = 'performance_ev';
		}
		else if(is_page('bels')) {
			$t = 'bels';
		}
		else if(is_page('improve-profit')) {
			$t = 'support';
		}
		$faq_query = new WP_Query(
			array(
				'post_type' => 'faq',
				'nopaging' => -1,
				'post_status' => 'publish',
				'order'=>'DESC',
				'orderby'=>'date',
				'tax_query' => array(
					array(
						'taxonomy' => 'faq_cat',
						'terms' => $t,
						'field'=>'slug',
						'operator' => 'IN',
					),
				),
			)
		);
	}

	while ($faq_query->have_posts()) : $faq_query->the_post();
		$content = get_the_content();
		$content = wp_strip_all_tags( $content );

		echo '		{' . "\n";
			echo '		"@type": "Question",' . "\n";
			echo '		"name": "' . get_the_title() . '",' . "\n";
			echo '		"acceptedAnswer": {' . "\n";
				echo '			"@type": "Answer",' . "\n";
				echo '			"text": "' . $content . '",' . "\n";
				echo '			"url": "' . get_the_permalink() . '"' . "\n";
			echo '			}' . "\n";
if ($faq_query->current_post == $faq_query->post_count - 1) {
		echo '		}' . "\n";
}else{
		echo '		},' . "\n";
}

	endwhile; wp_reset_postdata();



	echo '	]' . "\n";
echo '}';

echo '</script>';


endif;


 ?>