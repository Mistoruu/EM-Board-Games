<?php

trait generateText
{
    function generateRulesMorpion()
    {
?> <p class="regles">
            Pour démarer une partie il suffit de cliquer sur une case ce qui place
            un symbole, chaque joueur possede un symbole différent et jouent l'un
            après l'autre. Chaque joueur a donc son propre symbole, une croix pour
            l’un et un rond pour l’autre. Le but du jeu est d’aligner avant son
            adversaire 3 symboles identiques horizontalement, verticalement ou en
            diagonale.
        </p>
    <?php
    }
    function generateRulesPuissance()
    {
    ?>
        <p class="regles">
            Chaque joueur joue chacun son tour pour poser des jetons de couleur.
            Pour gagner une partie de puissance 4, il suffit d'être le premier à aligner 4 jetons de sa couleur horizontalement, verticalement et diagonalement.
            Si lors d'une partie, tous les jetons sont joués sans qu'il y est d'alignement de jetons, la partie est déclaré nulle.
        </p>
    <?php
    }
    function generateRulesDames()
    {
    ?>

<?php
    }
}
interface renderRules
{
    public function generateRulesMorpion();
    public function generateRulesPuissance();
    public function generateRulesDames();
}
class GenerateRules implements renderRules
{
    use generateText;
}

?>