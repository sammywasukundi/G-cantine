<?php
require 'sidebar.php';

?>


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Eventaire</h2>
        <form action="eventaire.php" method="post" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div>
                    <label for="idBien"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sélectionner un
                        bien</label>
                    <select name="idBien" id="idBien"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <option value="Immobilier">Immobilier</option>
                        <option value="Magasin">Magasin</option>
                        <option value="Bus">Bus</option>
                        <option value="Cantine">Cantine</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="DateInventaire"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de l'eventaire</label>
                    <input type="date" name="DateInventaire" id="DateInventaire"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="">
                </div>
                <div class="w-full">
                    <label for="EtatPhysique" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etat
                        physique</label>
                    <input type="text" name="EtatPhysique" id="EtatPhysique"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Etat physique d'un bien" required="">
                </div>
                <div class="w-full">
                    <label for="ValeurAmortie"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valeur
                        amortie</label>
                    <input type="number" name="ValeurAmortie" id="ValeurAmortie"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="unité de la durée" required="">
                </div>
            </div>
            <button type="submit" name="submit_eventaire"
                class="w-full items-center px-3 py-2 mt-8 sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                Faire l'eventaire
            </button>
        </form>
    </div>
</section>


<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <!-- Start coding here -->


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Bien
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date de l'eventaire
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Etat
                            physique
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Valeur
                            amortie
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
                            <a href="eventaire.php"
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