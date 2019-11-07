<?php
?>

<!DOCTYPE html>
<head>
    <title>Mamay | Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<?php include('includes/header.php');?>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-4 text-center" >
                    <span style="font-size: 3em; color: Tomato; ">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <h4>Address</h4>
                </div>
                <div class="col-4 text-center">
                    <span style="font-size: 3em; color: Grey;">
                        <i class="fas fa-credit-card"></i>
                    </span>
                    <h4>Payment</h4>
                </div>
                <div class="col-4 text-center">
                    <span style="font-size: 3em; color: Grey;">
                        <i class="fas fa-check-circle"></i>
                    </span>
                    <h4>Confirmation</h4>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="container">
                    <form action="">
                        <div class="form-group">
                            <label for="origin">Origin:</label>
                            <input type="text" class="form-control" id="origin" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="destination">Destination:</label>
                            <input type="text" class="form-control" id="destination" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="distance">Approximate disatance from the place of origin:</label>
                            <label for="output-distance"></label>
                        </div>
                        <div class="form-group">
                            <label for="deliveryFee">Delivery Fee:</label>
                            <label for="deliveryFee">&#8369; 50.00</label>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                     <div class="container">
                        <button type="button" class="btn btn-danger btn-lg btn-block">Next: Payment</button>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>