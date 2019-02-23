<?php


/******************************************** */
namespace App\Manager;

use PDO;
use App\Entity\Site;
use App\Manager\AllManager;


/****************************************** */



class SiteManager extends AllManager {


      
    
    /**
     * insert un objet site dans la base de donnée et met à jour l'objet passé en argument en lui 
     * spécifiant un identifiant.
     *
     * @param Site $site    objet de type Site passé par référence.
     * @return bool true si l'objet a été inseré, false si une erreur survient
     */
    private function create(Site &$site){

        $this->pdoStatement = $this->pdo->prepare('INSERT INTO site VALUES (NULL, :img, :lien, :titre, :descript) ');

        //liaison des parametres

        $this->pdoStatement->bindValue(':img', $site->getImg_site(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':lien', $site->getLien_site(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':titre', $site->getTitre_site(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':descript', $site->getDescription_site(), PDO::PARAM_STR);

        //executer la requete

        $executeIsOk = $this->pdoStatement->execute();

        if(!$executeIsOk){
            return false;
        }
        else{
            
            $id = $this->pdo->lastInsertId();
            $site = $this->read($id);


            return true;
        }

    }


    /**
     * Récupère un objet Site à partir de l'identifiant
     *
     * @param int  $id  identifiant d'un contact
     * @return bool|Site|null false si une erreur survient, un objet site si une sorrespondance est trouvée, Null
     */
    public function read($id){

      $this->pdoStatement =  $this->pdo->prepare('SELECT * FROM site WHERE ID_site= :id ');

      //liaison des parametres

      $this->pdoStatement->bindValue(':id',$id, PDO::PARAM_INT);

      //éxécution de la requête

      $executeIsOk = $this->pdoStatement->execute();

      if($executeIsOk){

        $site = $this->pdoStatement-> fetchObject('App\Entity\Site');

        if($site===false){
            return null;
        }
        else{
            return $site;
        }

      }
      else{
          //erreur d'execution
          return false;
      }

    }


    /**
     * Récupère tous les objets Site de la bdd
     *
     * @return array|bool tableau d'objet Site ou un tableau vide s'il n'y a aucun objet dans la 
     * bdd, ou false si une erreur survient
     */
    public function readAll(){


        $this->pdoStatement = $this->pdo->query('SELECT * FROM site ORDER BY titre_site, lien_site');

        //construction d'un tableau d'objet de type Site

        return $this->pdoStatement->fetchAll();
    }


    /**
     * Met à jour un objet stocké en bdd
     *
     * @param Site $site objet de type Site
     * @return bool true en cas de succès ou false en cas d'erreur
     */
    private function update(Site $site){

        $pdoStatement = $this->pdo->prepare('UPDATE site SET img_site=:img, lien_site=:lien, titre_site=:titre, description=:descript WHERE ID_site=:id LIMIT 1');

        //liaison des parametres

        $pdoStatement->bindValue(':img', $site->getImg_site(), PDO::PARAM_STR);
        $pdoStatement->bindValue(':lien', $site->getLien_site(), PDO::PARAM_STR);
        $pdoStatement->bindValue(':titre', $site->getTitre_site(), PDO::PARAM_STR);
        $pdoStatement->bindValue(':descript', $site->getDescription_site(), PDO::PARAM_STR);
        $pdoStatement->bindValue(':id', $site->getID_site(), PDO::PARAM_INT);

        //execution de la requete

        return $pdoStatement->execute();

    }

    /**
     * Supprime un objet stocké en bdd
     *
     * @param Site $site objet de type Site
     * @return bool true en cas de succès ou false en cas d'erreur
     */
    public function delete(Site $site){
        
        $pdoStatement = $this->pdo->prepare('DELETE  FROM site WHERE ID_site = :id LIMIT 1');

        $pdoStatement->bindValue(':id', $site->getID_site(), PDO::PARAM_INT);

        //execution de la requete

        return $pdoStatement->execute();

    }


    /**
     * insere un objet en bdd et crée l'objet passé en argument en lui spécifiant un identifiant
     * ou le met à jour dans la bdd s'il en est issu
     *
     * @param Site $site    objet Site passé par référence (&)
     * @return bool true en cas de succes ou false en cas d'erreur
     */
    public function save(Site &$site){

        if(is_null($site->getID_site())){
            return $this->create($site);
        }
        else{
            return $this->update($site);
        }

    }


}