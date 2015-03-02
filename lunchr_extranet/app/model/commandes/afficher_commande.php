<?php
function afficher_commande($id_resto, $ordre) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                             FROM   lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id 
                             and lr.lr_id = :id_resto
                             and lc.lc_statut = 0
                             and lc.lc_date_dish LIKE '".date("Y-m-d")."%' 
                             ORDER BY {$ordre} ");

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

function afficher_commande_demain($id_resto, $ordre) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                             FROM   lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id 
                             and lr.lr_id = :id_resto
                             and lc.lc_statut = 0
                             and lc.lc_date_dish LIKE '".date("Y-m-d", strtotime("+1 day"))."%' 
                             ORDER BY {$ordre} ");

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

function afficher_commande_futur($id_resto, $ordre) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                             FROM   lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id
                             and lr.lr_id = :id_resto
                             and lc.lc_statut = 0
                             ORDER BY {$ordre} ");

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

function afficher_commande_valide($id_resto, $ordre) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                            FROM lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id 
                             and lr.lr_id = :id_resto
                             and lc.lc_statut = 1
                             ORDER BY {$ordre} ");

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

function afficher_commande_historique($id_resto, $ordre) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                            FROM lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id 
                             and lr.lr_id = :id_resto
                             and lc.lc_statut = 2
                             ORDER BY {$ordre} ");

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

function afficher_commande_annule($id_resto, $ordre) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                            FROM lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id 
                             and lr.lr_id = :id_resto
                             and lc.lc_statut = 3
                             ORDER BY {$ordre} ");

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

function afficher_commande_details($id_resto, $id_commande) {
  
        global $connexion;
        try {
            $select = $connexion -> prepare("SELECT * 
                            FROM lunchr_commandes as lc, 
                                lunchr_users as lu, 
                                lunchr_ligne_commande as llc, 
                                lunchr_produits as lp,
                                lunchr_restaurants as lr
                             WHERE lc.lu_id = lu.lu_id
                             and lc.lc_id = llc.lc_id 
                             and llc.lp_id = lp.lp_id 
                             and lr.lr_id = :id_resto
                             and lc.lc_id = :id_commande");

          $select -> execute(array('id_resto'=>$id_resto, 'id_commande'=>$id_commande));
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