
<?php

interface GenerateCode
{
    public function generateHTML();
}

class Image implements GenerateCode
{
    public $source;
    public $alt;
    public $srcset;
    public $sizes;

    // Constructeur
    public function __construct($source, $alt, $srcset, $sizes)
    {
        $this->source = $source;
        $this->alt = $alt;
        $this->srcset = $srcset;
        $this->sizes = $sizes;
    }

    public function __destruct()
    {
    }

    public function generateHTML()
    {
        echo "<img src='" . $this->source . "' srcset='" . $this->srcset . "' sizes='" . $this->sizes . "' alt='" . $this->alt . "' />";
    }
}

?>