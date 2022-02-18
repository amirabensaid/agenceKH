<?php
class database
{
    private $serveur;
    private $user;
    private $password;
    private $dbname;
    private $connex;

    public function __construct()
    {
        $this->serveur = "localhost:3306";
        $this->user = "root";
        $this->password = "";
        $this->dbname = "agencekh";
        $this->connex = new PDO("mysql:host=" . $this->serveur . ";dbname=" . $this->dbname, $this->user, $this->password);
    }
    public function query($rq)
    {
        $tab = $this->connex->query($rq);
        //pdo::fetch_assoc est un variable static 
        return $tab->fetchAll(PDO::FETCH_ASSOC);
    }
    //function find($rq,$tab) function execute(rq tab)

    public function find($rq,$tab){
        //prepare la repo à l'execution
    $stm=$this->connex->prepare($rq);
    //execute la req avec tableau de parametre
    $stm->execute($tab);
    //extraire table associative
    return $stm->fetch(PDO::FETCH_ASSOC);
    }

}
