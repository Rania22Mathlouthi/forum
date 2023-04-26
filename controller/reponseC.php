<?php
include ('C:\xampp\htdocs\forum\controller\questionC.php') ;

class reponseC {
    public function listereponses($id_question) {
        $db = myconfig::getConnexion();
        try {
            $liste = $db->prepare('SELECT r.id_rep, r.contenu_rep, r.date_publication1, r.id_auteur, r.id_question, u.username
            FROM reponses r
            JOIN user u ON r.id_auteur = u.id_user
            WHERE id_question=:id_question');
            $liste->execute(['id_question' => $id_question]);

            return $liste;
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    public function num_rep($id_question){
        $db = myconfig::getConnexion();
        try {
            $req = $db->prepare('SELECT COUNT(*) AS num_replies FROM reponses WHERE id_question=:id_question');
            $req->execute(['id_question' => $id_question]);
            $result = $req->fetch();
            return $result['num_replies'];
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    public function getreponse($id_rep) {
        $db = myconfig::getConnexion();
        try {
            $req = $db->prepare('SELECT * FROM reponses WHERE id_rep=:id_rep');
            $req->execute(['id_rep' => $id_rep]);
            return $req->fetch();
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function addreponse($id,$reponse) {
        $db = myconfig::getConnexion();
        try {
            $req1 = $db->prepare('SELECT id_user FROM user LIMIT 1');
            $req1->execute();
            $result = $req1->fetch(PDO::FETCH_ASSOC);
            if (!$result) {
                die('Error: failed to fetch user id');
            }
            $user_id = $result['id_user'];
            $date_publication1 = date('Y-m-d H:i:s');
            $req = $db->prepare('INSERT INTO reponses (contenu_rep, id_auteur, id_question, date_publication1) VALUES (:c, :u, :q, :p)');
            $req->execute([
                'c' => $reponse->getContenu_rep(),
                'u' => $user_id,
                'q' => $id,
                'p' => $date_publication1
            ]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    public function deletereponse($id_rep,$id_question) {
        $db = myconfig::getConnexion();
        try {
            $req = $db->prepare('DELETE FROM reponses WHERE id_rep=:id_rep AND id_question=:id_question');
            $req->execute(['id_rep' => $id_rep,
            'id_question' => $id_question
        ]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function updatereponse($id_rep, $reponse) {
        $db = myconfig::getConnexion();
        try {
            $req = $db->prepare('UPDATE reponses SET contenu_rep=:c WHERE id_rep=:id_rep');
            $req->execute([
                'c' => $reponse->getContenu_rep(),
                'id_rep' => $id_rep
            ]);
        } catch(Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
