<?php
require 'sidebar.php';


require '../model/class_connexion.php';
$DB = new DB();
?>




<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Ajouter un bien</h2>
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

            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <button type="submit"
                        class="items-center px-3 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                        Ajouter le bien
                    </button>
                    <label class="text-sm font-medium text-gray-900 dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12 mt-4 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
                        </svg>
                        <input name="CodeBarre" type="file" class="hidden cursor:pointer" />
                    </label>
                </div>
                <button type="submit"
                    class="items-center px-3 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                    Faire la prediction
                </button>
            </div>
        </form>
    </div>
</section>


<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <!-- Start coding here -->


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full" style="width: 1000px;">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Désignation du bien
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type de
                            bien
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valeur
                            initiale
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date d'acquisition
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Durée
                            d'amortissement
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Unité
                            de la durée
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valeur réelle
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantité du nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CodeBarre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-1" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">
                            <a href="edit_bien.php"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-green-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>