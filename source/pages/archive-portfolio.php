<?php get_header(); ?>

  <div id="content" class="page-portfolio">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

        <div class="hero">
          <div class="hero-content-wrap wrap">
            <h2>Connor Krupp</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
        </div>

        <div class="wrap">
        <?php $currentPost = 0; ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article id="post-<?php echo $currentPost % 2; $currentPost++;?>" <?php post_class('project cf'); ?> role="article">
            <div class="project-content">
              <h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
              <div class="project-thumbnail"></div>
              <div class="project-info">
                <div class="subtitle">
                  <h6>Platform</h6>
                  <p>iOS</p>
                </div>
                <div class="subtitle">
                  <h6>Date</h6>
                  <p><?php printf(__('', 'bonestheme').' %1$s %2$s','<time class="updated entry-time" datetime="'.get_the_time('Y-m-d').'" itemprop="datePublished">'.get_the_time(get_option('date_format')).'</time>',''); ?></p>
                </div>
                <div class="subtitle">
                  <h6>Client</h6>
                  <p>Napp Development</p>
                </div>
              </div>
              <?php //the_post_thumbnail('bones-thumb-300'); ?>
              <div class="project-excerpt">
                <?php the_excerpt(); ?>
              </div>
            </div>
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
              <p><?php _e('This is the error message in the archive.php template.', 'bonestheme'); ?></p>
            </footer>
          </article>

        <?php endif; ?>
      </div>
      </main>
    </div>
  </div>

<?php get_footer(); ?>
