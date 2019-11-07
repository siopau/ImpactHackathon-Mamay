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
             <h6 style="font-weight: bolder">Donate Milk</h6>
            </div>
        <div class="card-body" style="font-size: 20px;">
            <form action="donatemilkfunctions.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="volumeMilk">Approximate Volume of Milk:</label>
                    <input type="number" name="volume" class="form-control" id="volumeMilk" placeholder="">
                </div>
                <div class="form-group">
                    <label for="timeExtraction">Time of Extraction:</label>
                    <input type="time" name="time" class="form-control" id="timeExtraction" placeholder="">
                </div>
                <div class="form-group">
                    <label for="dateExtraction">Date of Extraction:</label>
                    <input type="date" name="date" class="form-control" id="dateExtraction" placeholder="">
                </div>
                <div class="form-group">
                    <label for="storage">Storage</label>
                    <select class="form-control" name="storage" id="storage">
                    <option value="countertop">Countertop</option>
                    <option value="coolerbag">Insulated cooler bag</option>
                    <option value="refrigerator">Refrigerator</option>
                    <option value="1Door">Domestic refrigerator (1-door) </option>
                    <option value="2Door">Domestic refrigerator (2-door)</option>
                    <option value="unpasteurized">Unpasteurized</option>
                    <option value="pastuerized">Pasteurized</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control" id="location" placeholder="">
                </div>
                <div class="form-group">
                    <label for="uploadImage">Upload Image</label>
                    <input  name="image" type="file" id="image">
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <label for="totalPrice">&#8369;</label>
                </div>
                <div class="form-group">
                <input class="btn btn-primary" name="submit" type="submit" value="Submit">
                </div>
            </form>
        </div>
        </div>
    </div>


 
     <?php include('includes/scripts.php');?>
</body>
</html>