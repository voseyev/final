<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/styles.css">
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

<form method="post" action="summary">
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
               <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/1x1.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">1x1</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/1x2.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">1x2</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/2x2.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">2x2</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/4x4.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">4x4</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/3x6.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">3x6</h4>
                        </div>
                    </div>
                </div>

                <div class="w-100"></div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/12x12.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">12x12</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/4x24.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">4x24</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/12x24.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">12x24</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-500">
                        <a href="#"><img class="card-img-top" src="./images/24x24.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">24x24</h4>
                        </div>
                    </div>
                </div>

            </div><br><br>

    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="./images/marble.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Marble</a>
                    </h4>
                    <p class="card-text">Marble is popular for showers</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="./images/porcelain.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Porcelain</a>
                    </h4>
                    <p class="card-text">Porcelain is great for bathroom floors</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="./images/ceramic.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Ceramic</a>
                    </h4>
                    <p class="card-text">Ceramic is found in many kitchens</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" src="./images/quartz.jpg" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Quartzite</a>
                    </h4>
                    <p class="card-text">Quartzite is becoming popular for back-splashes</p>
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
</form>
</div>



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
