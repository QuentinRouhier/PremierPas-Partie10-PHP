  <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 3</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="../exercice2/index.php">Exercice 2</a></li>
            <li><a href="../index.php">Index</a></li>
        </ul>
        <?php
        $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
        $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
        $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
        $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

        function viewTable($array) {
            $result = $array['name'] . ' ' . $array['firstname'] . '<img src="' . $array['portrait'] . '">';
            return $result;
        }
        ?>
        <p><?= viewTable($portrait1) ?></p>
        <p><?= viewTable($portrait2) ?></p>
        <p><?= viewTable($portrait3) ?></p>
        <p><?= viewTable($portrait4) ?></p>
    </body>
</html>
