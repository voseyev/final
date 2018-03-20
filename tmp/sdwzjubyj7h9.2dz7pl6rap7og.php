<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/summary.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Final Summary</title>
</head>
<body>

<?php echo $this->render('pages/navbar.html',NULL,get_defined_vars(),0); ?>
<form method="post" action="end">
    <div class="container-fluid" style="padding-left: 35px">


        <div class="row">


            <div class="col-lg-6 ">
                <br>
                <table class="table table-bordered">
                    <tr>
                        <td>Your Name: <?= ($firstName) ?> <?= ($lastName) ?></td>
                    </tr>
                    <tr>
                        <td>Email: <?= ($email) ?></td>
                    </tr>
                    <tr>
                        <td>Size: <?= ($size) ?></td>
                    </tr>
                    <tr>
                        <td>Material: <?= ($material) ?></td>
                    </tr>
                    <tr>
                        <td>Square Feet: <?= ($sqrFt) ?></td>
                    </tr>
                    <tr>
                        <td>Location:
                            <?php foreach (($location?:[]) as $locations): ?>
                                <?= ($locations) ?>,
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Estimate Price: $<?= (($sqrFt * 5) * $arraySize) ?>.00</td>
                    </tr>
                </table>
            </div>
            <hr>
        </div>

        <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Confirm">

        <input class="btn btn-primary" type="submit" name="Revise" id="Revise" value="Revise Estimate">
    </div>
</form>

</body>
</html>