<?php

require 'sidebar.php';

?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Modifier un bien</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="Designation"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Désignation du bien</label>
                    <input type="text" name="Designation" id="Designation"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Désignation du bien" required="">
                </div>
                <div>
                    <label for="idTypeBien" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type de
                        bien</label>
                    <select name="idTypeBien" id="idTypeBien"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <option selected="">Sélectionner le type d'un bien </option>
                        <option value="Immobilier">Immobilier</option>
                        <option value="Magasin">Magasin</option>
                        <option value="Bus">Bus</option>
                        <option value="Cantine">Cantine</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="valeurInit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valeur
                        initiale</label>
                    <input type="number" name="valeurInit" id="valeurInit"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Valeur en chiffre" required="">
                </div>
                <div class="w-full">
                    <label for="DateAcquisition"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date d'acquisition</label>
                    <input type="date" name="DateAcquisition" id="DateAcquisition"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="1001$" required="">
                </div>
                <div class="w-full">
                    <label for="DureeAmortissement"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durée
                        d'amortissement</label>
                    <input type="number" name="DureeAmortissement" id="DureeAmortissement"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="durée d'amortissement" required="">
                </div>
                <div class="w-full">
                    <label for="UniteDuree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unité
                        de la durée</label>
                    <input type="text" name="UniteDuree" id="UniteDuree"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="unité de la durée" required="">
                </div>
                <div class="w-full">
                    <label for="ValeurReelle"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valeur réelle </label>
                    <input type="number" name="ValeurReelle" id="ValeurReelle"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Valeur réelle " required="">
                </div>
                <div class="w-full">
                    <label for="QuantiteNombre"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantité du nombre</label>
                    <input type="number" name="QuantiteNombre" id="QuantiteNombre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Quantité du nombre" required="">
                </div>

            </div>

            <div class="flex space-x-4">
                <button type="submit"
                    class="items-center px-3 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                    Modifier le bien
                </button>
                <!-- <label class="text-sm font-medium text-gray-900 dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-12 h-12 mt-4 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                    </svg>
                    <input name="CodeBarre" type="file" class="hidden cursor:pointer" />
                </label> -->
            </div>
        </form>
    </div>
</section>