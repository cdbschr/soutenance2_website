<?php 

namespace BestMusic\Models\content;

use BestMusic\Models\Manager;

class Music extends Manager {
  public function getAllMusic(): array {
    $db = self::dbAccess();

    $req = $db->prepare("SELECT 'titre', 'description', 'prix', 'id_genre', 'annee' FROM 'recherche'");
    $req->execute();
    return $req->fetchAll();
  }

  public function getMusic(): array {
    $db = self::dbAccess();

    $req = $db->prepare("SELECT 'titre', 'description', 'prix', 'id_genre', 'annee' FROM 'recherche'");
    $req->execute();
    return $req->fetch();
  }
}