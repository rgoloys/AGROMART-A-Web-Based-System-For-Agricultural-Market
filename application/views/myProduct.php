<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio sections-bg">
      <!--<div class="section-header">
        <h2 style="color: black;">Happy Shopping Shopers</h2>
      </div>-->
      <div class="" data-aos="fade-up">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">

            <!--manipulate tables-->
            <?php foreach($product as $key => $rows): ?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app <?php echo base_url($rows['product_id']);?> <?php echo base_url($rows['product_category']);?>">
              
              <div class="portfolio-wrap">

                <a href="<?php echo base_url('Impact/');?>assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="<?php echo base_url('Impact/');?>assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                </a>

                <div class="portfolio-info">
                  <h4>
                    <a href="<?php echo base_url('S_page/read/'.$rows['product_id']);?>" title="More Details"><?php $string = $rows['product_title']; ?>
                      <?php $string = word_limiter($string, 5); ?>
                      <?php echo $string; ?>
                  
                    </a>
                  </h4>
                  <p>
                    <?php $string = $rows['product_description']; ?>
                    <?php $string = word_limiter($string, 5); ?>
                    <?php echo $string; ?>

                  </p>
                  <p><span style="font-weight: bold;">₱</span><?php $string = $rows['product_price']; ?>
                     <?php $string = word_limiter($string, 5); ?>
                     <?php echo $string; ?></p>
                  <p><span style="font-weight: bold;">Stocks:</span><?php $string = $rows['product_stocks']; ?>
                     <?php $string = word_limiter($string, 5); ?>
                     <?php echo $string; ?></p>
                  <p><?php $string = $rows['product_address']; ?>
                     <?php $string = word_limiter($string, 5); ?>
                     <?php echo $string; ?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            <?php endforeach ?>

          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->