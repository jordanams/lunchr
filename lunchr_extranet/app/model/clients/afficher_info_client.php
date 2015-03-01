<?php

function afficher_client($id_resto) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                            FROM lunchr_commandes as lc, 
                                lunchr_users as lu,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lr_id = lr.lr_id
                             and lr.lr_id = :id_resto");

          $select -> execute(array('id_resto'=>$id_resto));
          $select -> setFetchMode(PDO::FETCH_ASSOC);
          $resultat = $select -> fetchAll();
          return $resultat;
        }
        
        catch (Exception $e) {
          print $e->getMessage();
          return false;
        }
      }
?>