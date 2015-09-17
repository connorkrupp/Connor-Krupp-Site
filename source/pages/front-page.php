<?php get_header(); ?>

  <div id="content" class="home">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="hero">
            <div class="hero-content-wrap wrap">
              <h2>Connor Krupp</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
          </div>

          <div class="title-desc cf">
            <div class="wrap">
              <div class="title-desc-content">
                <h2>Passionate about everything<br /> <strong>Computer Science</strong></h2>
                <div class="section-underline"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="title-desc-image"></div>
            </div>
          </div>

          <div class="skills-section">
            <div class="wrap cf">
              <div class="skill-content">
                <div class="skill-image"></div>
                <h2>Title One</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi labore, fugit eius ipsum delectus ut quasi repellat quibusdam, laudantium nihil perferendis aspernatur quia! Voluptas numquam voluptatem laborum, natus velit!</p>
              </div>
              <div class="skill-content">
                <div class="skill-image"></div>
                <h2>Title One</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi labore, fugit eius ipsum delectus ut quasi repellat quibusdam, laudantium nihil perferendis aspernatur quia! Voluptas numquam voluptatem laborum, natus velit!</p>
              </div>
              <div class="skill-content">
                <div class="skill-image"></div>
                <h2>Title One</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus eligendi labore, fugit eius ipsum delectus ut quasi repellat quibusdam, laudantium nihil perferendis aspernatur quia! Voluptas numquam voluptatem laborum, natus velit!</p>
              </div>
            </div>
          </div>

        <?php endwhile; else : ?>

          <article id="post-not-found" class="hentry cf">
              <header class="article-header">
                <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
              <section class="entry-content">
                <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
            </footer>
          </article>

        <?php endif; ?>

      </main>
    </div>
  </div>

<?php get_footer(); ?>
