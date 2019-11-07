<?php
// session_start();
//  include 'includes/connection.php';
// $result1 = mysqli_query($dbh,"SELECT * from user where username = '".$_SESSION['username']."'");
//                               while($row1 = mysqli_fetch_array($result1))
//                                   {

//                              $id = $row1['id'];
                            
//                                  }
//                               mysqli_close($dbh);
 ?>
  
<!DOCTYPE html>
<head>
    <title>Marketplace</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <link rel="stylesheet" href="includes/custom.css">
       <style type="text/css">
         
         .image{
          width: 200px;
          margin-left: -50px;
         }
       </style>
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
        <div class="card">
            <div class="card-header">
             <h6 style="font-weight: bolder">Details</h6>
            </div>
            <div class="card-body" style="font-size: 20px">
               <div class ="col-4" style="float: right">
                        <div class="container">
                            <div class="text-center">
                               <?php
                          include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from milk order by id desc limit 1  ");
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                               // echo "<td>" . $row2['date'] . ", " . $row2['time'] ."</td>";
                               $id    = $row2['id']   ;
                               $volume    = $row2['milk_volume']   ;
                               $storage    = $row2['storage']   ;
                               $total    = $row2['total_amount']   ;
                               $picture   = $row2['picture']   ;

             echo '<img class="image" src="data:image/jpeg;base64,'.base64_encode($picture).'"/>';
                                 }
                              mysqli_close($dbh);
                      ?>
                            </div>                       
                        </div>
                    </div> 
                <div class ="row">
                    <div class="col-1" >
                        <i class="fas fa-user" style="color: pink"></i>
                        </div>
                    <div class="col-11">
                        <!-- <label for="user"> Rio Jessa Mae Florida</label> -->

                        <?php
                          include 'includes/connection.php';
                            $result = mysqli_query($dbh,"SELECT * from user where username = '".$_SESSION['username']."'");
                              while($row = mysqli_fetch_array($result))
                                  {
                                    $id1    = $row['id']   ;
                              echo "<td>" . $row['full_name'] . "</td>";
                             
                              $address    = $row['address']   ;
                                 }
                              mysqli_close($dbh);
                      ?>
                    </div>
                </div>
   
                   
                <div class ="row">
                     <div class="col-1">
                        <i class="fas fa-calendar" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <!-- <label for="datetime">October 31,2019 - 1:00 pm</label> -->
                         <?php
                          include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from milk order by id desc limit 1  ");
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                               echo "<td>" . $row2['date'] . ", " . $row2['time'] ."</td>";
                              

             
                                 }
                              mysqli_close($dbh);
                      ?>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker-alt" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <!-- <label for="location">Phase 5 El Rio, Davao City</label> -->
                          <?php  echo $address; ?>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-tag" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="tag">&#8369;   <?php  echo $total; ?>.00</label>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-prescription-bottle" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="bottle">  <?php  echo $volume; ?>ml</label>
                    </div>
                </div>
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-box" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="storage"><?php  echo $storage; ?></label>
                    </div>
                </div> 
                <br>
             
               
            <div class ="row">
                <!-- <a  href="checkout-payment.php" class="btn  btn-lg btn-block" style="background-color: salmon;color: white"><i class="fa fa-shopping-cart" style="font-size: 30px"></i> &nbsp;Add to Cart</a> -->

                 <?php
               echo '<a  href="checkout-payment.php?id='. $id .'"  class="btn  btn-lg btn-block" style="background-color: salmon;color: white" ><i class="fa fa-shopping-cart" style="font-size: 30px"></i> &nbsp;Add to Cart </a>'
                ?>

            </div>               
            </div> 

        </div>

        <br>
        <br>
        <div class="card">
            <div class="card-header">
                <h6>Reviews</h6>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>

     <?php include('includes/scripts.php');?>
</body>
</html>