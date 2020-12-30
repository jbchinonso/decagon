<?php get_header();?>
      <!-- Banner Content-->
      <div class="container">
        <div class="home-header__text-box">
          <h1 class="heading-primary">
            Build faster with <span>vetted</span> remote software engineering
            talent.
          </h1>
          <h3 class="heading-secondary">
            Recruiting, training, ongoing HR management and work
            infrastructure<br />
            to help you scale quickly and cost effectively.
          </h3>
          <a href="contact.php" class="btn heading-btn">Build your team</a>
        </div>
      </div>
    </header>

    <section class="section-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center">
            <p>Our Engineers have built products for</p>
          </div>
          <div class="col-lg-8">
            <div class="work-with">
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/merck.svg') ?>" alt="Merck" />
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/nike.svg') ?>" alt="Nike" />
              <img
                src="<?php echo get_theme_file_uri('/assets/img/partners/mastercard.svg') ?>"
                alt="Mastercard"
              />
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/vertex.svg') ?>" alt="Vertex" />
              <img
                src="<?php echo get_theme_file_uri('/assets/img/partners/budweiser.svg') ?>"
                alt="Budweiser"
              />
              <img src="<?php echo get_theme_file_uri('/assets/img/partners/nokia.svg') ?>" alt="Nokia" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-why">
      <div class="container">
      <?php
$strength = new WP_Query(array(
    'posts_per_page' => 1,
    'post_type' => 'strength',
));

while ($strength->have_posts()) {
    $strength->the_post();?>
            <h2><?php the_title()?></h2>
            <div class="why-grid">
              <div class="why-image">
                <img src="<?php the_field('image');?>" class="img-fluid" alt="workstation" />
              </div>
              <div class="why-grid--list">
                <div class="why__item">
                  <?php
if (have_rows('strength1')) {
        while (have_rows('strength1')) {the_row();
            ?>
                      <h4 class="why__heading"><?php the_sub_field('title');?></h4>
                      <p class="why__text">
                      <strong><?php
$subtitle1 = get_sub_field('subtitle1');
            if (strlen($subtitle1) > 0) {
                the_sub_field('subtitle1');
            }?>
                      </strong>
                      <?php
$body1 = get_sub_field('body1');
            if (strlen($body1) > 0) {
                the_sub_field('body1');
            }?>
                      </p>
                      <p class="why__text">
                      <strong><?php
$subtitle2 = get_sub_field('subtitle2');
            if (strlen($body1) > 0) {
                the_sub_field('subtitle2');
            }?>
                      </strong>
                      <?php
$body2 = get_sub_field('body2');
            if (strlen($body2) > 0) {
                the_sub_field('body2');
            }?>
                      </p>
                  <?php
}}
    ?>
                </div>
                <div class="why__item">
                <?php
if (have_rows('strength2')) {
        while (have_rows('strength2')) {the_row();
            ?>
                      <h4 class="why__heading"><?php the_sub_field('title');?></h4>
                      <p class="why__text">
                      <strong><?php
$subtitle1 = get_sub_field('subtitle1');
            if (strlen($subtitle1) > 0) {
                the_sub_field('subtitle1');
            }?>
                      </strong>
                      <?php
$body1 = get_sub_field('body1');
            if (strlen($body1) > 0) {
                the_sub_field('body1');
            }?>
                      </p>
                      <p class="why__text">
                      <strong><?php
$subtitle2 = get_sub_field('subtitle2');
            if (strlen($body1) > 0) {
                the_sub_field('subtitle2');
            }?>
                      </strong>
                      <?php
$body2 = get_sub_field('body2');
            if (strlen($body2) > 0) {
                the_sub_field('body2');
            }?>
                      </p>
                  <?php
}}
    ?>
                </div>
                <div class="why__item">
                <?php
if (have_rows('strength3')) {
        while (have_rows('strength3')) {the_row();
            ?>
                      <h4 class="why__heading"><?php the_sub_field('title');?></h4>
                      <p class="why__text">
                      <strong><?php
$subtitle1 = get_sub_field('subtitle1');
            if (strlen($subtitle1) > 0) {
                the_sub_field('subtitle1');
            }?>
                      </strong>
                      <?php
$body1 = get_sub_field('body1');
            if (strlen($body1) > 0) {
                the_sub_field('body1');
            }?>
                      </p>
                      <p class="why__text">
                      <strong><?php
$subtitle2 = get_sub_field('subtitle2');
            if (strlen($body1) > 0) {
                the_sub_field('subtitle2');
            }?>
                      </strong>
                      <?php
$body2 = get_sub_field('body2');
            if (strlen($body2) > 0) {
                the_sub_field('body2');
            }?>
                      </p>
                  <?php
}}
    ?>
                </div>
                <div class="why__item">
                <?php
if (have_rows('strength4')) {
        while (have_rows('strength4')) {the_row();
            ?>
                      <h4 class="why__heading"><?php the_sub_field('title');?></h4>
                      <p class="why__text">
                      <strong><?php
$subtitle1 = get_sub_field('subtitle1');
            if (strlen($subtitle1) > 0) {
                the_sub_field('subtitle1');
            }?>
                      </strong>
                      <?php
$body1 = get_sub_field('body1');
            if (strlen($body1) > 0) {
                the_sub_field('body1');
            }?>
                      </p>
                      <p class="why__text">
                      <strong><?php
$subtitle2 = get_sub_field('subtitle2');
            if (strlen($body1) > 0) {
                the_sub_field('subtitle2');
            }?>
                      </strong>
                      <?php
$body2 = get_sub_field('body2');
            if (strlen($body2) > 0) {
                the_sub_field('body2');
            }?>
                      </p>
                  <?php
}}
    ?>
                </div>
              </div>
            </div>

        <section class="section-countries">
          <h4 class="content">
            <?php the_content();?>
          </h4>
        </section>
              <?php }?>
              
          </div>
        </section>

    <section class="section-group">

            <?php

$testimonials = new WP_Query(
    [
        'posts_per_page' => 1,
        'post_type' => 'testimonial',

    ]
);

while ($testimonials->have_posts()) {
    $testimonials->the_post();?>

      <div class="testimonial">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <img
                src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                alt="<?php the_title()?>"
                class="img-fluid"
              />
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <p class="testimonial-text">
                <?php echo jb_decagon_remove_default_ptag_from_testimonial_content(get_the_content()); ?>
              </p>
              <div class="testimonial-author">
                <p class="testimonial-author--name"><?php the_title()?></p>
                <p class="testimonial-author--bio">
                  <?php the_field('porfolio')?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }?>

      <div class="leadership">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2>Our Leadership</h2>
            </div>
          </div>
          <div class="leader--grid">


          <?php
$leaders = new WP_Query(array(
    'posts_per_page' => 6,
    'post_type' => 'portfolio',
    'orderby' => 'mete_value_num',
    'order' => 'DESC',
));

while ($leaders->have_posts()) {
    $leaders->the_post();?>

            <div class="leader--card">
              <div class="leader--card__img">
                <img
                  src="<?php the_field('image')?>"
                  alt="<?php the_title();?>"
                  class="img-fluid"
                />
              </div>
              <h3 class="leader--card__name"><?php the_title();?></h3>
              <p class="leader--card__position"><?php the_field('portfolio');?></p>
              <ul class="leader--card__qualification">
              <?php
$ac1 = get_field('achievement1');
    if (strlen($ac1) > 0) {?><li><?php the_field('achievement1');?></li><?php }?>
                <?php
$ac2 = get_field('achievement2');
    if (strlen($ac2) > 0) {?><li><?php the_field('achievement2');?></li><?php }?>
                <?php
$ac3 = get_field('achievement3');
    if (strlen($ac3) > 0) {?><li><?php the_field('achievement3');?></li><?php }?>
                <?php
$ac4 = get_field('achievement4');
    if (strlen($ac4) > 0) {?><li><?php the_field('achievement4');?></li><?php }?>
                <?php
$ac5 = get_field('achievement5');
    if (strlen($ac5) > 0) {?><li><?php the_field('achievement5');?></li><?php }?>
              </ul>
              <div class="leader--card__linkedin">
                <a
                  href="<?php the_field('linkedin');?>"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <img src="<?php echo get_theme_file_uri('/assets/img/linkedin.svg') ?>" alt="LinkedIn" />
                  <span>Find on LinkedIn &rarr;</span>
                </a>
              </div>
            </div>
          <?php }
?>

          <button id="toggleLC">See all</button>
        </div>
      </div>
    </section>

    <section class="section-partner-tech">
      <div class="container">
        <div class="our-partners">
          <h5>Our Partnerships</h5>
          <div class="our-partners--images">
          <?php 
          $partners = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'partner',
            'orderby' => 'mete_value_num',
            'order' => 'ASC',
        ));

        while ($partners->have_posts()) {
          $partners->the_post(); ?>
          <img
          src="<?php the_post_thumbnail_url( 'full' ) ?>"
          alt="<?php the_title(); ?>"
          class="img-fluid"
        />
        <?php } ?>
          </div>
        </div>
      </div>
      <div class="our-skills container">
        <h4>Skilled in technologies you need</h4>
        <h6>
          Access a pool of skilled engineers to match your product requirements
        </h6>
        <ul>
          <li>Back-end engineer</li>
          <li>Front-end engineer</li>
          <li>Full-Stack engineer</li>
          <li>Mobile Engineer</li>
          <li>QA Engineer</li>
          <li>React Developer</li>
          <li>Android Developer</li>
          <li>IOS Developer</li>
          <li>React Native Developer</li>
          <li>Python Developer</li>
          <li>Node.JS Developer</li>
          <li>Javascript Developer</li>
          <li>Java Developer</li>
          <li>C# Developer</li>
          <li>Devops Engineer</li>
          <li>UI/UX Developer</li>
        </ul>
      </div>
    </section>

    <section class="section-media">
      <div class="container">
        <div class="media-heading">
          <h4>News from the HQ</h4>
          <a href="https://blog.decagonhq.com/">Visit Blog</a>
        </div>
        <div class="media-grid">
          <div
            class="news-card"
            style="background-image: url(<?php echo get_theme_file_uri('/assets/img/FEB_6268\ 1.jpg') ?>)"
          >
            <a
              href="https://techpoint.africa/2020/02/04/indeed-visits-decagon-institute/"
              class="news-card__overlay"
            ></a>
            <div class="news-card__details">
              <h4>Indeed Visits DecagonHQ to meet remote team</h4>
              <a
                href="https://techpoint.africa/2020/02/04/indeed-visits-decagon-institute/"
                >Read More</a
              >
            </div>
          </div>

          <div
            class="news-card"
            style="background-image: url(<?php echo get_theme_file_uri('/assets/img/obaseki\ 1.jpg') ?>)"
          >
            <a
              href="http://www.edostate.gov.ng/obaseki-set-to-launch-edo-tech-park-partners-decagon-to-train-15000-software-engineers/"
              class="news-card__overlay"
            ></a>
            <div class="news-card__details">
              <h4>Decagon to train 15,000 people in Edo state</h4>
              <a
                href="http://www.edostate.gov.ng/obaseki-set-to-launch-edo-tech-park-partners-decagon-to-train-15000-software-engineers/"
                >Read More</a
              >
            </div>
          </div>

          <div
            class="news-card"
            style="background-image: url(<?php echo get_theme_file_uri('/assets/img/Decagon-02-2\ 1.jpg') ?>)"
          >
            <a
              href="https://tribuneonlineng.com/sterling-bank-decagon-train-5000-nigerian-graduates-on-software-engineering/"
              class="news-card__overlay"
            ></a>
            <div class="news-card__details">
              <h4>Sterling Bank signs deal to finance Decadev program</h4>
              <a
                href="https://tribuneonlineng.com/sterling-bank-decagon-train-5000-nigerian-graduates-on-software-engineering/"
                >Read More</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

   <?php get_footer()?>