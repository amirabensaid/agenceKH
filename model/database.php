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




}
