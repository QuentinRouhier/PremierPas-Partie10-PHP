<?php
$lastName = '';
$firstName = '';
$age = '';
$phoneNumber = '';
$regexLastName = '#^\D+[-]?\D+#i';
$regexFirstName = '#^\D+[-]?\D+#i';
$regexAge = '#^[^0][0-9]{1}$#';
$regexPhoneNumber = '#^0[1-9]([ \.\-\/]?\d{2}){4}$#';
if (!empty($_POST['phoneNumber'])) {
    $phoneNumber = strip_tags($_POST['phoneNumber']);
}
if (!empty($_POST['age'])) {
    $age = strip_tags($_POST['age']);
}
if (!empty($_POST['firstName'])) {
    $firstName = strip_tags($_POST['firstName']);
}
if (!empty($_POST['lastName'])) {
    $lastName = strip_tags($_POST['lastName']);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice1/index.php">Exercice 1</a></li>
            <li><a href="../exercice3/index.php">Exercice 3</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <form method="POST" action="index.php" name="index">
            <div class="container">
                <div class="row">
                    <div class="form-group row">
                        <label class="mr-sm-2" for="civility">Civilité</label>
                        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="civility">
                            <option selected>Mr</option>
                            <option >Mme</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="lastName" class="col-2 col-form-label">Nom</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="<?= $lastName ?>" name="lastName" placeholder="Rouhier">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstName" class="col-2 col-form-label">Prénom</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="<?= $firstName ?>" name="firstName" placeholder="Quentin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-2 col-form-label">Âge</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="<?= $age ?>" name="age" placeholder="19">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-2 col-form-label">Numéros de téléhpone</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="<?= $phoneNumber ?>" name="phoneNumber" placeholder="0695751535">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Ok</button>
                </div>
            </div>
        </form>
        <?php
        if ($phoneNumber && $age && $firstName && $lastName) {
            $resultRegexPhoneNumber = preg_match($regexPhoneNumber, $_POST['phoneNumber']);
            $resultRegexFirstName = preg_match($regexFirstName, $_POST['firstName']);
            $resultRegexLastName = preg_match($regexLastName, $_POST['lastName']);
            $resultRegexAge = preg_match($regexAge, $_POST['age']);
            if ($resultRegexPhoneNumber && $resultRegexFirstName && $resultRegexLastName && $resultRegexAge) {
                ?>
                <p><?= $_POST['civility'] ?></p>
                <p><?= $_POST['lastName'] ?></p>
                <p><?= $_POST['firstName'] ?></p>
                <p><?= $_POST['age'] ?></p>
                <p><?= $_POST['phoneNumber'] ?></p>
                <?php
            }
        }
        ?>
    </body>
</html>
