<?php


class question {
    private $id;
    private $titre;
    private $descriptionn;
    private $contenu;
    private $id_auteur;
    private $date_publication;

    public function __construct( $titre, $descriptionn, $contenu, /*$id_auteur, $date_publication*/) {
        
        $this->titre = $titre;
        $this->descriptionn = $descriptionn;
        $this->contenu = $contenu;
        /*$this->id_auteur = $id_auteur;
        $this->date_publication = $date_publication;*/
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getDescription() {
        return $this->descriptionn;
    }

    public function setDescription($descriptionn) {
        $this->descriptionn = $descriptionn;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    public function getId_auteur() {
        return $this->id_auteur;
    }

    public function setId_auteur($id_auteur) {
        $this->id_auteur = $id_auteur;
    }

    public function getDate_publication() {
        return $this->date_publication;
    }

    public function setDate_publication($date_publication) {
        $this->date_publication = $date_publication;
    }
}