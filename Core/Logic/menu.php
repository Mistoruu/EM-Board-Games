<?php

trait Render
{
    function renderHeader()
    {
?>
        <nav class="top-nav">
            <a href="index.php">Home</a>
            <a href="morpion.php">Morpion</a>
            <a href="puissance4.php">Puissance 4</a>
            <a href="dames.php">Dames</a>
            <a href="plus.php">Plus</a>
        </nav>
    <?php
    }

    function renderFooter()
    {
    ?>
        <ul>
            <li><a href="https://www.linkedin.com/in/eliott-maille/">Mon Linkedin</a><img src="Assets/linkedin_logo_icon_181286.png"></li>
            <li><a href="https://github.com/Mistoruu">Mon Github</a><img src="Assets/25231.png"></li>
            <li><a href="mailto:maille.eliott@gmail.com">Contactez Moi !</a><img src="Assets/MailFavicon.png"></li>
        </ul>


<?php
    }
}
interface RenderMenu
{
    public function renderHeader();
    public function renderFooter();
}
class GenerateContent implements RenderMenu
{

    use Render;
}
?>