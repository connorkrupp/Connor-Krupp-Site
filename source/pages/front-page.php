<?php get_header(); ?>

  <div id="content" class="home">
    <div id="inner-content" class="cf">
      <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="hero">
            <div class="hero-content-wrap wrap">
              <h2>Connor Krupp</h2>
              <p>College student, iOS and web developer, and has an unhealthy obsession with the programming language Swift.</p>
              <div class="social-link-wrap">
                <a href="http://localhost:3000/connor/contact"><span class="social-link one"></span></a>
                <a href="#"><span class="social-link two"></span></a>
                <a href="http://localhost:3000/connor/contact"><span class="social-link three"></span></a>
              </div>
            </div>
          </div>

          <div class="title-desc cf">
            <div class="wrap">
              <div class="title-desc-content">
                <h2>Passionate about everything<br /> <strong>Computer Science</strong></h2>
                <div class="section-underline"></div>
                <p>Bored one day in 2009, I decided to learn how to program. So, I bought a book on C++ and started reading (and coding). Since then I have moved on to iOS development as my main focus. I also dabble in web development and still some C++.</p>
              </div>
            </div>
          </div>

          <div class="skills-section">
            <div class="wrap cf">
              <div class="skill-content">
                <div class="skill-image one"></div>
                <h2>iOS <br >Development</h2>
                <p>Beginning in 2010, I have been focusing on iOS development. Hell, even before I had a Mac I was writing code in Objective-C and Cocoa hoping it would work when I finally did get a Mac. Thankfully, it did, and since then I have done </p>
              </div>
              <div class="skill-content">
                <div class="skill-image two"></div>
                <h2>Web <br >Development</h2>
                <p>Inspired by a campus club called Michigan Hackers (of which I am now a core team member), I began learning basic web development in early 2015. To continue my learning, I interned at Thinkbox Creative in Grand Rapids, Michigan for the summer of 2015.</p>
              </div>
              <div class="skill-content">
                <div class="skill-image three"></div>
                <h2>UofM <br >Student</h2>
                <p>I had my bedroom painted maize and blue when I was eight years old and that dream carried me all the way to the University of Michigan - College of Engineering. I am currently a sophomore in Computer Science Engineering and absolutely loving it.</p>
              </div>
            </div>
          </div>

          <div class="resume-cta">
            <div class="wrap cf">
              <h2>Check out my resume!</h2>
              <div class="section-underline"></div>
              <p>I have a web version and a PDF, both accessible via the button below.</p>
              <button class="button-hollow">View Resume</button>
            </div>
          </div>

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
