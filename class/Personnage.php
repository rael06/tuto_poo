<?php

namespace Tutoriel;

class Personnage {
    
    private $vie = 80;
    private $atk = 20;
    private $nom = "";
    public static $myStatic = 0;
    public $id = 0;
    private static $idArray = [];

    public function __construct($name) {
        $this->nom = $name;
        $this->id = self::$myStatic++;
        self::$idArray[] = [$this->id, $this->nom];
    }

    public static function getIdArray() {
        return self::$idArray;
    }

    public function regenerer($regenere = null) {
        $this->vie += $regenere;
    }

    public function suicide() {
        $this->vie = 0;
    }

    public function est_mort() {
        return $this->vie === 0;
    }

    public function attaque($cible, $force = null) {
        $cible->vie -= $force;
    }

    private function empecher_negatif() {
        if ($this->vie < 0) {
            return $this->vie = 0;
        }
    }

    /**
     * Get the value of atk
     */ 
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * Set the value of atk
     *
     * @return  self
     */ 
    public function setAtk($atk)
    {
        $this->atk = $atk;

        return $this;
    }

    /**
     * Get the value of vie
     */ 
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set the value of vie
     *
     * @return  self
     */ 
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}
?>