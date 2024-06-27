<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game With Eliott</title>
    <link rel="stylesheet" href="Core/Styles/game.css">

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
        <h1><strong> Game With Eliott</strong></h1>
        <h2>Jouez aux Board games</h2>
        <p>Bienvenue sur Game With Eliott un site de jeux de plateau à 2 joueurs développé en JavaScript, amusez vous bien !</p>
        <p>Les jeux disponibles sont:</p>
        <div class="main-images">
            <a class="image-link" href="morpion.php"><img src="Assets/morpion.png" height="200" width="200"></a>
            <a class="image-link" href="puissance4.php"><img src="Assets/p4.jpg" height="200" width="200"></a>
            <a class="image-link" href="dames.php"><img src="Assets/dames.png" height="200" width="200"></a>
        </div>

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