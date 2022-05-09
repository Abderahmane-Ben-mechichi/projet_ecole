<?php

class Eleve{
    private $nom;
    private $prenom;
    private $ville;
    private $cp;
    private $mail;
    private $mot_de_passe;
    private $ref_classe;

    /**
     * @param $nom
     * @param $prenom
     * @param $ville
     * @param $cp
     * @param $mail
     * @param $mot_de_passe
     * @param $ref_classe
     */
    public function __construct($nom, $prenom, $ville, $cp, $mail, $mot_de_passe, $ref_classe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->mail = $mail;
        $this->mot_de_passe = $mot_de_passe;
        $this->ref_classe = $ref_classe;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe)
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getRefClasse()
    {
        return $this->ref_classe;
    }

    /**
     * @param mixed $ref_classe
     */
    public function setRefClasse($ref_classe)
    {
        $this->ref_classe = $ref_classe;
    }


}