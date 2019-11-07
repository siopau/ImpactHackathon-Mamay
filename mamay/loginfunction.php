
<?php
include 'includes/connection.php';
    session_start();
 

    // setting values     
    $username   = isset($_POST['username'])   ? $_POST['username'] : NULL;
    $password   = isset($_POST['password'])   ? $_POST['password'] : NULL;
    

    //saving login details
    if (isset($_POST['submit'])) {

        // logging in
include 'includes/connection.php';
      
        $get_id = mysqli_query($dbh, "SELECT id FROM user WHERE username='$username'and password='$password'");
        $get_id_arr = mysqli_fetch_array($get_id);



        $query = "SELECT * FROM user where username='$username'and password='$password' LIMIT 1";
        $result = mysqli_query($dbh, $query);

        // saving user's login details
        include 'includes/connection.php';
       

        if (mysqli_num_rows($result) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($result);
          
                  session_start();
                $_SESSION['username'] = $username;
                 header('location: marketplace.php');   
            
        }

        // ----------------------
        elseif (empty($username) or empty($password) ) {
            echo "<h2 class='error'>"."Empty username or password, please try again!"."</h2>";
        }

        elseif (empty($username) and empty($password) ) {
            echo "<h2 class='error'>"."Empty , please try again!"."</h2>";
        }
        
        else   {
              echo "<h2 class='error'>"."Incorrect Username or Password, Please try again! "."</h2>";
        }
      
    }

?>