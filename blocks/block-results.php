<section class="proven-result">
  <div class="container">
    <div class="main-head text-center">
      <h2><?php block_field('section-heading') ?></h2>
    </div>
    <div class="result-outer">
      <div class="row">
          <div class="col-sm-4 result-block">
            <div class="result-block-inner">
              <div class="result-img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result-img1.jpg" class="img-responsive">
              </div>
              <div class="result-detail">
                <h3><?php block_field('block-1-title') ?></h3>
                <p><?php block_field('block-1-description') ?></p>
              </div>
            </div>
          </div>
          <div class="col-sm-4 result-block">
            <div class="result-block-inner">
                <div class="result-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result-img2.jpg" class="img-responsive">
                </div>
                <div class="result-detail">
                  <h3><?php block_field('block-2-title') ?></h3>
                  <p><?php block_field('block-2-description') ?></p>
                </div>
            </div>
          </div>
          <div class="col-sm-4 result-block">
            <div class="result-block-inner">
                <div class="result-img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/result-img3.jpg" class="img-responsive">
                </div>
                <div class="result-detail">
                  <h3><?php block_field('block-3-title') ?></h3>
                  <p><?php block_field('block-3-description') ?></p>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
