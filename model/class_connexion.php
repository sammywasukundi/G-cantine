<?php
class DB
{

    // private $host = 'localhost';
    // private $username = 'root';
    // private $password = '';
    // private $database = 'bdd_quantine_uniluk';
    // private $db;

    // public function __construct($host = null, $username = null, $password = null, $database = null)
    // {
    //     if ($host != null) {
    //         $this->host = $host;
    //         $this->username = $username;
    //         $this->password = $password;
    //         $this->database = $database;

    //         try {
    //             $this->db = new PDO(
    //                 'mysql:host=' . $this->host . ';dbname=' . $this->database,
    //                 $this->username,
    //                 $this->password,
    //                 array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')
    //             );
    //         } catch (PDOException $e) {
    //             die('Echec de connexion a la BDD');
    //         }

    //     }
    // }
    

   

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'bdd_quantine_uniluk';
    private $db;

    public function __construct($host = null, $username = null, $password = null, $database = null)
    {
        if ($host != null) {
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        try {
            $this->db = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->database,
                $this->username,
                $this->password,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')
            );
            // Définir le mode d'erreur PDO sur Exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Echec de connexion à la base de données : ' . $e->getMessage());
        }
    }

    // Méthode pour préparer une requête SQL
    public function prepare($sql)
    {
        return $this->db->prepare($sql);
    }

    // Méthode pour exécuter une requête simple (sans préparation)
    public function query($sql)
    {
        return $this->db->query($sql);
    }




}
?>