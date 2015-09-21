<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="hero">
		            <div class="hero-content-wrap contact-wrap">
		              <h2><?php the_title(); ?></h2>
		            </div>
		          </div>

							<div class="wrap">
								<?php the_content(); ?>
							</div>
						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e('Oops, Post Not Found!', 'bonestheme'); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e('Uh Oh. Something is missing. Try double checking things.', 'bonestheme'); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e('This is the error message in the single.php template.', 'bonestheme'); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>
				</div>

			</div>

<?php get_footer(); ?>
