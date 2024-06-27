<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <main class="main-morpion">
    <div class="main text">
      <h1>Jouez au Morpion</h1>
      <h2>Règles du jeu</h2>
      <?php
      include "Core/Logic/text.php";
      $rules = new GenerateRules();
      $rules->generateRulesMorpion();
      ?>
    </div>
    <div class="main-game">
      <div id="board-morpion">
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
        <div class="cell-morpion" data-cell></div>
      </div>
      <div id="status-message">
        <p>Au tour de X</p>
      </div>
      <div id="restart-button-morpion">
        <button id="restart-button" onclick="rejouer()">Rejouer</button>
      </div>

      <script src="Core/Interactions/morpion.js"></script>
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