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
    <main class="main-plus">
        <div class="plus-text">
            <p> Je m'appelle Eliott Maillé. Étudiant en 1ère année de BTS SIO SLAM à H3 Hitema, passionné par l'informatique et les jeux de plateaux
                j'ai crée Game with Eliott, un site portfolio de jeux de plateau développés en JS.
                La création de ce site m'a permit de m'entrainer à la programmation en JavaScript et m'a permit
                d'apprendre les bases du php legacy.
            </p>
            <p>
                Si vous êtes un recruteur je suis actuellement à la recherche d'un contrat d'apprentissage pour faire ma 2e année de
                BTS en alternance!
            </p>
            <a class="CV" href="Assets/CV_2024-06-11_Eliott_MAILLE.pdf" target="_blank">Mon CV !</a>
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