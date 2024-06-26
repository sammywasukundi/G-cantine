<?php
require 'sidebar.php';
require '../model/class_connexion.php';
$DB = new DB();
?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new customer</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="md:block hidden">
                    <img class="object-cover" src="../assets/vectors/client.png" alt="">
                </div>
                <div class="block">
                    <div class="sm:col-span-2">
                        <label for="nom_client"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer
                            name</label>
                        <input type="text" name="nom_client" id="nom_client"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type product name" required="">
                    </div>
                    <div class="w-full">
                        <label for="adresse_client"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer
                            address</label>
                        <input type="text" name="adresse_client" id="adresse_client"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Butembo/Av. bukavu" required="">
                    </div>
                    <div class="w-full">
                        <label for="numero_tel_client"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer tel.
                            number</label>
                        <input type="number" name="numero_tel_client" id="numero_tel_client"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="+243999576452" required="">
                    </div>
                    <button name="submit_customer" type="submit"
                        class="items-center px-3 py-2 mt-4 w-full sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                        Add customer
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>