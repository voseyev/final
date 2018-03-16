<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tile Styles</title>

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
    <h1 class="mt-4 mb-3">Style</h1>


    <div class="breadcrumb">
        <label for="size">Size:</label><br>
        <select name = "size" id="size" >
            <option id="1x1" value="1x1">1x1</option>
            <option id="1x2" value="1x2">1x2</option>
            <option id="2x2" value="2x2">2x2</option>
            <option id="4x4" value="4x4">4x4</option>
            <option id="3x6" value="3x6">3x6</option>
            <option id="12x12" value="12x12">12x12</option>
            <option id="4x24" value="4x24">4x24</option>
            <option id="12x24" value="12x24">12x24</option>
            <option id="24x24" value="24x24">24x24</option>

        </select>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Project One</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Project Two</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Project Three</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Project Four</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcrumb">
        <label for="material">Material:</label><br>
        <select name = "material" id="material" >
            <option id="marble" value="marble">Marble</option>
            <option id="woodLook" value="woodLook">Wood Look</option>
            <option id="porcelain" value="porcelain">Porcelain</option>
            <option id="travertine" value="travertine">Travertine</option>
            <option id="ceramic" value="ceramic">Ceramic</option>
            <option id="pebbles" value="pebbles">Pebbles/Stones</option>
            <option id="slate" value="slate">Slate</option>
            <option id="quartzite" value="quartzite">Quartzite</option>
            <option id="encausticCement" value="encausticCement">Encaustic Cement</option>

        </select>
    </div>

    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Next>">




<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
