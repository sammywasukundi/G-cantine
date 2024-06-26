<?php
    require 'sidebar.php';


    require '../model/dbconnexion.php';
    $DB = new DB();
?>


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new product</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="nom_produit"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <input type="text" name="nom_produit" id="nom_produit"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type product name" required="">
                </div>
                <div class="w-full">
                    <label for="prix_vente"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="prix_vente" id="prix_vente"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="1001$" required="">
                </div>
            </div>
            <div>
                <label for="type_produit"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                <select name="type_produit" id="type_produit"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected="">Select type</option>
                    <option value="TV">Juice</option>
                    <option value="PC">Milk</option>
                    <option value="GA">Oil</option>
                    <option value="PH">T-shirt</option>
                </select>
            </div>
            <div>
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea name="description" id="description" rows="8"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Your description here"></textarea>
            </div>

            <div class="flex space-x-4">
                <button type="submit"
                    class="items-center px-3 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                    Add product
                </button>
                <label class="text-sm font-medium text-gray-900 dark:text-white">
                    <ion-icon name="images" class="w-12 h-12 mt-4 "></ion-icon>
                    <input name="image_produit" type="file" class="hidden cursor:pointer" />
                </label>
            </div>
        </form>
    </div>
</section>