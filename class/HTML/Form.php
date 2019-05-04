<?php

namespace Tutoriel\HTML;

/**
 * Class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form {
    /**
     * Undocumented variable
     *
     * @var array Données utilisées par le formulaire
     */
    protected $data;

    /**
     * Undocumented variable
     *
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = "p";
    
    /**
     * Undocumented variable
     *
     * @var string Texte à ajouter dans la balise surround
     */
    protected $htmlText = "";

    /**
     * Undocumented function
     *
     * @param array $_data Données utilisées par le formulaire
     */
    public function __construct($_data = array()) {
        $this->data = $_data;
    }

    /**
     * Undocumented function
     *
     * @param string $tag   
     * @param string $htmlText
     * @param string $htmlElement Code HTML à entourer
     * @return void
     */
    protected function surround($tag, $htmlText, $htmlElement) {
        echo "<{$tag}>{$htmlText}{$htmlElement}</{$tag}>";
    }

    /**
     * Undocumented function
     *
     * @param string $name Nom du champ
     * @return void
     */
    public function input($name) {
        $this->surround($this->surround, $this->htmlText, '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    public function submit() {
        $this->surround($this->surround, $this->htmlText, '<input type="submit" name="send" value="Envoyer">');
    }
    
    /**
     * Undocumented function
     *
     * @param string $index Index de la valeur à récupérer
     * @return void
     */
    protected function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * Get the value of data
     */ 
    public function getData() {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data) {
        $this->data = $data;
        return $this;
    }
}
?>