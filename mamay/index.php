
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
        // elseif (empty($username) or empty($password) ) {
        //     echo "<h2 class='error'>"."Empty username or password, please try again!"."</h2>";
        // }

        // elseif (empty($username) and empty($password) ) {
        //     echo "<h2 class='error'>"."Empty , please try again!"."</h2>";
        // }
        
        // else   {
        //       echo "<h2 class='error'>"."Incorrect Username or Password, Please try again! "."</h2>";
        // }
      
    }

?>

<!DOCTYPE html>
<head>
    <title>Mamay | Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="includes/custom.css">

    <style>
    
    .bg {
    background-image: url("https://blog.latchedmama.com/wp-content/uploads/2018/12/Depositphotos_83697508_xl-2015-1024x683.jpg");
    height: 100%; 
    width: 100%;
    background-position: center;
    /*background-repeat: no-repeat;*/
    background-size: cover;
    }

    </style>
</head>
<body class="bg">
        <header class="mn-header navbar-fixed">
            <nav class="navbar navbar-light p-3 mb-2 bg-transparent text-white">
                <div class="container">
                    <div class="col">
                        <span style="font-size: 2em;cursor:pointer" >
                            <img src="images/logo.png" style="width: 100px;margin-bottom: -30px">
                            <br>  <a class="navbar-brand " style="font-size:72px; color: pink ;font-weight: bolder" href="/">Mamay</a>
                        <a class="navbar-brand text-white" style="font-size:68px;margin-left: -270px ;font-weight: bolder " href="/">Mamay</a>
                      
                        </span>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container ">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h6>Login</h6>
                        </div>
                        <div class="card-body">
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <div class="form-group align-right">
                                    <label class="form-check-label" for="exampleCheck1">Forgot Password</label>
                                </div>
                                <!-- <a class="btn btn-primary" href="marketplace.php">Sign In</a> -->
                                <input type="submit"  class="btn btn-primary" name="submit" value="Sign In">
                            </form>
                            <br>
                            <div class="row">
                                <div class="container">
                                    <label for="exampleInputPassword1">Don't have an account?</label>
                                    <a  class="btn btn-info" href="register.php">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>