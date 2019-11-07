<?php
 include 'includes/connection.php';
    session_start();
// 
 $result1 = mysqli_query($dbh,"SELECT * from user where username = '".$_SESSION['username']."'");
                              while($row1 = mysqli_fetch_array($result1))
                                  {

                             $name = $row1['full_name'];
                            
                                 }
                              mysqli_close($dbh);


$volume = isset($_POST['volume']) ? $_POST['volume'] : NULL;
$time 	= isset($_POST['time']) ? $_POST['time'] : NULL;
$date = isset($_POST['date']) ? $_POST['date'] : NULL;
$storage 	= isset($_POST['storage']) ? $_POST['storage'] : NULL;
$location = isset($_POST['location']) ? $_POST['location'] : NULL;



if (isset($_POST['submit'])) {
        
        include "includes/connection.php";


         					   $countertop= 20;
                               $insulated= 20;
                               $refrigerator= 25;
                               $domref1 = 30;
                               $domref2 = 25;
                               $unpasteurized = 35;
                               $pasteurized = 35;

                  if ($_POST['storage'] == 'countertop') {
                          $total= $volume * $countertop  ;
                } 
                 if ($_POST['storage'] == 'coolerbag') {
                          $total= $volume * $insulated  ;
                } 
                  if ($_POST['storage'] == 'refrigerator') {
                          $total= $volume * $refrigerator;
                    }
                       if ($_POST['storage'] == '1Door') {
                          $total= $volume * $domref1 ;
                } 
                 if ($_POST['storage'] == '2Door') {
                          $total= $volume * $domref2  ;
                } 
                 if ($_POST['storage'] == 'unpasteurized') {
                          $total= $volume * $unpasteurized  ;
                } 
                 if ($_POST['storage'] == 'pasteurized') {
                          $total= $volume * $pasteurized  ;
                } 



        $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
       

       $query = "INSERT INTO milk (milk_volume,time,  date,storage, location,picture, total_amount,owner) VALUES ('".$volume."', '".$time."', '".$date."' , '".$storage."',  '".$location."',  '".$image."',  '".$total."',  '".$name."' )";
        $result = mysqli_query($dbh, $query);
     
        
       header ('Location: breastmilk-information.php');
    }

?>