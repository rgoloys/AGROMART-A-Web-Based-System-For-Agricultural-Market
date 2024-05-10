
<main id="main">
<!-- ======= Product Details Section ======= -->
<section id="blog" class="blog">

  
        
<!-- <a href="<?= base_url('reply/'. $product->id) ?>" class="reply"><i class="bi bi-reply-fill"></i> Reply</a>-->
        
        <div class="comments" style="width:100%; display:flex;justify-content:center;">
         
          <div id="comment-1" class="comment" style="width:70%;">
    
        
          

          


          <div class="reply-form" style=" margin-top:-100px;">

            <h4 class="repTiltle repTi">Leave a Feedbacks</h4>
        
            <form action="<?= base_url('addRate/'. $product->id) ?>" method="POST" enctype="multipart/form-data">

              <div class="row" style="width:100%; display:flex; justify-content:center;">
                <div class="reply-form forms">
                  <table style="margin: 12px;">
                    <tr>
                      Add photo:
                    </tr>
                    <tr style="width: 550px;display:flex; justify-content:space-evenly;">
                      <td><input type="file" name="r_image1" class="form-control" id="name" placeholder="image 1" style="width: 230px;"></td>
                      <td><input type="file" name="r_image2" class="form-control" id="name" placeholder="image 2" style="width: 230px;"></td>
                    </tr>
                    <tr  style="width: 550px; display:flex; justify-content:space-evenly;">
                      <td><input type="file" name="r_image3" class="form-control" id="name" placeholder="image 3" style="width: 230px;"></td>
                      <td><input type="file" name="r_image4" class="form-control" id="name" placeholder="image 4" style="width: 230px;"></td>
                    </tr>
                  </table>
                  <h6 class="repTiltle">Rate the products:</h6>
                  <div class="flexs">

                    <div class="star-container inactive">
                      <input class="fa-regular fa-star" type="radio" name="rating" id="star5" value="1">
                      <label for="star6"></label>
                    </div>

                    <div class="star-container inactive">
                      <input class="fa-regular fa-star" type="radio" name="rating" id="star4" value="2">
                      <label for="star5"></label>
                    </div>

                    <div class="star-container inactive">
                      <input class="fa-regular fa-star" type="radio" name="rating" id="star3" value="3">
                      <label for="star4"></label>
                    </div>

                    <div class="star-container inactive">
                      <input class="fa-regular fa-star" type="radio" name="rating" id="star2" value="4">
                      <label for="star3"></label>
                    </div>

                    <div class="star-container inactive">
                      <input class="fa-regular fa-star" type="radio" name="rating" id="star1" value="5">
                      <label for="star2"></label> 
                    </div>
                  </div>
                  <div class="col-md-6 form-group" style="display:flex; justify-content:center; width:100%; height:30px; margin-top:10px;" >
                    <h3 id="message"></h3>
                  </div>
                  <div class="row" style="margin:0;">
                    <div class="col form-group">
                      <label class="com">Comment:</label>
                      <textarea class="area" name="comment" required></textarea>
                      <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>           
          </div>       
        </form>
      </div>
    </div><!-- End blog comments --> 
  </div> 
</section><!-- End Blog Details Section -->



<style>
  .iconix img{
    width: 15px;
    height: 15px;
  }
  .meta-top ul li{
    display: inline-block;
    width: 100%;
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
.repTiltle{
  width: 100%;
  display: flex;
  justify-content: start;
}
.flexs{
  display:inline-flex;
  justify-content:space-between; 
  width:100%; 
  padding:10px;
}
.rating {
    display: block;
}
.rating input {
    display: none;
    visibility: none;
}
.rating label:before {
    content: "\2605";
    font-size: 24px;
    padding: 5px;
    color: #ccc;
    cursor: pointer;
}

.rating input:checked ~ label:before {
    color: gold;
}

button {
    margin-top: 10px;
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.fa-star{
  font-size: 1.5em;
  color: #ffd700;
  height: .5%;
  width: .5%;
}
.number {
  display: block;
  text-align: center;
}
#submit {
  display: block;
  position: relative;
  background: #008374;
  border: none;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 1.2em;
  border-radius: 2em;
  margin: 1em auto 0 auto;
  cursor: pointer;
  width: 150px;
}
#submit:disabled {
  cursor: not-allowed;
}
#submit:hover {
  background: linear-gradient(#fe3b5a, #fd7914);
}
#message {
  text-align: center;
  margin-bottom: 2em;
  font-size: 18px;
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

.checked {
  color: orange;
}
.meta-bottom{
  font-weight: 900; 
  display:flex; 
  justify-content: flex-end; 
  font-size:20px; 
  height: 40px;
}
.forms{
  height:70%; 
  width: 70%;
}
.com{
  
}
textarea {
  width: 100%;
  height: 100px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
@media (max-width: 768px) {
  .repTiltle{
    font-size: 12px;
  }
  .repTi{
    font-size: 14px;
    font-weight: 500;
  }
  .repTiltle{
    width: 100%;
    display: flex;
    justify-content: center;
  }
  .forms{
    height:70%; 
    width: min(100%, 500px);
  }
  #message {
    text-align: center;
    margin-bottom: 2rem;
    font-size: 12px;
  }
  .com{
    font-size: 12px;
  }
  .area{
    margin: 0;
    width: 100%;
    height: 70px;
  }
  #submit {
    background: #008374;
    padding: 5px 10px;
    color: #ffffff;
    font-size: 1rem;
    border-radius: 1em;
    cursor: pointer;
    width: 150px;
  }
}
</style>



</main><!-- End #main -->

<script>
  /* For getting the total purchase */
  const unitPrice = <?= $prod->p_price; ?>;
  // Get all quantity input elements
  const quantityInputs = document.querySelectorAll('.quantity');

  // Attach event listeners to plus and minus buttons
  document.querySelectorAll('.plus').forEach(plusBtn => {
    plusBtn.addEventListener('click', incrementQuantity);
  });
        
  document.querySelectorAll('.minus').forEach(minusBtn => {
    minusBtn.addEventListener('click', decrementQuantity);
  });

  // Function to increment quantity
  function incrementQuantity(event) {
    const parent = event.target.parentElement;
    const quantityInput = parent.querySelector('.quantity');
    quantityInput.value = parseInt(quantityInput.value) + 1;
    updateTotal(quantityInput);
  }

  // Function to decrement quantity
  function decrementQuantity(event) {
    const parent = event.target.parentElement;
    const quantityInput = parent.querySelector('.quantity');
    if (parseInt(quantityInput.value) > 1) {
      quantityInput.value = parseInt(quantityInput.value) - 1;
      updateTotal(quantityInput);
    }
  }

  // Function to update total when quantity changes
  var num = <?= $prod->p_price; ?>;
  function updateTotal(quantityInput) {
    const parentRow = quantityInput.closest('tr');
    const price = parseFloat(parentRow.querySelector('td:nth-child(2)').textContent.replace('$', ''));
    const quantity = parseInt(quantityInput.value);
    const totals = num * quantity;
    //const totals = total + 50;
    parentRow.querySelector('.total').textContent = totals.toFixed(2);
    let x = 100 + 50;
    document.getElementById("sum").value = totals;
  }

  /* For ratings */
  let starContainer = document.querySelectorAll(".star-container");
  const submitButton = document.querySelector("#submit");
  const message = document.querySelector("#message");
  const submitSection = document.querySelector("#submit-section");

  //Events For touch and mouse
  let events = {
    mouse: {
      over: "click",
    },
    touch: {
      over: "touchstart",
    },
  };

  let deviceType = "";
  //Detect touch device
  const isTouchDevice = () => {
    try {
      //We try to create TouchEvent (it would fail for desktops and throw error)
      document.createEvent("TouchEvent");
      deviceType = "touch";
      return true;
    } catch (e) {
      deviceType = "mouse";
      return false;
    }
  };

  isTouchDevice();

  starContainer.forEach((element, index) => {
    element.addEventListener(events[deviceType].over, () => {
      submitButton.disabled = false;
      if (element.classList.contains("inactive")) {
        //Fill Star
        ratingUpdate(0, index, true);
      } else {
        //Regular stars (remove color)
        ratingUpdate(index, starContainer.length - 1, false);
      }
    });
  });

  const ratingUpdate = (start, end, active) => {
    for (let i = start; i <= end; i++) {
      if (active) {
        starContainer[i].classList.add("active");
        starContainer[i].classList.remove("inactive");
        starContainer[i].firstElementChild.className = "fa-star fa-solid";
      } else {
        starContainer[i].classList.remove("active");
        starContainer[i].classList.add("inactive");
        starContainer[i].firstElementChild.className = "fa-star fa-regular";
      }
    }
    //Message
    let activeElements = document.getElementsByClassName("active");
    if (activeElements.length > 0) {
      switch (activeElements.length) {
        case 2:
          message.innerText = "Terrible";
          break;
        case 3:
          message.innerText = "Bad";
          break;
        case 4:
          message.innerText = "Satisfied";
          break;
        case 5:
          message.innerText = "Good";
          break;
        case 6:
          message.innerText = "Excellent";
          break;
      }
    } else {
      message.innerText = "";
    }
  };

  submitButton.addEventListener("click", () => {
    submitSection.classList.remove("hide");
    submitSection.classList.add("show");
    submitButton.disabled = true;
  });
  window.onload = () => {
    submitButton.disabled = true;
    submitSection.classList.add("hide");
  };


  /* for image carousel */
  document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".carousel-slide");
    const galleryImages = document.querySelectorAll(".image-gallery img");
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = "block";
            } else {
                slide.style.display = "none";
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    function showImageGallery(index) {
        galleryImages.forEach((image, i) => {
            if (i === index) {
                image.style.border = "2px solid #007bff";
            } else {
                image.style.border = "none";
            }
        });
    }

    galleryImages.forEach((image, i) => {
        image.addEventListener("click", () => {
            currentIndex = i;
            showSlide(currentIndex);
            showImageGallery(currentIndex);
        });
    });

    document.getElementById("nextBtn").addEventListener("click", nextSlide);
    document.getElementById("prevBtn").addEventListener("click", prevSlide);

    // Show the initial slide and gallery
    showSlide(currentIndex);
    showImageGallery(currentIndex);
});

</script>

<!--
  <div class="post-author" style="display:block; height: auto;">
          <h3 style="display:flex; justify-content:center;" >Ratings</h3>
          <div style="display:flex; justify-content:space-between;">
            <div class="starss" style="display:flex; justify-content:space-between;">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>
            <h6>(<?php echo $Excellent; ?>)   Excellent</h6>
          </div>
          <div style="display:flex; justify-content:space-between;">
              <div class="starss" style="display:flex; justify-content:space-between;">
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <h6>(<?php echo $Good; ?>)   Good</h6>
          </div>
          <div style="display:flex; justify-content:space-between;">
              <div class="starss" style="display:flex; justify-content:space-between;">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              </div>
              <h6>(<?php echo $Satisfied; ?>)   Satisfied</h6>
          </div>
          <div style="display:flex; justify-content:space-between;">
            <div class="strass" style="display:flex; justify-content:space-between;">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
            <h6>(<?php echo $Bad; ?>)   Bad</h6>
          </div>
          <div style="display:flex; justify-content:space-between;">
            <div class="starss" style="display:flex; justify-content:space-between;">
              <span class="fa fa-star"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
            <h6>(<?php echo $Terrible; ?>)   Terrible</h6>
          </div>
        </div><!-- End post author -->