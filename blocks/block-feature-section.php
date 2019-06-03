<section class="spring-features">
  <div class="container">
    <div class="row flex-row">
      <div class="col-sm-6">
        <div class="feature-content">
          <h2><?php block_field('title') ?></h2>
          <p><?php block_field('description') ?></p>
          <div class="hide-resp">
            <a href="<?php block_field('cta-button-url') ?>" class="common-btn"><?php block_field('cta-button-text') ?></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="feature-img text-center">
          <img src="<?php block_field('image') ?>" class="img-responsive">
        </div>
        <div class="show-resp text-center">
          <a href="<?php block_field('cta-button-url') ?>" class="common-btn"><?php block_field('cta-button-text') ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
