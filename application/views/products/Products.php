      
      
    <!--===== DITO UNG PRODUCT VIEW NG ALL PRODUCTS =====-->

      <!-- ======= Best Selling Products ======= -->
      <section id="pricing" class="pricing sections-bg">
      <div class="containers" data-aos="fade-up">
        <div class="section-header">
          <h1>BEST SELLING</h1>
        </div>
        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">
          <!--Top 2-->
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Corn</h3> <!--Product Number 2-->
              <div class="space" >
                <div class="pie animate" style="--p:75;--c:#ff8f0f;"> 
                  <h3>75%</h3><!--Percentage inside the pie-->
                </div>
              </div>       
               <div class="text-center">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->


          <!--Top 1-->
           <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Rice/Grains</h3>
             <div class="space" >
                <div class="pie animate" style="--p:80;--c:#2284e6;">
                  <h5>80%</h5>
                </div>
              </div> 
              <div class="text-center">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <!--Top 3-->
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Granger</h3>
              <div class="space">
                <div class="pie animate" style="--p:30;--c:#90EE90;">
                  <h5>30%</h5>
                </div>
              </div>
              <div class="text-center">
                <a href="#" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
        </div>
      </div>
    </section><!-- End Pricing Section -->

    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <!--<div class="section-header">
        <h2 style="color: black;">Happy Shopping Shopers</h2>
      </div>-->
      <div class="" data-aos="fade-up">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <!--AYUSIN UNG KANYANG FILTERIZATION-->
          <div id="myBtnContainer">
            <ul class="portfolio-flters">
              <li><button class="btn active" onclick="filterSelection('all')"> All</button></li>
              <li><button class="btn" onclick="filterSelection('CropProduct')">Crop Products</button></li>
              <li><button class="btn" onclick="filterSelection('Livestock')"> Livestock</button></li>
              <li><button class="btn" onclick="filterSelection('Fertilizer')"> Fertilizer</button></li>
              <li><button class="btn" onclick="filterSelection('Others')"> Others</button></li>
            </ul>
          </div>



          <div class="row gy-4 portfolio-container myBtnContainer">

            <!--manipulate tables-->
            <?php foreach($product as $key => $rows): ?>
            <div class="filterDiv portfolio-item filter-app <?php echo base_url($rows['id']);?> <?php echo base_url($rows['p_category']);?>">
              
              <div class="portfolio-wrap">

                <a href="<?= base_url('images/'.$rows['p_image']); ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="<?= base_url('images/'.$rows['p_image']); ?>" alt="Product Image" width="330px" height="330px">
                </a>

                <div class="portfolio-info">

                  <h4>
                    <!--    
                      --using the directory of controller and function you can --literally load the page without directing in routes --configuration     
                    --> 
                    <a href="<?php echo base_url('message');?>" title="More Details"><?php $string = $rows['p_title']; ?>
                      <?php $string = word_limiter($string, 5); ?>
                      <?php echo $string; ?>
                  
                    </a>
                  </h4>
                  <p>
                    <?php $string = $rows['p_description']; ?>
                    <?php $string = word_limiter($string, 5); ?>
                    <?php echo $string; ?>

                  </p>
                  <p><span style="font-weight: bold;">₱</span><?php $string = $rows['p_price']; ?>
                     <?php $string = word_limiter($string, 5); ?>
                     <?php echo $string; ?></p>
                  <p><span style="font-weight: bold;">Stocks:</span><?php $string = $rows['p_stocks']; ?>
                     <?php $string = word_limiter($string, 5); ?>
                     <?php echo $string; ?></p>
                  <p><?php $string = $rows['p_address']; ?>
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



<script>
  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }  

  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for(i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }  

  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>
<style>
.filterDiv {
  float: left;
  width: 350px;
  height: 350px;
  height: auto;
  text-align: justify;
  display: none;
  line-height: 1.5;
}
.myBtnContainer{
  margin-left: 10%;
  margin-right: 10%;
 
}
.show {
  display: block;
}

.container {

  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: #f85a40;
}

.btn.active {
  background-color: #008374;
  color: white;
}
</style>