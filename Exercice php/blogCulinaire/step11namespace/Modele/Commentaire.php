<?php

namespace App\Modele;

use App\Modele\Modele;


// require_once ('Modele/Modele.php');


class Commentaire  extends Modele{


    public function getComments($idrecette)
    {

       
        $sql= ("SELECT * FROM t_comment WHERE id_rec = ?");
        $stmt = $this->executerRequete($sql, array($idrecette));
        if($stmt->rowCount() >= 1 ){
            return $stmt->fetchAll();
        
        }  /*else{
            throw new Exception("Aucun commentaire ne correpsond à l'identification");
        }*/
        
        }
    


    function getThreeLastReviews()
    {        
        $sql= ('SELECT * FROM t_comment AS C INNER JOIN t_recipe AS R ON C.id_rec = R.rec_id ORDER BY com_id ASC LIMIT 3');
        $tuple = $this->executerRequete($sql);
        return $tuple -> fetchAll();
       
    }


    function AjouterCommentaire($auteur, $contenu, $idrecette)
    {
        $sql= 'INSERT INTO t_comment (com_auteur , com_contenu ,id_rec) VALUES (?, ? , ?)';
        $this->executerRequete($sql, array( $auteur, $contenu, $idrecette));   
    }

    


}
