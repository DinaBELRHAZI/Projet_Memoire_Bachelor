<?php

class Etudiant{

    private $nom ;
    private $prenom;
    private $email;
    private $mdp;
    private $classe;
    private $niveau;

    public static $nb_etudiant = 0;

    public function __construct($nom,$prenom,$email,$mdp , $classe, $niveau)
    {
        
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->email =$email;
        $this->mdp =$mdp;
        $this->classe =$classe;
        $this->niveau =$niveau;

        self::$nb_etudiant++;
        echo(" <br>nb d'étudiants instanciés = ".self::$nb_etudiant);
    }

    public static function nb()
   {
       return self::$nb_etudiant;
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

    
    public function getClasse()
    {
        return $this->classe;
    }
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    public function inscription_valid(){
        // return self::$nom."êtes bien inscrit";
    } 
}