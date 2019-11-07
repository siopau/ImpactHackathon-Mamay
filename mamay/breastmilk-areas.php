<?php

?>

<!DOCTYPE html>
<head>
    <title>Donate Milk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="includes/custom.css">
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
      <div class="card-header">
             <h6 style="font-weight: bolder">Breasfeeding Areas</h6>
            </div>
        <div class="card-body" style="font-size: 20px;">
          <div class="mapouter">
            <div class="gmap_canvas">
              <img src="images/addressicon.png" style="position: fixed;width: : 5px">
               <img src="images/addressicon.png" style="position: fixed;width: : 5px;margin-left: 100px;margin-top: 150px">
              <iframe style="width: 500px;height: 600px" id="gmap_canvas" src="https://maps.google.com/maps?q=Davao%20City&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/fiverr-promo-code/">embedgooglemap.net</a></div><style>.mapouter{;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        </div>
        </div>
    </div>


 
     <?php include('includes/scripts.php');?>
</body>
</html>