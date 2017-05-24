<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TP 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">exercice 2</a></li>
        </ul>
        <?php
        if (isset($_POST['OK']))/* Si on clique sur le bouton Submit on commence à agir */ {
            $lastName = strip_tags(preg_match('#^\D+[-]?\D+#i', $_POST['lastName']));
            $firstName = strip_tags(preg_match('#^\D+[-]?\D+#i', $_POST['firstName']));
            $birthday = strip_tags(preg_match('#^((0[1-9])|([12][0-9])|(3[01]))[ \/\.\-]((0[1-9])|(1[012]))[ \/\.\-](((19)\d{2})|((200[0-1])))#', $_POST['birthday']));
            if ($lastName) {
                echo $_POST['lastName'];
                if ($firstName) {
                    echo $_POST['firstName'];
                    if ($birthday) {
                        echo $_POST['birthday'];
                    } else {
                        ?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-offset-4 col-lg-6">
                                    <form name="index" action="index.php" method="POST">
                                        <p><label for="lastName">Nom</label><input name="lastName" type="text" placeholder="Antoine"></p>
                                        <p><label for="firstName">Prenom</label><input name="firstName" type="text" placeholder="Griezman"></p>
                                        <p><label for="birthday">Date de naissane</label><input name="birthday" type="text" placeholder="23/08/1997">Vous devez respecter syntaxe suivante : 23/08/1997</p>
                                        <p><label for="nativeCountry">Pays de naissance</label><input name="nativeCountry" type="text" placeholder="France"></p>
                                        <p><label for="nationality">Nationalité</label><input name="nationality" type="text" placeholder="Francaise"></p>
                                        <p><label for="email">Email</label><input name="email" type="text" placeholder="leCavot@gmail.com"></p>
                                        <p><label for="phoneNumber">Téléphone</label><input name="phoneNumber" type="text" placeholder="0695751535"></p>
                                        <p><label for="diploma">Diplôme</label>
                                            <select name="diploma">
                                                <option selected>sans</option>
                                                <option>Bac</option>
                                                <option>Bac+2</option>
                                                <option>Bac+3</option>
                                                <option>Bac+4</option>
                                                <option>supérieur</option>
                                            </select></p>
                                        <p><label for="poleEmploi">Numeros pôle emploi</label><input name="poleEmploi" type="text" placeholder="3949"></p>
                                        <p><label for="badgeNumber">Nombre de badge</label><input name="badgeNumber" type="text" placeholder="62"></p>
                                        <p><label for="codecademy">Liens codecademy</label><input name="codecademy" type="text" placeholder="https://www.codecademy.com/fr/textSlayer64838"></p>
                                        <p><label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><input name="superHero" type="text" placeholder="Iron man"></p>
                                        <p><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><textarea name="hack" type="text" rows="10" cols="50"></textarea></p>
                                        <p><label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><input checked name="experience" type="radio" value="oui">oui<input name="experience" type="radio" value="non">non</p>
                                        <p><input type="submit" name="OK" value="OK"> </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-4 col-lg-6">
                                <form name="index" action="index.php" method="POST">
                                    <p><label for="lastName">Nom</label><input name="lastName" type="text" placeholder="Antoine"></p>
                                    <p><label for="firstName">Prenom</label><input name="firstName" type="text" placeholder="Griezman">il ne dois avoir que des lettres</p>
                                    <p><label for="birthday">Date de naissane</label><input name="birthday" type="text" placeholder="23/08/1997"></p>
                                    <p><label for="nativeCountry">Pays de naissance</label><input name="nativeCountry" type="text" placeholder="France"></p>
                                    <p><label for="nationality">Nationalité</label><input name="nationality" type="text" placeholder="Francaise"></p>
                                    <p><label for="email">Email</label><input name="email" type="text" placeholder="leCavot@gmail.com"></p>
                                    <p><label for="phoneNumber">Téléphone</label><input name="phoneNumber" type="text" placeholder="0695751535"></p>
                                    <p><label for="diploma">Diplôme</label>
                                        <select name="diploma">
                                            <option selected>sans</option>
                                            <option>Bac</option>
                                            <option>Bac+2</option>
                                            <option>Bac+3</option>
                                            <option>Bac+4</option>
                                            <option>supérieur</option>
                                        </select></p>
                                    <p><label for="poleEmploi">Numeros pôle emploi</label><input name="poleEmploi" type="text" placeholder="3949"></p>
                                    <p><label for="badgeNumber">Nombre de badge</label><input name="badgeNumber" type="text" placeholder="62"></p>
                                    <p><label for="codecademy">Liens codecademy</label><input name="codecademy" type="text" placeholder="https://www.codecademy.com/fr/textSlayer64838"></p>
                                    <p><label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><input name="superHero" type="text" placeholder="Iron man"></p>
                                    <p><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><textarea name="hack" type="text" rows="10" cols="50"></textarea></p>
                                    <p><label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><input checked name="experience" type="radio" value="oui">oui<input name="experience" type="radio" value="non">non</p>
                                    <p><input type="submit" name="OK" value="OK"> </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-4 col-lg-6">
                            <form name="index" action="index.php" method="POST">
                                <p><label for="lastName">Nom</label><input name="lastName" type="text" placeholder="Antoine"> il ne dois avoir que des lettres</p>
                                <p><label for="firstName">Prenom</label><input name="firstName" type="text" placeholder="Griezman"></p>
                                <p><label for="birthday">Date de naissane</label><input name="birthday" type="text" placeholder="23/08/1997"></p>
                                <p><label for="nativeCountry">Pays de naissance</label><input name="nativeCountry" type="text" placeholder="France"></p>
                                <p><label for="nationality">Nationalité</label><input name="nationality" type="text" placeholder="Francaise"></p>
                                <p><label for="email">Email</label><input name="email" type="text" placeholder="leCavot@gmail.com"></p>
                                <p><label for="phoneNumber">Téléphone</label><input name="phoneNumber" type="text" placeholder="0695751535"></p>
                                <p><label for="diploma">Diplôme</label>
                                    <select name="diploma">
                                        <option selected>sans</option>
                                        <option>Bac</option>
                                        <option>Bac+2</option>
                                        <option>Bac+3</option>
                                        <option>Bac+4</option>
                                        <option>supérieur</option>
                                    </select></p>
                                <p><label for="poleEmploi">Numeros pôle emploi</label><input name="poleEmploi" type="text" placeholder="3949"></p>
                                <p><label for="badgeNumber">Nombre de badge</label><input name="badgeNumber" type="text" placeholder="62"></p>
                                <p><label for="codecademy">Liens codecademy</label><input name="codecademy" type="text" placeholder="https://www.codecademy.com/fr/textSlayer64838"></p>
                                <p><label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><input name="superHero" type="text" placeholder="Iron man"></p>
                                <p><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><textarea name="hack" type="text" rows="10" cols="50"></textarea></p>
                                <p><label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><input checked name="experience" type="radio" value="oui">oui<input name="experience" type="radio" value="non">non</p>
                                <p><input type="submit" name="OK" value="OK"> </p>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-4 col-lg-6">
                        <form name="index" action="index.php" method="POST">
                            <p><label for="lastName">Nom</label><input name="lastName" type="text" placeholder="Antoine"></p>
                            <p><label for="firstName">Prenom</label><input name="firstName" type="text" placeholder="Griezman"></p>
                            <p><label for="birthday">Date de naissane</label><input name="birthday" type="text" placeholder="23/08/1997"></p>
                            <p><label for="nativeCountry">Pays de naissance</label><input name="nativeCountry" type="text" placeholder="France"></p>
                            <p><label for="nationality">Nationalité</label><input name="nationality" type="text" placeholder="Francaise"></p>
                            <p><label for="email">Email</label><input name="email" type="text" placeholder="leCavot@gmail.com"></p>
                            <p><label for="phoneNumber">Téléphone</label><input name="phoneNumber" type="text" placeholder="0695751535"></p>
                            <p><label for="diploma">Diplôme</label>
                                <select name="diploma">
                                    <option selected>sans</option>
                                    <option>Bac</option>
                                    <option>Bac+2</option>
                                    <option>Bac+3</option>
                                    <option>Bac+4</option>
                                    <option>supérieur</option>
                                </select></p>
                            <p><label for="poleEmploi">Numeros pôle emploi</label><input name="poleEmploi" type="text" placeholder="3949"></p>
                            <p><label for="badgeNumber">Nombre de badge</label><input name="badgeNumber" type="text" placeholder="62"></p>
                            <p><label for="codecademy">Liens codecademy</label><input name="codecademy" type="text" placeholder="https://www.codecademy.com/fr/textSlayer64838"></p>
                            <p><label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><input name="superHero" type="text" placeholder="Iron man"></p>
                            <p><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label><textarea name="hack" type="text" rows="10" cols="50"></textarea></p>
                            <p><label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><input checked name="experience" type="radio" value="oui">oui<input name="experience" type="radio" value="non">non</p>
                            <p><input type="submit" name="OK" value="OK"> </p>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </body>
</html>