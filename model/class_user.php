<?php

class User
{
    private $id_user;
    private $nom_user;
    private $email_user;
    private $pwd_user;
    private $profil_user; // Chemin de l'image de profil

    public function __construct($id_user = null, $nom_user = null, $email_user = null, $pwd_user = null, $profil_user = null)
    {
        $this->id_user = $id_user;
        $this->nom_user = $nom_user;
        $this->email_user = $email_user;
        $this->pwd_user = $pwd_user;
        $this->profil_user = $profil_user;
    }

    // Fonction pour enregistrer un utilisateur avec la confirmation de mot de passe
    public function save_user($confirm_pwd)
    {
        try {
            // Vérifier si les mots de passe correspondent
            if ($this->pwd_user !== $confirm_pwd) {
                echo "Les mots de passe ne correspondent pas.";
                return;
            }

            // Connexion à la base de données
            require './class_connexion.php';
            $DB = new DB();
            //$db = $DB->connect(); // Assurez-vous d'avoir cette méthode dans votre classe DB

            // Gestion de l'upload du fichier
            if (isset($_FILES['profil_user']) && $_FILES['profil_user']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['profil_user']['tmp_name'];
                $fileName = $_FILES['profil_user']['name'];
                $fileSize = $_FILES['profil_user']['size'];
                $fileType = $_FILES['profil_user']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));

                // Définir les extensions autorisées
                $allowedfileExtensions = array('jpg', 'png', 'jpeg');

                if (in_array($fileExtension, $allowedfileExtensions)) {
                    // Définir le dossier de destination
                    $uploadFileDir = './uploaded_files/';
                    if (!is_dir($uploadFileDir)) {
                        mkdir($uploadFileDir, 0777, true); // Crée le dossier s'il n'existe pas
                    }
                    $dest_path = $uploadFileDir . $fileName;

                    // Déplacer le fichier dans le dossier de destination
                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        $this->profil_user = $dest_path; // Enregistre le chemin du fichier dans la base de données
                    } else {
                        echo 'Erreur lors du déplacement du fichier téléchargé.';
                        return;
                    }
                } else {
                    echo 'Seuls les fichiers .jpg, .jpeg et .png sont autorisés.';
                    return;
                }
            } else {
                echo 'Erreur lors du téléchargement du fichier.';
                return;
            }

            // Hacher le mot de passe
            $hashed_pwd = password_hash($this->pwd_user, PASSWORD_DEFAULT);

            // Requête SQL pour l'insertion
            $sql = "INSERT INTO users (nom_user, email_user, pwd_user, profil_user) VALUES (:nom_user, :email_user, :pwd_user, :profil_user)";

            // Préparation de la requête
            $stmt = $db->prepare($sql);

            // Liaison des paramètres
            $stmt->bindParam(':nom_user', $this->nom_user);
            $stmt->bindParam(':email_user', $this->email_user);
            $stmt->bindParam(':pwd_user', $hashed_pwd); // Utilisez le mot de passe haché
            $stmt->bindParam(':profil_user', $this->profil_user);

            // Exécution
            $stmt->execute();

            // Redirection
            header('Location: login.php');
            exit(); // Ajoutez exit après une redirection

        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }



    // Fonction pour mettre à jour un utilisateur
    public function update_user($confirm_pwd): void
    {
        try {
            // Vérifier si les mots de passe correspondent
            if ($this->pwd_user !== $confirm_pwd) {
                echo "Les mots de passe ne correspondent pas.";
                return;
            }

            // Connexion à la base de données
            require './dbconnexion.php';
            $DB = new DB();
            // Gestion de l'upload du fichier (si un nouveau fichier est fourni)
            if (isset($_FILES['profil_user']) && $_FILES['profil_user']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['profil_user']['tmp_name'];
                $fileName = $_FILES['profil_user']['name'];
                $fileSize = $_FILES['profil_user']['size'];
                $fileType = $_FILES['profil_user']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));

                // Définir les extensions autorisées
                $allowedfileExtensions = array('jpg', 'png', 'jpeg');

                if (in_array($fileExtension, $allowedfileExtensions)) {
                    // Définir le dossier de destination
                    $uploadFileDir = './uploaded_files/';
                    $dest_path = $uploadFileDir . $fileName;

                    // Déplacer le fichier dans le dossier de destination
                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        $this->profil_user = $dest_path; // Enregistre le nouveau chemin du fichier dans la base de données
                    } else {
                        echo 'Erreur lors du déplacement du fichier téléchargé.';
                        return;
                    }
                } else {
                    echo 'Seuls les fichiers .jpg, .jpeg et .png sont autorisés.';
                    return;
                }
            }

            // Requête SQL pour la mise à jour
            $sql = "UPDATE users SET nom_user = :nom_user, email_user = :email_user, pwd_user = :pwd_user, profil_user = :profil_user WHERE id_user = :id_user";

            // Préparation de la requête
            $stmt = $db->prepare($sql);

            // Liaison des paramètres
            $stmt->bindParam(':id_user', $this->id_user);
            $stmt->bindParam(':nom_user', $this->nom_user);
            $stmt->bindParam(':email_user', $this->email_user);
            $stmt->bindParam(':pwd_user', $this->pwd_user);
            $stmt->bindParam(':profil_user', $this->profil_user);

            // Exécution
            $stmt->execute();

            echo "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    // Fonction pour lire un utilisateur
    public function read_user(): void
    {
        try {
            // Connexion à la base de données
            require './dbconnexion.php';
            $DB = new DB();
            // Requête SQL pour lire l'utilisateur
            $sql = "SELECT * FROM users WHERE id_user = :id_user";

            // Préparation de la requête
            $stmt = $db->prepare($sql);

            // Liaison du paramètre
            $stmt->bindParam(':id_user', $this->id_user);

            // Exécution
            $stmt->execute();

            // Affichage du résultat
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                echo "Utilisateur : ";
                print_r($user); // Affiche les détails de l'utilisateur, y compris le chemin de l'image
            } else {
                echo "Utilisateur non trouvé.";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    // Fonction pour supprimer un utilisateur
    public function delete_user(): void
    {
        try {
            // Connexion à la base de données
            require './dbconnexion.php';
            $DB = new DB();
            // Requête SQL pour récupérer le chemin du fichier de l'utilisateur avant de le supprimer
            $sql_select = "SELECT profil_user FROM users WHERE id_user = :id_user";
            $stmt_select = $db->prepare($sql_select);
            $stmt_select->bindParam(':id_user', $this->id_user);
            $stmt_select->execute();
            $user = $stmt_select->fetch(PDO::FETCH_ASSOC);

            // Supprimer le fichier de l'utilisateur du serveur
            if ($user && file_exists($user['profil_user'])) {
                unlink($user['profil_user']); // Supprime physiquement le fichier du serveur
            }

            // Requête SQL pour supprimer l'utilisateur
            $sql = "DELETE FROM users WHERE id_user = :id_user";

            // Préparation de la requête
            $stmt = $db->prepare($sql);

            // Liaison du paramètre
            $stmt->bindParam(':id_user', $this->id_user);

            // Exécution
            $stmt->execute();

            echo "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}



?>