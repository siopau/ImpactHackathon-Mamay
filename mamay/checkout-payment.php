
<?php
 include 'includes/connection.php';

$totalpay = isset($_POST['totalpay']) ? $_POST['totalpay'] : NULL;

  $id = $_GET['id'];


if (isset($_POST['submit'])) {
        
        include "includes/connection.php";
$id2 = isset($_POST['id']) ? $_POST['id'] : NULL;
   
         $q = "UPDATE milk SET  final_payment= '$totalpay'
              where id='$id2' ";

        $r = mysqli_query($dbh, $q);
       header ('Location: checkout-confirmation.php?id='. $id2 .'');

    }

    

?>
<!DOCTYPE html>
<head>
    <title>Mamay | Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="includes/custom.css">
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
                    <span style="font-size: 3em; color: Tomato;">
                        <i class="fas fa-credit-card"></i>
                    </span>
                    <h4>Payment</h4>
                </div>
                <div class="col-4 text-center">
                    <span style="font-size: 3em; color: Grey;">
                        <i class="fas fa-check-circle"></i>
                    </span>
                    <h4>Confirmation</h4>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h6>Price of Milk:</h6>
                            </div>
                            <div class="col">
                                <h6 class="text-right">&#8369;   <?php
                          include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from milk where id='$id' ");
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                              echo "<td>" . $row2['total_amount'] . "</td>";
                             $deliveryfee = 50;

                             $total = $row2['total_amount'] + $deliveryfee;
                              mysqli_close($dbh);
                          }
                      ?> .00</h6>
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Delivery Fee:</h6>
                            </div>
                            <div class="col">
                                <h6 class="text-right">&#8369;  <?php  echo $deliveryfee; ?>.00</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                
                            </div>
                            <div class="col">
                                <hr size="1em">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>Total:</h6>
                            </div>
                <form action="checkout-payment.php" method="post">
                     <input type="text" style="border:none" class="text-right"    value="<?php  echo $id; ?>" name="id"  hidden>
                            <div class="col">&#8369;
                                <input type="text" style="border:none" class="text-right"    value="<?php  echo $total; ?>" name="totalpay"  readonly="readonly">.00
                                <!-- <h6 class="text-right" name="totalpay" value="&#8369;<?php  echo $total; ?>"> &#8369;<?php  echo $total; ?> .00</h6> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                     <div class="container">
                          <input class="btn btn-danger btn-lg btn-block" name="submit" type="submit" value="Submit">
                        <!-- <a  href="checkout-confirmation.php"  class="btn btn-danger btn-lg btn-block">Next: Confirmation</a> -->
                     </div>
                </div>
            </div>
                </form>
        </div>
    </div>
     <?php include('includes/scripts.php');?>
</body>
</html>