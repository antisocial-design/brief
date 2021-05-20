<?php
get_header(); ?>

<div class="col-12 my-5">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">E-mail</th>
				<th scope="col">Birthday</th>
				<th scope="col">Gender</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$args = array(
				'offset' => 0,
				'posts_per_page' => 100,
				'orderby' => 'title',
				'order' => 'ASC',
				'post_type' => 'member',
			);
			$posts = new WP_Query( $args );

			if ( $posts->have_posts() ) :

			while ( $posts->have_posts() ) : $posts->the_post();

			get_template_part( 'loop-templates/team-member-feed' );

			endwhile;

			endif;
			wp_reset_postdata();
			?>
		</tbody>
	</table>
</div>

<?php
get_footer();
