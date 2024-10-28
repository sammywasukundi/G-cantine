<?php
require 'sidebar.php';
require '../model/class_connexion.php';
require '../model/class_user.php';
$DB = new DB();
?>

<section class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            Gestion de l'intendance
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Create an account
                </h1>
                <form class="space-y-4 md:space-y-6" action="#" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="nom_user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            name</label>
                        <input type="text" name="nom_user" id="nom_user"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Your name" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" name="email_user" id="email_user"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="user@gmail.com" required="">
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="pwd_user" id="pwd_user" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required="">
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                            password</label>
                        <input type="confirm-password" name="confirm-password" id="confirm-password"
                            placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required="">
                    </div>
                    <div>
                        <label for="profil_user"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Profile
                            Picture</label>
                        <input type="file" name="profil_user" id="profil_user"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            required>
                    </div>
                    <button type="submit" name="submit-user"
                        class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create
                        an account</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="login.php"
                            class="font-medium text-green-600 hover:underline dark:text-green-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
if (isset($_POST['submit-user'])) {
    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Récupérer les données du formulaire
        $nom_user = $_POST['nom_user'];
        $email_user = $_POST['email_user'];
        $pwd_user = $_POST['pwd_user'];
        $confirm_pwd = $_POST['confirm-password'];

        // Vérifier si un fichier a été téléchargé sans erreur
        if (isset($_FILES['profil_user']) && $_FILES['profil_user']['error'] === UPLOAD_ERR_OK) {
            $profil_user = $_FILES['profil_user']; // Fichier de profil

            // Créer une instance de l'utilisateur
            $new_user = new User(null, $nom_user, $email_user, $pwd_user, $profil_user);

            // Enregistrer l'utilisateur dans la base de données
            $new_user->save_user($confirm_pwd);

        } else {
            echo "Erreur lors du téléchargement de l'image de profil.";
        }
    }
}

?>