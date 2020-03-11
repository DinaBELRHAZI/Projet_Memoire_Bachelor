<?php

/**
 * Class Form
 * permet de générer un formulaire
 */
class Form
{

    /**
     * @var array Données utilisées par le formulaire
     */
    private $data;

    /**
     * @var string Tag utilisées pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data
     */
    public function __construct($data = array())
    {

        $this->data = $data;
    }

    /**
     * @param $html code HTML à entourer
     * @return string
     */
    private function surround($html)
    {
        return "<{$this->surround}>$html</{$this->surround}>";
    }

    /**
     * @param $index string de la valeur à réccupérer
     * @return string
     */
    //vérifie si le champs est bien rempli
    private function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string 
     * @return string
     */
    //a utiliser pour la modification des données (fichiers modif)
    // rempli l'input avec les données
    public function input($name)
    {
        return $this->surround(
            '<input type="text" name="' . $name . '"value="' . $this->getValue($name) . '">'
        );
    }

    // fonction d'input à remplir
    // public function input($name)
    // {
    //     return $this->surround('<input type="text" name="'.$name.'">','p');
    // }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit"> Envoyer</button>');
    }
}
