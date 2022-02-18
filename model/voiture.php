<?php
class voiture
{
    private $marque;
    private $vitessemax;
    private $prix;
    public function __construct($marque, $vitessemax, $prix)
    {
        $this->marque = $marque;
        $this->vitessemax = $vitessemax;
        $this->prix = $prix;
    }
    public function getmarque()
    {
        return $this->marque;
    }
    public function setmarque($marque)
    {
        $this->marque = $marque;
    }
    public function getvitessemax()
    {
        return $this->vitessemax;
    }
    public function setvitessemax($vitessemax)
    {
        $this->vitessemax = $vitessemax;
    }
    public function getprix()
    {
        return $this->prix;
    }
    public function setprix($prix)
    {
        $this->prix = $prix;
    }
    public function affichage()
    {
        echo "<h1>voiture</h1>";
        echo "marque:" . $this->marque;
        echo "<br/> vitesse max:" . $this->vitessemax;
        echo "<br/>prix:" . $this->prix;
    }
}
?>