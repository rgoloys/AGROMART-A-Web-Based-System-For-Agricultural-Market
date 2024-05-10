<style>  
nav {
	background: #00796b;
	height: 64px;
	padding: 0 20px;
	display: flex;
	align-items: center;
	grid-gap: 28px;
	position: sticky;
	top: 0;
	left: 0;
	z-index: 100;
    display: none;
}
.modal {
  /* Hidden by default */
     position: fixed; /* Stay in place */
     left: 0;
     top: 0;
     width: 100%; /* Full width */
     height: 100%; /* Full height */
     overflow: auto; /* Enable scroll if needed */
     background-color: rgb(0,0,0); /* Fallback color */
     background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    
   }
   
   /* Modal Content/Box */
   .modal-content {
     
     margin: 5% auto; /* 15% from the top and centered */
     margin-top: 0;
     padding: 20px;
     width: 530px; /* Could be more or less, depending on screen size */
     height: 100%;
   }
   
   /* The Close Button */
   .close {
     color: #aaa;
     float: right;
     font-size: 28px;
     font-weight: bold;
   }
   
   .close:hover,
   .close:focus {
     color: black;
     text-decoration: none;
     cursor: pointer;
   }
   .fcc-btn {
     background-color: #04AA6D;
     color: black;
     padding: 15px 25px;
     text-decoration: none;
   }
   .fcc-btn:hover {
    color: white;
   }
   
  </style>



<div id="myModal" class="modal">
        

     
<?php  $data[0]['user_id']; ?>
        <?php  $data[0]['fname']; ?>
        <?php  $data[0]['lname']; ?>
        <?php  $data[0]['email']; ?>
        <?php  $data[0]['address']; ?>
        <?php  $data[0]['password']; ?>
        <?php  $data[0]['valid_id']; ?>
        <?php  $data[0]['user_avtar']; ?>
        <?php  $data[0]['gcash'];   ?>

        <div class="modal-content">
        
          <div class="line">
          <a href="<?php echo base_url();?>adminseller">
          <span class="close"  >&times;</span>
        <a>
 
        <div class="board">
        <div class="user_img">
          <img
          src="<?php echo base_url('upload/selfie/'. $data[0]['user_avtar']) ?>">
           
        </div>
  
        <div class="user_info">
          <h1> <?php echo $data[0]['fname']; ?>
        <?php echo $data[0]['lname']; ?> </h1>
          <p>
          <?php echo $data[0]['email']; ?>
          </p>
          <div class="row">
            <div class="follow">
              <p><?php echo $data[0]['address']; ?></p>
            
            </div>
            <div class="follower">
              
            </div>
            <div >
              <a href=""></a>
            </div>
          </div>
        </div>
      </div>
     
       <div class="btns">
              <a> <button onclick="close()"; >Back</button> </a>
             <a href="<?php echo base_url();?>adminseller"> <button>Ok</button> </a>
        </div>
       </div>

      </div>
        </div>
        
        <script>
    
          //modal
// Get the modal
var modal = document.getElementById("myModal");
var modal = document.getElementByClass("sidebar");
const toggleSidebar = document.querySelector('nav .toggle-sidebar');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

          </script>
