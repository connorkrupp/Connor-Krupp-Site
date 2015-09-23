<?php
/*
 Template Name: Resume Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

  <div id="content" class="page-resume">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="hero">
            <div class="hero-content-wrap wrap">
              <h2>Check out my resume</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              <a href="http://connorkrupp.com/wp-content/uploads/2015/09/ConnorKruppResume.pdf"><button class="button-hollow">View PDF</button></a>
            </div>
          </div>
          <section class="entry-content cf wrap" itemprop="articleBody">
            <?php
              the_content();
              wp_link_pages(array(
                'before' => '<div class="page-links"><span class="page-links-title">'.__('Pages:', 'bonestheme').'</span>',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
              ));
            ?>
          </section>
          <div class="footer-hero">
            <div class="footer-hero-content-wrap wrap">
              <h2>Would you like to see more?</h2>
              <p>You can check out my LinkedIn, it has plenty of extras! Or, maybe you want a PDF version of my resume?</p>
              <div class="button-wrap">
                <a href="http://connorkrupp.com/wp-content/uploads/2015/09/ConnorKruppResume.pdf"><button class="button-hollow first">View PDF</button></a>
                <a href="https://linkedin.com/in/connorkrupp"><button class="button-hollow">LinkedIn</button></a>
              </div>
            </div>
          </div>

          </article>

        <?php endwhile; else : ?>

          <article id="post-not-found" class="hentry cf">
              <header class="article-header">
                <h1><?php _e('Oops, Post Not Found!', 'bonestheme'); ?></h1>
            </header>
              <section class="entry-content">
                <p><?php _e('Uh Oh. Something is missing. Try double checking things.', 'bonestheme'); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e('This is the error message in the page-custom.php template.', 'bonestheme'); ?></p>
            </footer>
          </article>

        <?php endif; ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
