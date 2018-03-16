<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Estimate</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom css for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
<!-- Navigation -->
<?php echo $this->render('pages/navbar.html',NULL,get_defined_vars(),0); ?>


<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <form method="post" action="style">
    <div class="mt-4 mb-3">
        <p><?= ($errors['sqrFt']) ?></p>
        <label>How many square feet of tile do you want?</label>
        <input type="text" name="sqrFt" id="sqrFt" value="">
    </div>

    <p class="breadcrumb" >Where would you like to lay the Tile?</p>

    <div class = "row">
        <div class="col-sm-12">
            <div class="container" id="maindiv2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "kitchen">Kitchen<br>
                                <img  src="./images/kitchenTile.jpg" class = "location" alt = "kitchen">
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "bathroom">Bathroom<br>
                                <img  src="./images/bathroomTile.jpg" class = "location" alt = "bathroom">
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "familyRoom">Family Room<br>
                                <img  src="./images/familyRoom.jpg" class = "location" alt = "familyRoom">
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "patio">Patio<br>
                                <img  src="./images/patio.jpeg" class = "location" alt = "patio">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <p class="breadcrumb" >Wall/Floor?</p>
                        <div class="row">
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "backsplash">Backsplash<br>
                                <img  src="./images/backsplash.jpg" class = "location" alt = "backsplash">
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "floor">Floor<br>
                                <img  src="./images/floor.jpg" class = "location" alt = "floor">
                            </div>
                            <div class="col-sm-3">
                                <input type="checkbox" name="location[]" value = "shower">Shower<br>
                                <img  src="./images/shower.jpg" class = "location" alt = "shower">
                            </div>
                        </div>
                        <p><?= ($errors['location']) ?></p>
                    </div>
            <div><br>
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Next>">
        </div>
            </div>
    </div>
    </div>
</form>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
