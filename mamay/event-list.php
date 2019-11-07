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
    <title>Events</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="includes/custom.css">
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
        <br>
        <div class="row text-right">
            <div class="container">
                <a class="btn btn-info" href="create-event.php" role="button">Create Event</a>
            </div>            
        </div>
        <br>
        
 <?php 
  include 'includes/connection.php';
  $result3 = mysqli_query($dbh,"SELECT * from event  ");
  $num = mysqli_num_rows($result3);
  mysqli_close($dbh);

include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from event  order by id desc  ");
                             if(mysqli_num_rows($result2) > 0){
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                               $id    = $row2['id']   ;
                              $date    = $row2['date']   ;
                               $time    = $row2['time']   ;
                               $location    = $row2['location']   ;
                               $creator    = $row2['event_creator']   ;

                            
             ?>
        <div class="card">
            <div class="card-header">
            <h6>Open Forum</h6>
            </div>
            <div class="card-body">
                <div class ="row">
                    <div class ="col-8">
                        <div class ="row">
                            <div class="col-2">
                                <i class="fas fa-calendar-week" style="font-size: 25px;color: pink"></i>
                            </div>
                            <div class="col-10">
                                <label for="user">
                                    <?php  echo "" .$date. "," .$time."";  ?></label>
                            </div>
                        </div>
                       
                        <br>
                        <div class ="row">
                            <div class="col-2">
                                <i class="fas fa-map-marker-alt" style="font-size: 25px;color: pink"></i>
                            </div>
                            <div class="col-10">
                                <label for="location"> <?php  echo $location; ?></label>
                            </div>
                        </div>   
                        <br>
                        <div class ="row">
                            <div class="col-2">
                                <i class="fas fa-user" style="font-size: 25px;color: pink"></i>
                            </div>
                            <div class="col-10">
                                <label for="user"> <?php  echo $creator; ?></label>
                            </div>
                        </div>                     
                    </div>
                    
                    <div class ="col-4">
                        <div class="container">
                            <div class="text-center">
                                <!-- <a class="btn btn-outline-primary" href="event-detail.php">See Details</a> -->
                                <?php
               echo '<a  href="event-detail.php?id='. $id .'"  class="btn btn-outline-primary" > See Details</a>'
                ?>
                            </div>                       
                        </div>
                    </div> 
            </div>
        </div></div>
        <br>

          <?php 

          }
                                                          
           }
           else{
                            echo "<p class='lead'><em>No Events Yet</em></p>";
                        }
                                                           
                              mysqli_close($dbh);
             ?>
    
    <?php include('includes/scripts.php');?>
</body>
</html>