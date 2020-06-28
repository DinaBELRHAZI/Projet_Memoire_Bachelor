<?php

class Professeur{

    private $nom ;
    private $prenom;
    private $email;
    private $mdp;
    private $classe;
    private $niveau;

    public static $nb_professeur = 0;

    public function __construct($nom,$prenom,$email,$mdp)
    {
        
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->email =$email;
        $this->mdp =$mdp;

        self::$nb_professeur++;
        echo(" <br>nb de profs instanciés = ".self::$nb_professeur);
    }

    public static function nb_prof()
   {
       return self::$nb_professeur;
   } 

    //getter et setter
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email2)
    {
        $this->email = $email2;
    }


    public function getMdp()
    {
        return $this->mdp;
    }
    public function setMdp($mdp2)
    {
        $this->mdp = $mdp2;
    }

    
   

    public function inscription_valid(){
        // return self::$nom."êtes bien inscrit";
    } 
}