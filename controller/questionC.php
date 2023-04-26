<?php

include ('C:\xampp\htdocs\forum\config.php');

class questionC {
    public function listequestions() {
        $db = myconfig::getConnexion();
        try {
            $liste = $db->query('SELECT q.id, q.titre, q.descriptionn, q.contenu, q.date_publication, q.id_auteur,u.username
            FROM questions q
            JOIN user u ON q.id_auteur = u.id_user;
            ');
            return $liste;
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function getById($id) {
        $db = myconfig::getConnexion();
        try {
            $liste = $db->prepare('SELECT q.id, q.titre, q.descriptionn, q.contenu, q.date_publication, q.id_auteur,u.username
            FROM questions q
            JOIN user u ON q.id_auteur = u.id_user where q.id=:id;
            ');
            $liste->execute([
                'id' => $id
            ]);
    
            return $liste->fetch(PDO::FETCH_OBJ); // fetch the data as an object
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    
    public function getquestions($id) {
        $db = myconfig::getConnexion();
        try {
            $req = $db->prepare('SELECT * FROM questions WHERE id=:id');
            $req->execute(['id' => $id]);
            return $req->fetch();
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function addquestion($question) {
        $db = myconfig::getConnexion();
        try {
            $req1 = $db->prepare('SELECT id_user FROM user LIMIT 1');
            $req1->execute();
            $result = $req1->fetch(PDO::FETCH_ASSOC);
            if (!$result) {
                die('Error: failed to fetch user id');
            }
            $user_id = $result['id_user'];
            $date_publication = date('Y-m-d H:i:s');
            $req = $db->prepare('INSERT INTO questions (titre, descriptionn, contenu, id_auteur, date_publication) VALUES (:t, :d, :c, :u, :p)');
            $req->execute([
                't' => $question->getTitre(),
                'd' => $question->getDescription(),
                'c' => $question->getContenu(),
                'u' => $user_id,
                'p' => $date_publication,
            ]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    

    public function deletequestion($id) {
        $db = myconfig::getConnexion();
        try {
            $req = $db->prepare('DELETE FROM questions WHERE id=:id');
            $req->execute(['id' => $id]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

public function updatequestion($id, $question) {
    $db = myconfig::getConnexion();
    try {
        $req = $db->prepare('UPDATE questions SET titre=:t, descriptionn=:d, contenu=:c WHERE id=:id');
        $req->execute([
            't' => $question->getTitre(),
            'd' => $question->getDescription(),
            'c' => $question->getContenu(),
            'id' => $id
        ]);
    } catch(Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

}