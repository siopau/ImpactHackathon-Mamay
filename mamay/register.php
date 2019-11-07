
<?php
 include 'includes/connection.php';
    // session_start();

$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$address   = isset($_POST['address']) ? $_POST['address'] : NULL;
$username = isset($_POST['username']) ? $_POST['username'] : NULL;
$password    = isset($_POST['password']) ? $_POST['password'] : NULL;


if (isset($_POST['submit'])) {
        
        include "includes/connection.php";

      
       
       $query = "INSERT INTO user (username,password,  full_name,address) VALUES ('".$username."', '".$password."', '".$name."' , '".$address."' )";
        $result = mysqli_query($dbh, $query);
     
        
       header ('Location: index.php');
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
                <div class="col-8">
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h6>Create Account</h6>
                        </div>
                        <div class="card-body">
                            <form action="register.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your full name" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter address" required="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
                                </div>
                               
                               
                                <!-- <a class="btn btn-primary" href="marketplace.php">Sign In</a> -->
                                <input type="submit"  class="btn btn-primary" name="submit" value="Submit">
                            </form>
                            <br>
                            <div class="row">
                                <div class="container">
                                    <label for="exampleInputPassword1">Already have an account?</label>
                                     <a  class="btn btn-info" href="index.php">Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>