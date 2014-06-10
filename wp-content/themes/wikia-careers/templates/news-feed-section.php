<?php
$args = array(
	'posts_per_page'   => 2,
	'offset'           => 0,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true );
$posts_array = get_posts( $args );

if( !empty( $posts_array ) ):
?>

<section class="container-fluid spaced-container news-feed">
	<div class="row">
		<div class="container">
			<h2>Wiki Newsy</h2>

			<div class="row">
			<?php
			foreach ( $posts_array as $post ) :
				$post_link = get_page_link( $post->ID );
				$post_title = $post->post_title;
				$post_date = mysql2date('j F Y', $post->post_date);
				$post_excerpt = $post->post_excerpt;
				$content = apply_filters('the_content', $post->post_content);

				$thumb_link = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'news-section-thumb' );
				$thumb_link = $thumb_link[0];
				?>
				<div class="col-xxs-4 col-xs-4 col-sm-3 col-md-6 col-lg-6 news-item-container">
					<a href="<?php echo $post_link ?>"><img src="<?php echo $thumb_link ?>" alt="News 2" />
					<h3><?php echo $post_title ?></h3></a>
					<span class="post-date">Opublikowano: <span class="date"><?php echo $post_date ?></span></span>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
