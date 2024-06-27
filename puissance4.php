<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;URL=index.php">
    <title>Game With Eliott</title>
    <link rel="stylesheet" href="Core/Styles/game.css" />

</head>

<body>
    <!--Header-->
    <header>
        <?php
        require "Core/Logic/menu.php";
        $header = new GenerateContent();
        $header->renderHeader();
        ?>
    </header>

    <!--Main-->
    <main class="main-home">
        <h1>Jouez au Puissance 4</h1>
        <h2>Règles du jeu</h2>
        <?php
        include "Core/Logic/text.php";
        $rules = new GenerateRules();
        $rules->generateRulesMorpion();
        ?>
        <br>
        <br>

        <?php
        echo 'Le puissance 4 est encore en développement.';
        echo 'Vous allez être redirigé dans 5 secondes';
        ?>
    </main>

    <!--Footer-->
    <footer>
        <?php
        $footer = new GenerateContent;
        $footer->renderFooter();
        ?>
    </footer>
</body>

</html>