<?php


/******************************************** */
namespace App\Manager;

use PDO;


/****************************************** */

class AllManager{
    /**
     * objet PDO lié à la base de données "Intégration_code". elle est stockée dans une variable
     * pour être utilisé plus facilement dans les différentes méthodes
     *
     * @var \PDO $pdo
     */
    protected $pdo;


    /**
     * objet pdoStatement résultant de l'utilisation des méthodes PDO::query et PDO::prepare.
     *  il est stocké dans une variable pour faciliter son utilisation
     *
     * @var \PDOStatement   $pdoStatement
     */
    protected $pdoStatement;

    /**
     * UserManager  constructor.
     * initialisation de la connexion à la base de donnée. 
     */
    //public function __construct(){

    //    $host_name = 'db760278169.hosting-data.io';
    //   $database = 'db760278169';
    //    $user_name = 'dbo760278169';
    //    $password = 'Portfolio@08';

    //    $this->pdo = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );
    //}
   /**
     * CodeManager  constructor.
     * initialisation de la connexion à la base de donnée. 
     */
     public function __construct(){
         $host_name = 'localhost';
         $database = 'portfolio';
         $user_name = 'root';
         $password = '';

         $this->pdo = new PDO("mysql:host=$host_name; dbname=$database;",
         $user_name, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );
   
        
     }
}

