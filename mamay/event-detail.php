<?php
 $id = $_GET['id']; 
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
    width: 50%;
  }
</style>
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
    <br>
        <div class="row">
            <div class="container text-center">
                <?php
                          include 'includes/connection.php';
                            $result2 = mysqli_query($dbh,"SELECT * from event where id='$id'  ");
                              while($row2 = mysqli_fetch_array($result2))
                                  {

                               // echo "<td>" . $row2['date'] . ", " . $row2['time'] ."</td>";
                               $id    = $row2['id']   ;
                       
                              
                               $picture   = $row2['image']   ;
                                $location   = $row2['location']   ;
                                 $date   = $row2['date']   ;
                                  $time   = $row2['time']   ;
                                   $description   = $row2['description']   ;
                                    $creator   = $row2['event_creator']   ;


             echo '<img class="image" src="data:image/jpeg;base64,'.base64_encode($picture).'"/>';
                                 }
                              mysqli_close($dbh);
                      ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="container">
                <!-- <a href="event-detail2.php" class="btn btn-outline-danger btn-lg btn-block">JOIN</a> -->
                 <?php
               echo '<a  href="event-detail2.php?id='. $id .'"  class="btn btn-outline-danger btn-lg btn-block" > JOIN</a>'
                ?>
            </div> 
        </div>
        <br>
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
                         <br>
                        <div class ="row">
                            <div class="col-2">
                                <i class="fa fa-wpforms" style="font-size: 25px;color: pink"></i>
                            </div>
                            <div class="col-10">
                                <label for="user"> <?php  echo $description; ?></label>
                            </div>
                        </div>     

                    </div>
                    
                   
            </div>

          
        </div>
    </div>
     <?php include('includes/scripts.php');?>
</body>
</html>