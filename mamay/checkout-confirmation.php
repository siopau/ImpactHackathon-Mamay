
<?php
 include 'includes/connection.php';

// $totalpay = isset($_POST['totalpay']) ? $_POST['totalpay'] : NULL;

  $id = $_GET['id']; 

// echo $id;


    

?>
<!DOCTYPE html>
<head>
    <title>Mamay | Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="includes/custom.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-4 text-center" >
                    <span style="font-size: 3em; color: Grey; ">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <h4>Address</h4>
                </div>
                <div class="col-4 text-center">
                    <span style="font-size: 3em; color: Grey;">
                        <i class="fas fa-credit-card"></i>
                    </span>
                    <h4>Payment</h4>
                </div>
                <div class="col-4 text-center">
                    <span style="font-size: 3em; color: Tomato;">
                        <i class="fas fa-check-circle"></i>
                    </span>
                    <h4>Confirmation</h4>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="container">
                        <div class="card">
            <div class="card-header">
             <h6 style="font-weight: bolder">Breastmilk Information</h6>
            </div>
            <div class="card-body" style="font-size: 20px">
                <div class ="row">
                    <div class="col-1" >
                        <i class="fas fa-user" style="color: pink"></i>
                        </div>
                    <div class="col-11">
                        <label for="user">  <?php
                          include 'includes/connection.php';
                           // session_start();
                            $result = mysqli_query($dbh,"SELECT * from user where username = '".$_SESSION['username']."'");
                              while($row = mysqli_fetch_array($result))
                                  {

                              echo "<td>" . $row['full_name'] . "</td>";
                             
                              $address    = $row['address']   ;
                                 }
                              mysqli_close($dbh);
                      ?></label>
                    </div>
                </div>

                <div class ="row">
                     <div class="col-1">
                        <i class="fas fa-calendar" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="datetime"> <?php
                          include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from milk where id ='$id' ");
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                              echo "<td>" . $row2['date'] . ", " . $row2['time'] ."</td>";
                             
                               $volume    = $row2['milk_volume']   ;
                               $storage    = $row2['storage']   ;
                               $amount    = $row2['total_amount']   ;
                               $total    = $row2['final_payment']   ;
                              

             
                                 }
                              mysqli_close($dbh);
                      ?></label>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker-alt" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="location"> <?php  echo $address; ?></label>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-tag" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="tag">&#8369;  <?php  echo $amount; ?>.00</label>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-prescription-bottle" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="bottle"> <?php  echo $volume; ?>ml</label>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-box" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="storage"> <?php  echo $storage; ?></label>
                    </div>
                </div> 
           

            </div>
        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="container">
                    <div class="container">
                        <div class="card">
                        <div class="card-header">
                            <h6>Payment Details</h6>
                        </div>
                        <div class="card-body">
                             <div class="row">
                                <div class="col">
                                    <h6>Delivery Fee:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-right">&#8369; 50.00</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6>Total Cost:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-right">&#8369; <?php  echo $total; ?>.00</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6>Payment Method:</h6>
                                </div>
                                <div class="col">
                                    <h6 class="text-right">Cash on Delivery</h6>
                                </div>
                            </div>
                            <br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="container">
                     <div class="container">
                        <button id="myBtn" type="button" class="btn btn-danger btn-lg btn-block">Confirm</button>
                     </div>
                </div>
            </div>
            <br>

            <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   
    <br>
    <center><p style=" font-weight: bolder">You order is in process.  We'll get back to you soon!</p></center>
    <center> <a href="marketplace.php" class="close" style="font-size: 50px">OK</a></center>
  </div>

</div>

        </div>
    </div>
     <?php include('includes/scripts.php');?>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
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
</script>
</body>
</html>