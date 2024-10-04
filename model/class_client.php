<?php
// Classe Client
class Client
{
    // Attributs de la classe Client
    protected $ID_client;
    protected $nom_client;
    protected $adresse_client;
    protected $numero_tel_client;
    protected $date_enregistrement;
    protected $date_modification;

    // Constructeur sans mot de passe ni photo
    public function __construct($ID_client=null, $nom_client=null, $adresse_client=null, $numero_tel_client=null, 
                                $date_enregistrement=null, $date_modification=null)
    {
        $this->ID_client = $ID_client;
        $this->nom_client = $nom_client;
        $this->adresse_client = $adresse_client;
        $this->numero_tel_client = $numero_tel_client;
        $this->date_enregistrement = $date_enregistrement;
        $this->date_modification = $date_modification;
    }

    // Méthode pour enregistrer un client
    public function save_client()
    {
        require_once('class_connexion.php');
        $DB = new DB();

        // Vérification si le client existe déjà dans la base de données
        $requser = $DB->prepare("SELECT * FROM client WHERE nom_client=? AND numero_tel_client=?");
        $requser->execute(array($this->nom_client, $this->numero_tel_client));
        $userexist = $requser->rowCount();

        // Si le client n'existe pas, insertion dans la base de données
        if ($userexist == 0) {
            $req = $DB->prepare('INSERT INTO client(nom_client, adresse_client, numero_tel_client) 
                                   VALUES(?,?,?)');
            $req->execute(array($this->nom_client, $this->adresse_client, $this->numero_tel_client));
            echo "<script>alert('Client enregistré avec succès !')</script>";
        } else {
            echo "<script>alert('Ce client existe déjà !')</script>";
        }
    }

    // Méthode pour mettre à jour un client
    public function update_client()
    {
        require('./dbconnexion.php');
        $DB = new DB();

        // Mise à jour du client dans la base de données
        $req = $DB->prepare('UPDATE client SET nom_client=?, adresse_client=?, numero_tel_client=?, date_modification=NOW() WHERE ID_client=?');
        $req->execute(array($this->nom_client, $this->adresse_client, $this->numero_tel_client, $this->ID_client));
        echo "<script>alert('Client mis à jour avec succès !')</script>";
    }

    // Méthode pour supprimer un client
    public function delete_client()
    {
        require('./dbconnexion.php');
        $DB = new DB();

        // Suppression du client de la base de données
        $req = $DB->prepare('DELETE FROM client WHERE ID_client=?');
        $req->execute(array($this->ID_client));
        echo "<script>alert('Client supprimé avec succès !')</script>";
    }
}