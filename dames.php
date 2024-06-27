<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Jouez aux Dames</h1>
        <?php
        include "Core/Logic/text.php";
        $rules = new GenerateRules();
        $rules->generateRulesDames();
        ?>
        <br>
        <br>
        <?php
        require "Core/Logic/image.php";
        $dames = new Image("Assets/dames.png", "image dame");
        for ($i = 0; $i < 100; $i++) {
            $dames->GenerateHTML();
        }
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