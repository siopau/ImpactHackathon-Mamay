<?php

 include 'includes/connection.php';
 session_start();

$result1 = mysqli_query($dbh,"SELECT * from user where username = '".$_SESSION['username']."'");
                              while($row1 = mysqli_fetch_array($result1))
                                  {

                             $name = $row1['full_name'];
                            
                                 }
                              mysqli_close($dbh);

?>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <span style="font-size: 3em;color:">
                        <i class="fas fa-user-circle">&nbsp;</i>
                    </span>
                </div>
                <div class="col-9">
                    <div class="row">
                        <label for="name"><?php echo $name ;?></label>
                    </div>
                    <div class="row">
                        <label for="email"><?php echo $_SESSION['username'] ;?></label>
                    </div>
                    
                </div>
            </div>
            <hr>
          <!--   <div class ="row">
                <div class="col">
                    <span style="font-size: 20px; ">
                        <i class="fas fa-user">&nbsp;</i>
                        <label for="user">Profile</label>
                    </span>
                </div>
            </div> -->
            <div class ="row">
                <div class="col">
                     <a style="font-size: 20px;" href="breastmilk-areas.php">
                        <i style="font-size: 20px;" class="fas fa-map-marker-alt">&nbsp;</i>
                        <label for="user">Breastfeeding Areas</label>
                    </a>
                </div>
            </div>
            <br>
            <div class ="row">
                <div class="col">
                    <a style="font-size: 20px;" href="donatemilk.php">
                        <i class="fas fa-hands">&nbsp;</i>
                        <label for="user">Donate Breast Milk</label>
                    </a>
                </div>
            </div>
            <br>
            <div class ="row">
                <div class="col">
                    <a style="font-size: 20px;"href="marketplace.php">
                        <i class="fas fa-store">&nbsp;</i>
                        <label for="user">Marketplace</label>
                </a>
                </div>
            </div>
            <br>
            <div class ="row">
                <div class="col">
                    <a style="font-size: 20px;" href="event-list.php">
                        <i class="fas fa-calendar-week">&nbsp;</i>
                        <label for="user">Events</label>
                    </a>
                </div>
            </div>
        <hr>
            <div class ="row">
                <div class="col">
                    <a style="font-size: 20px;" href="index.php">
                        <i class="fas fa-sign-out-alt">&nbsp;</i>
                        <label for="user">Sign out</label>
                    </a>
                </div>
            </div>
        </div>
        
</div>