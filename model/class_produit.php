<?php
// Classe produit
class Produit
{
    // Attributs supplémentaires
    protected $ID_produit;
    protected $nom_produit;
    protected $type_produit;
    protected $description;
    protected $prix_vente;
    protected $image_produit;



    // Constructeur
    public function __construct(
        $ID_produit = null,
        $nom_produit = null,
        $type_produit = null,
        $description = null,
        $prix_vente = null,
        $image_produit = null
  
    ) {
        $this->ID_produit = $ID_produit;
        $this->nom_produit = $nom_produit;
        $this->type_produit = $type_produit;
        $this->description = $description;
        $this->prix_vente = $prix_vente;
        $this->image_produit = $image_produit;
       
    }

    // Implémentation de la méthode pour enregistrer un produit
    public function enregistrer_produit()
    {
        require('./dbconnexion.php');
        $DB = new DB();
        
        //verifions si le produit exite deja


        $reqi = $con->prepare("SELECT * FROM produit WHERE nom_produit=? and type_produit=?");
        $reqi->execute(array($this->nom_produit, $this->type_produit));
        $reqexist = $reqi->rowCount();
        echo $reqexist;
        if ($reqexist == 0) {
            $req = $con->prepare('INSERT INTO produit(nom_produit,type_produit, description, prix_vente,image_produit) 
                    VALUES(?,?,?,?,?)');
            $req->execute(array($this->nom_produit, $this->type_produit, $this->description, $this->prix_vente, $this->image_produit)) or die(print_r($base->errorInfo()));
            echo "<script>alert('save!!')</script>";



            echo "
                     <script>
                         var notification = alertify.notify('Enregistré', 'success', 5, function(){  console.log('dismissed'); });
                     </script>
                     ";
        } else {
            // $afficher = "Mail déja utilisé!!";
            echo "<script>alert('cet produit existe déjà !!');
                 var notification = alertify.error('cet produit existe déjà !!!!', 'success', 5, function(){  console.log('dismissed'); });
                </script>";
        }
    }
}