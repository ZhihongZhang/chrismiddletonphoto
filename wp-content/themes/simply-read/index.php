<?php get_header(); ?>

	<div id="content" style="margin-top: 120px;">
		<div id="left_scroll">
			<span class="fa fa-caret-left fa-2x"></span>
		</div>
		<div id="inner-content" class="wrap cf">

			<div id="main" class="m-all t-2of3 d-5of7 cf full" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="">

						<section class="entry-content cf" itemprop="articleBody">
							<?php

							echo do_shortcode("[WRG id=33]");
							echo do_shortcode("[WRG id=42]");
							?>
						</section>

					</article>

				<?php endwhile; else : ?>

					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'simplyread' ); ?></h1>
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'simplyread' ); ?></p>
						</header>

					</article>

				<?php endif; ?>

			</div>
		</div>
		<div id="right_scroll">
			<span class="fa fa-caret-right fa-2x"></span>
		</div>
	</div>

<?php get_footer(); ?>