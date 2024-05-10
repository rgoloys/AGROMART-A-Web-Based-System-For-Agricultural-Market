<style>
  .iconix img{
    width: 15px;
    height: 15px;
  }
  .meta-top ul li{
    display: inline-block;
    width: 50%;
    justify-content: start;
    padding: .5%;
    margin: 0;
  }
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.flexs{
  display:inline-flex;
  justify-content:space-between; 
  width:100%; 
  padding:10px;
}

textarea {
    width: 100%;
    height: 50px;
    margin-top: 10px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}


#submit {
  display: block;
  position: relative;
  background: linear-gradient(#fe3b5a, #fd7914);
  border: none;
  padding: 0.8em 2em;
  color: #ffffff;
  font-size: 1em;
  border-radius: ;
  margin: 1em auto 0 auto;
  cursor: pointer;
}
#submit:disabled {
  cursor: not-allowed;
}

#submit-section {
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: #ffffff;
  top: 0;
  left: 0;
  place-items: center;
  border-radius: 0.5em;
}
.hide {
  display: none;
}
.show {
  display: grid;
}
</style>

<main id="main">
<!-- ======= Product Details Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5" style="display:flex; justify-content:center;" >

      <div class="col-lg-8" style="width: 70%;" >

        <article class="blog-details">

          <div class="post-img">
            <img src="<?= base_url('images/'. $product->p_image) ?>" alt="" class="img-fluid">
          </div>

          <h2 class="title"><?= $product->p_title; ?></h2>
          <div class="content">
            <p><?= $product->p_description; ?></p>
          </div><!-- End post content -->

          <div class="meta-top">
            <ul>
              <li class="d-flex align-items-center iconix"> <strong><img src="<?php echo base_url('Impact/');?>assets/img/user.svg" alt=""> Seller name: </strong>John Doe</a></li>
              <li class="d-flex align-items-center iconix"> <strong><img src="<?php echo base_url('Impact/');?>assets/img/calendar-clock.svg" alt=""> Date Harvested: </strong>Jan 1, 2022</a></li>
              <li class="d-flex align-items-center iconix"> <strong><img src="<?php echo base_url('Impact/');?>assets/img/sack-dollar.svg" alt=""> Price: </strong><?= $product->p_price; ?></a></li>
              <li class="d-flex align-items-center iconix"> <strong><img src="<?php echo base_url('Impact/');?>assets/img/shopping-cart.svg" alt=""> Stock: </strong><?= $product->p_stocks; ?></a></li>
              <li class="d-flex align-items-center iconix"> <strong><img src="<?php echo base_url('Impact/');?>assets/img/thumbtack.svg" alt=""> Status: </strong> Nearly Expire </a></li>
              <li class="d-flex align-items-center iconix"> <strong><img src="<?php echo base_url('Impact/');?>assets/img/marker.svg" alt=""> Address: </strong><?= $product->p_address; ?></a></li>
            </ul>
          </div><!-- End meta top -->


          <div class="meta-bottom" style="font-weight: 900; display:flex; justify-content:center; font-size20px" >
            <a href="<?= base_url('checkout/'.$product->id); ?>" class="buy-btn">Buy Now</a>
          </div><!-- End meta bottom -->
        </article><!-- End blog post -->


        <div class="post-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End post author -->

      


        <div class="comments">
          <h4 class="comments-count">Feedbacks</h4>
          <div id="comment-1" class="comment">
            <div class="d-flex">
              <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
              <div>
                <h5><a href=""><?= $rate->fname; ?> <?= $rate->lname; ?></a> <a href="<?= base_url('reply/'. $product->id) ?>" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                <time datetime="2020-01-01"><?= date('F j, Y', strtotime($date)) ?>
                <p>
                <?= $rate->comment; ?>
                </p>
                <form action="<?= base_url('addReps/'. $product->id) ?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col form-group">

                      <label>Your Replies:</label>
                      <textarea name="comment" required></textarea>
                      <button id="submit" type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- End comment #1 -->
      </div>
    </div><!-- End blog comments --> 
  </div> 
</section><!-- End Blog Details Section -->




</main><!-- End #main -->
