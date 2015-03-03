<?php

function afficher_client($id_resto) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT DISTINCT  lu.lu_nom, lu.lu_tel, lu.lu_mail
                                             FROM lunchr_commandes as lc
                                             LEFT JOIN lunchr_users as lu ON lu.lu_id = lc.lu_id
                                             LEFT JOIN lunchr_restaurants as lr ON lr.lr_id = lc.lr_id
                                             WHERE lc.lr_id = :id_resto");

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