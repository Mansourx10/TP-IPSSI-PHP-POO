<?php
/**
 * Created by PhpStorm.
 * User: MansourPC
 * Date: 22/12/2017
 * Time: 16:44
 */
declare(strict_types=1);

namespace Meeting\Entity;


abstract class Utilisateur
{
    private $nom;
    private $prenom;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }



}