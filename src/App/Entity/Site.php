<?php

namespace App\Entity;


/**
 * class qui va permettre de créer des utilisateurs 
 */
class Site {


    /**
     * @var int     $ID_site     identifiant du site (généré auto par la bdd donc pas de setter)
     */

      private   $ID_site;


      /**
       * $img_site      image du site sur le portfolio  
       *
       * @var string
       */
      private $img_site;

      /**
       * $lien_site
       *
       * @var string
       */
      private $lien_site;

      /**
       * $titre_site
       *
       * @var string
       */
      private $titre_site;

      /**
       * $description_site
       *
       * @var string
       */
      private $description_site;
	
     

      /**
       * Get the value of ID_site
       */ 
      public function getID_site()
      {
            return $this->ID_site;
      }

      /**
       * Get $img_site image du site sur le portfolio
       *
       * @return  string
       */ 
      public function getImg_site()
      {
            return $this->img_site;
      }

      /**
       * Set $img_site image du site sur le portfolio
       *
       * @param  string  $img_site  $img_site image du site sur le portfolio
       *
       * @return  self
       */ 
      public function setImg_site(string $img_site)
      {
            $this->img_site = $img_site;

            return $this;
      }

      /**
       * Get $lien_site
       *
       * @return  string
       */ 
      public function getLien_site()
      {
            return $this->lien_site;
      }

      /**
       * Set $lien_site
       *
       * @param  string  $lien_site  $lien_site
       *
       * @return  self
       */ 
      public function setLien_site(string $lien_site)
      {
            $this->lien_site = $lien_site;

            return $this;
      }

      /**
       * Get $titre_site
       *
       * @return  string
       */ 
      public function getTitre_site()
      {
            return $this->titre_site;
      }

      /**
       * Set $titre_site
       *
       * @param  string  $titre_site  $titre_site
       *
       * @return  self
       */ 
      public function setTitre_site(string $titre_site)
      {
            $this->titre_site = $titre_site;

            return $this;
      }

      /**
       * Get $description_site
       *
       * @return  string
       */ 
      public function getDescription_site()
      {
            return $this->description_site;
      }

      /**
       * Set $description_site
       *
       * @param  string  $description_site  $description_site
       *
       * @return  self
       */ 
      public function setDescription_site(string $description_site)
      {
            $this->description_site = $description_site;

            return $this;
      }
}