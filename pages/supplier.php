<?php
require 'sidebar.php';
require '../model/dbconnexion.php';
$DB = new DB();
?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new supplier</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="md:block hidden">
                    <img class="object-cover" src="../assets/vectors/supplier.png" alt="">
                </div>
                		

                <div class="block">
                    <div class="w-full">
                        <label for="adresse_fournisseur"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier
                            address</label>
                        <input type="text" name="adresse_fournisseur" id="adresse_fournisseur"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Butembo/Av. bukavu" required="">
                    </div>
                    <div class="w-full">
                        <label for="num_tel_fournisseur"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier tel.
                            number</label>
                        <input type="number" name="num_tel_fournisseur" id="num_tel_fournisseur"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="+243999576452" required="">
                    </div>
                    <button name="submit_supplier" type="submit"
                        class="items-center px-3 py-2 mt-4 w-full sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                        Add supplier
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>