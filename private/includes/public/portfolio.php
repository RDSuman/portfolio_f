<section class="page-section portfolio" id="portfolio">
  <div class="container">

    <!-- Portfolio Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- Portfolio Grid Items -->
    <div class="row">

      <!-- Portfolio Item 1 -->
      <div class="col-md-6 col-lg-4 mx-auto ">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="<?php echo h(url_for('img/portfolio/cabin.png')); ?>" alt="">
        </div>
      </div>


    </div>
    <!-- /.row -->

  </div>
</section>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="<?php echo url_for('img/portfolio/cabin.png'); ?>" alt="">
              <!-- Portfolio Modal - Text -->

              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <button class="btn btn-warning" href="#">
                Visit Project
              </button>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
