<?php get_header(); ?>

  <div id="content" class="page-blog">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <div class="hero">
          <div class="hero-content-wrap wrap">
            <h2>Random posts of mine</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('cf wrap'); ?> role="article">

            <header class="article-header">
              <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
              <p class="byline entry-meta vcard">
              <?php printf(__('Posted', 'bonestheme').' %1$s %2$s', '<time class="updated entry-time" datetime="'.get_the_time('Y-m-d').'" itemprop="datePublished">'.get_the_time(get_option('date_format')).'</time>', '' ); ?>
               </p>
            </header>

            <section class="entry-content cf">
              <?php the_content(); ?>
            </section>

            <footer class="article-footer cf">
              <p class="footer-comment-count">
                <?php comments_number(__('<span>No</span> Comments', 'bonestheme'), __('<span>One</span> Comment', 'bonestheme'), __('<span>%</span> Comments', 'bonestheme'));?>
              </p>
              <?php //printf('<p class="footer-category">'.__('filed under', 'bonestheme').': %1$s</p>', get_the_category_list(', ')); ?>
              <?php //the_tags('<p class="footer-tags tags"><span class="tags-title">'.__('Tags:', 'bonestheme').'</span> ', ', ', '</p>'); ?>
            </footer>

          </article>

        <?php endwhile; ?>
        <?php bones_page_navi(); ?>
        <?php else : ?>

          <article id="post-not-found" class="hentry cf">
              <header class="article-header">
                <h1><?php _e('Oops, Post Not Found!', 'bonestheme'); ?></h1>
            </header>
              <section class="entry-content">
                <p><?php _e('Uh Oh. Something is missing. Try double checking things.', 'bonestheme'); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e('This is the error message in the index.php template.', 'bonestheme'); ?></p>
            </footer>
          </article>

        <?php endif; ?>
      </main>
    </div>
  </div>

<?php get_footer(); ?>
