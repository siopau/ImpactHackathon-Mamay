<?php
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
          width: 100px;
          margin-left: -50px;
          float: right;
         }
       </style>
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
            
 <?php 
  include 'includes/connection.php';
  $result3 = mysqli_query($dbh,"SELECT * from milk  ");
  $num = mysqli_num_rows($result3);
  mysqli_close($dbh);

include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from milk  order by id desc  ");
                             if(mysqli_num_rows($result2) > 0){
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                              $id    = $row2['id']   ;
                              $volume    = $row2['milk_volume']   ;
                               $amount    = $row2['total_amount']   ;
                               $location    = $row2['location']   ;
                               $owner    = $row2['owner']   ;
                                $picture   = $row2['picture']   ;

                      
             ?>
        <div class="card">
            
           
            <div class="card-body" style="font-size: 20px">
               
                            <div class="text-center">
                               <?php
                         
             echo '<img class="image" src="data:image/jpeg;base64,'.base64_encode($picture).'"/>';
                            
                      ?>
                            </div>                       
                      
                <div class ="row">
                    <div class="col-1" >
                        <i class="fas fa-user" style="color: pink"></i>
                        </div>
                    <div class="col-11">

                        <label for="user"> <?php  echo $owner; ?></label>
                    </div>
                </div>

               <!--  <div class ="row">
                     <div class="col-1">
                        <i class="fas fa-calendar" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="datetime">October 31,2019 - 1:00 pm</label>
                    </div>
                </div> -->
                <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-map-marker-alt" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="location"> <?php  echo $location; ?></label>
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
               <!--  <div class ="row">
                    <div class="col-1">
                        <i class="fas fa-box" style="color: pink"></i>
                    </div>
                    <div class="col-11">
                        <label for="storage">Domestic Refrigerator (1-Door)</label>
                    </div>
                </div>  -->
            <div class ="row">
<?php

               echo '<a  href="checkout-payment.php?id='. $id .'"  class="btn  btn-lg btn-block" style="background-color: salmon;color: white"><i class="fa fa-shopping-cart" style="font-size: 30px"></i> &nbsp;Add to Cart</a>'
                ?>
            </div>               
            </div>  </div>
            <br>

             <?php 

          }
                                                          
           }
           else{
                            echo "<p class='lead'><em>No Available Milk Yet</em></p>";
                        }
                                                           
                              mysqli_close($dbh);
             ?>
     
    </div>
    <?php include('includes/scripts.php');?>
</body>
</html>