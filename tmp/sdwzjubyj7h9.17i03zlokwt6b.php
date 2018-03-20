<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/summary.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Contact Page</title>
</head>
<body>
<?php echo $this->render('pages/navbar.html',NULL,get_defined_vars(),0); ?>
<br>
<h3>We Want To Get To Know More About You!</h3>
<form method="post" action="finalSummary">
<div class="row">
    <div class="col-md-8">
        <label for="firstName" class="font-weight-bold">First Name
            <?php if (isset($invalidFirst)): ?>
                <span class="error">Please enter a valid first name</span>
            <?php endif; ?>
        </label>
        <input id="firstName" name="firstName" type="text" placeholder="First Name" class="form-control input-md"
        <?php if (isset($firstName)): ?>
            value="<?= ($firstName) ?>"
        <?php endif; ?>>
        <br>
    </div>

    <div class="col-md-8">
        <label for="lastName" class="font-weight-bold">Last Name
            <?php if (isset($invalidLast)): ?>
                <span class="error">Please enter a valid first name</span>
            <?php endif; ?>
        </label>
        <input id="lastName" name="lastName" type="text" placeholder="Last Name" class="form-control input-md"
        <?php if (isset($lastName)): ?>
            value="<?= ($lastName) ?>"
        <?php endif; ?>>
        <br>
    </div>

    <div class="col-md-8">
        <label for="email" class="font-weight-bold">Email
            <?php if (isset($invalidEmail)): ?>
                <span class="error">Please enter a valid first name</span>
            <?php endif; ?>
        </label>
        <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md"
        <?php if (isset($email)): ?>
            value="<?= ($email) ?>"
        <?php endif; ?>>
        <br>
    </div>
</div>

<input class="btn btn-primary" type="submit" name="confirm" id="confirm" value="Confirm">
</form>
</body>
</html>