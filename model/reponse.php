<?php
class reponse {
    private $id_rep;
    private $id_auteur;
    private $contenu_rep;
    private $id_question;
    private $date_publication1;

    public function __construct( $contenu_rep) {
        /*$this->id_auteur = $id_auteur;*/
        $this->contenu_rep = $contenu_rep;
       /* $this->id_question = $id_question;
        $this->date_publication = $date_publication;*/
    }

    public function getId_rep() {
        return $this->id_rep;
    }

    public function setId($id_rep) {
        $this->id_rep = $id_rep;
    }

    public function getId_auteur() {
        return $this->id_auteur;
    }

    public function setId_auteur($id_auteur) {
        $this->id_auteur = $id_auteur;
    }

    public function getContenu_rep() {
        return $this->contenu_rep;
    }

    public function setContenu_rep($contenu_rep) {
        $this->contenu_rep = $contenu_rep;
    }

    public function getId_question() {
        return $this->id_question;
    }

    public function setId_question($id_question) {
        $this->id_question = $id_question;
    }

    public function getDate_publication1() {
        return $this->date_publication1;
    }

    public function setDate_publication1($date_publication1) {
        $this->date_publication1 = $date_publication1;
    }
}
