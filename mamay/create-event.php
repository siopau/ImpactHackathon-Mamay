<?php

?>

<!DOCTYPE html>
<head>
    <title>Create Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="includes/custom.css">
</head>
<body>
<?php include('includes/header.php');?>
<?php include('includes/sidebar.php');?>
    <div class="container">
        <div class="card">
        <div class="card-header">
            Create Event
        </div>
        <div class="card-body">
          <form action="createeventfunctions.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="eventTitle">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="">
                </div>
                <div class="form-group">
                    <label for="eventTime">Time:</label>
                    <input type="time" name="time" class="form-control" id="eventTime" placeholder="">
                </div>
                <div class="form-group">
                    <label for="eventDate">Date:</label>
                    <input type="date" name="date" class="form-control" id="eventDate" placeholder="">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="string" name="location" class="form-control" id="location" placeholder="">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="uploadImage">Upload Image</label>
                   <input  name="image" type="file" id="image">
                </div>
                <div class="form-group">
                <input class="btn btn-primary" name="submit" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <?php include('includes/scripts.php');?>
</body>
</html>