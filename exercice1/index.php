<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 1</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap-switch-master/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">exercice 2</a></li>
        </ul>
        <?php
        /* Meilleur regex :
          $dateSyntax = '/^((0[0-9])|([12][0-9])|(3[01]))[\/\.\-]((0[1-9])|(1[0-2]))[\/\.\-](((19)\d{2})|((200)[01]))/'; // autre solution '^[0-2][0-9]+[\/]+[0-1][0-9]+[\/]+[1-2][0-9]+';
          $mailSyntaxe = '/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/';
          $adressSyntax = '/^[0-9]+ [a-zA-Z\D]+/';
          $phoneSyntax = '/^0[1-9]([ \.\-\/,]?\d{2}){4}/';
          $postalCodeSyntax = '/^[0-9]{5}/';
          $poleEmploiSyntax = '/^[0-9]{7}[A-Z]{1}$/';
          $linkSyntax = '/^[(https:\/\/www.codecademy.com\/fr\/)].+$/'; */
        if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['birthday']) && !empty($_POST['nativeCountry']) && !empty($_POST['nationality']) && !empty($_POST['email']) && !empty($_POST['phoneNumber']) && !empty($_POST['poleEmploi']) && !empty($_POST['badgeNumber']) && !empty($_POST['codecademy']) && !empty($_POST['superHero']) && !empty($_POST['hack'])) {
            $lastName = strip_tags(preg_match('#^\D+[-]?\D+#i', $_POST['lastName']));
            $firstName = strip_tags(preg_match('#^\D+[-]?\D+#i', $_POST['firstName']));
            $birthday = strip_tags(preg_match('#^((0[1-9])|([12][0-9])|(3[01]))[ \/\.\-]((0[1-9])|(1[012]))[ \/\.\-](((19)\d{2})|((200[0-1])))#', $_POST['birthday']));
            $nativeCountry = strip_tags(preg_match('#[^0-9]#', $_POST['nativeCountry']));
            $nationality = strip_tags(preg_match('#[^0-9]#', $_POST['nationality']));
            $email = strip_tags(preg_match('#^[\w\-\.]+[a-z0-9]@[\w\-\.]+[a-z0-9]\.[a-z]{2,}#i', $_POST['email']));
            $phoneNumber = strip_tags(preg_match('#^0[1-9]([ \.\-\/]?\d{2}){4}$#', $_POST['phoneNumber']));
            $poleEmploi = strip_tags(preg_match('#^[0-9][0-9]{6}[A-Z]$#', $_POST['poleEmploi']));
            $badgeNumber = strip_tags(preg_match('#^[^A-Za-z-*+.$*µ%=)\]àç_è(\'"é&}°<>,;:!§.?@^[{~\\#][0-9]{0,2}$#', $_POST['badgeNumber']));
            $codecademy = strip_tags($_POST['codecademy']);
            $superHero = strip_tags(preg_match('#^[\w ]{20,150}$#', $_POST['superHero']));
            $hack = strip_tags(preg_match('#^[\w ]{20,150}$#', $_POST['hack']));
            if ($lastName && $firstName && $birthday && $nativeCountry && $nationality && $email && $phoneNumber && $poleEmploi && $badgeNumber && $codecademy && $superHero && $hack) {
                ?>
                <p><?= $_POST['lastName'] ?> </p>
                <p><?= $_POST['firstName'] ?> </p>
                <p><?= $_POST['birthday'] ?> </p>
                <p><?= $_POST['nativeCountry'] ?> </p>
                <p><?= $_POST['nationality'] ?> </p>
                <p><?= $_POST['email'] ?> </p>
                <p><?= $_POST['phoneNumber'] ?> </p>
                <p><?= $_POST['diploma'] ?> </p>
                <p><?= $_POST['poleEmploi'] ?> </p>
                <p><?= $_POST['badgeNumber'] ?> </p>
                <p><?= $_POST['codecademy'] ?> </p>
                <p><?= $_POST['superHero'] ?> </p>
                <p><?= $_POST['hack'] ?> </p>
                <p><?= $_POST['experience'] == 'on' ? 'Oui' : 'Non' ?> </p>
                <?php } else {
                ?>
                <form name="index" action="index.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="form-group row">
                                <label for="lastName" class="col-2 col-form-label">Nom</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="lastName" placeholder="Antoine">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstName" class="col-2 col-form-label">Prenom</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="firstName" placeholder="Griezman">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birthday" class="col-2 col-form-label">Date d'annivérsaire</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="birthday" placeholder="23/08/1997">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nativeCountry" class="col-2 col-form-label">Pays de naissance</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="nativeCountry" placeholder="France">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nationality" class="col-2 col-form-label">Nationalité</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="nationality" placeholder="Francaise">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-2 col-form-label">Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" name="email" placeholder="lacave@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-2 col-form-label">Numéro de téléphone</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="phoneNumber" placeholder="0695751535">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="mr-sm-2" for="diploma">Preference</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="diploma">
                                    <option selected>Sans diplôme</option>
                                    <option value="1">Bac+2</option>
                                    <option value="2">Bac+3</option>
                                    <option value="3">Bac+4</option>
                                    <option value="3">supérieur</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="poleEmploi" class="col-2 col-form-label">Numeros pôle emploi</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="poleEmploi" placeholder="2596875A">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="badgeNumber" class="col-2 col-form-label">Nombre de badge</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="badgeNumber" placeholder="61">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="codecademy" class="col-2 col-form-label">Liens codecademy</label>
                                <div class="col-10">
                                    <input class="form-control" type="url" name="codecademy" placeholder="https://www.codecademy.com/fr/textSlayer64838">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="superHero" class="col-2 col-form-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                <div class="col-10">
                                    <textarea class="form-control" type="text" name="superHero" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                <textarea class="form-control" type="text" name="hack" rows="3"></textarea>
                            </div>
                            <div class="form-group row">
                                <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                <div class="col-10">
                                    <input type="checkbox"  name="experience" checked>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Ok</button>
                        </div>
                    </div>
                </form>
                <?php
            }
        } else {
            ?>
            <form name="index" action="index.php" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="form-group row">
                            <label for="lastName" class="col-2 col-form-label">Nom</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="lastName" placeholder="Antoine">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstName" class="col-2 col-form-label">Prenom</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="firstName" placeholder="Griezman">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birthday" class="col-2 col-form-label">Date d'annivérsaire</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="birthday" placeholder="23/08/1997">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nativeCountry" class="col-2 col-form-label">Pays de naissance</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="nativeCountry" placeholder="France">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-2 col-form-label">Nationalité</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="nationality" placeholder="Francaise">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-2 col-form-label">Email</label>
                            <div class="col-10">
                                <input class="form-control" type="email" name="email" placeholder="lacave@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phoneNumber" class="col-2 col-form-label">Numéro de téléphone</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="phoneNumber" placeholder="0695751535">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="mr-sm-2" for="diploma">Preference</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="diploma">
                                <option selected>Sans diplôme</option>
                                <option value="1">Bac+2</option>
                                <option value="2">Bac+3</option>
                                <option value="3">Bac+4</option>
                                <option value="3">supérieur</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="poleEmploi" class="col-2 col-form-label">Numeros pôle emploi</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="poleEmploi" placeholder="2596875A">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="badgeNumber" class="col-2 col-form-label">Nombre de badge</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="badgeNumber" placeholder="61">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="codecademy" class="col-2 col-form-label">Liens codecademy</label>
                            <div class="col-10">
                                <input class="form-control" type="url" name="codecademy" placeholder="https://www.codecademy.com/fr/textSlayer64838">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="superHero" class="col-2 col-form-label">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                            <div class="col-10">
                                <textarea class="form-control" type="text" name="superHero" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                            <textarea class="form-control" type="text" name="hack" rows="3"></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="experience">Avez vous déjà eu une expérience av<ec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                            <div class="col-10">
                                <input type="checkbox"  name="experience" checked>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Ok</button>
                    </div>
                </div>
            </form>
            <?php
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>        
        <script src="../bootstrap-switch-master/dist/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script>
            $("[name='experience']").bootstrapSwitch('onText', 'Oui');
            $("[name='experience']").bootstrapSwitch('offText', 'Non');
        </script>
    </body>
</html>
