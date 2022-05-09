<?php

class controler {
    function  ajoutereleve($user )
    {
        $sql= "INSERT INTO eleve(nom,heure_depart,heure_arrivee,ref_pilote,ref_avion) VALUES (:date_depart,:heure_depart,:heure_arrivee,:ref_pilote,:ref_avion)";
        $db= config::getConnexion();
        try
        {
            $query=$db->prepare($sql);
            $query->execute(
                [
                    'nom'=> $user->getDateDepart(),
                    'heure_depart' =>$user->getHeureDepart(),
                    'heure_arrivee' => $user->getHeureArrivee(),
                    'ref_pilote' =>$user->getRef_Pilote(),
                    'ref_avion' =>$user->getRef_Avion(),
                ]
            );
        }catch (Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }


}