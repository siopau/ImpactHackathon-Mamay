<?php

session_start();
 include 'includes/connection.php';
$result1 = mysqli_query($dbh,"SELECT * from user where username = '".$_SESSION['username']."'");
                              while($row1 = mysqli_fetch_array($result1))
                                  {

                             $name = $row1['full_name'];
                            
                                 }
                              mysqli_close($dbh);

    // session_start();

$title = isset($_POST['title']) ? $_POST['title'] : NULL;
$time 	= isset($_POST['time']) ? $_POST['time'] : NULL;
$date = isset($_POST['date']) ? $_POST['date'] : NULL;
$description 	= isset($_POST['description']) ? $_POST['description'] : NULL;
$location = isset($_POST['location']) ? $_POST['location'] : NULL;


if (isset($_POST['submit'])) {
        
        include "includes/connection.php";

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
       
       $query = "INSERT INTO event (title,time,  date,location, description,event_creator,image) VALUES ('".$title."', '".$time."', '".$date."' , '".$location."',  '".$description."' ,  '".$name."',  '".$image."' )";
        $result = mysqli_query($dbh, $query);
     
        
       header ('Location: event-list.php');
    }