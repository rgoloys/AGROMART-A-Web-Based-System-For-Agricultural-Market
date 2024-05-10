<!DOCTYPE html>

<html>

<head>

    <title>Agromart</title>
    <link rel = "icon"   href = "<?php echo base_url('Impact/');?>assets/img/tlogo.png" 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <style type="text/css">
        /* The Modal (background) */
  #my_camera{
     
  margin: 0% auto; /* 15% from the top and centered */
 
}
  
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;

  margin: 5% auto; /* 15% from the top and centered */
  margin-top: 0%;
  padding: 20px;
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
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
  background-color: #199319;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
}
.fcc-btn:hover {
  background-color: #223094;
}


    </style>

</head>

<body>

  

<div class="container">

    <h1 class="text-center">Capture webcam image with php and jquery - ItSolutionStuff.com</h1>

   

    <form method="POST" action="<?= base_url() ?>SellerController/sellerimage" enctype="multipart/form-data">

        <div class="row">

            <div class="col-md-6">

                

            <div class="col-md-6">

                <div id="results">Your captured image will appear here...</div>

            </div>
            <button type="button" class="fcc-btn" id="myBtn">Open Modal</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">
        
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <div id="my_camera"></div>

            <br/>

            <input type=button value="Take Snapshot" onClick="take_snapshot()">

            <input type="hidden" name="image" class="image-tag">

        </div>
          </div>
            

            <div class="col-md-12 text-center">

                <br/>

                <button class="btn btn-success">Submit</button>

            </div>

        </div>
      
        
        </div>
    </form>
      
          
  
    

</div>

  

<!-- Configure a few settings and attach camera -->

<script language="JavaScript">

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  
    Webcam.set({

      width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);
            modal.style.display = "none";

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>


 

</body>

</html>