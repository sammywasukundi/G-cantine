<?php
require 'sidebar.php';

?>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 w-2/3">
        <div class="flex justify-between">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Detail de l'etat de besoin</h2>
            <div>
                <button data-modal-target="modal-etat-besoin" data-modal-toggle="modal-etat-besoin"
                    class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    type="button">
                    Ajouter un etat de besoin
                </button>
            </div>
            <!-- mon modal pour la réference ici -->


        </div>
        <form action="etat_besoin.php" method="post" enctype="multipart/form-data" class="mt-8">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div>
                    <label for="id_etat_besoin"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sélectionner un
                        etat de besoin</label>
                    <select name="id_etat_besoin" id="id_etat_besoin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <option value="Immobilier">Immobilier</option>
                        <option value="Magasin">Magasin</option>
                        <option value="Bus">Bus</option>
                        <option value="Cantine">Cantine</option>
                    </select>
                </div>
                <div>
                    <label for="idProduit"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sélectionner un
                        produit</label>
                    <select name="idProduit" id="idProduit"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        <option value="Immobilier">Immobilier</option>
                        <option value="Magasin">Magasin</option>
                        <option value="Bus">Bus</option>
                        <option value="Cantine">Cantine</option>
                    </select>
                </div>
                <div class="w-full">
                    <label for="quantite" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de
                        l'eventaire</label>
                    <input type="date" name="quantite" id="quantite"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="">
                </div>
                <div class="w-full">
                    <label for="EtatPhysique"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantité</label>
                    <input type="text" name="EtatPhysique" id="EtatPhysique"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Etat physique d'un bien" required="">
                </div>
                <div class="w-full">
                    <label for="uniteQte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unité de
                        la quantité</label>
                    <input type="number" name="uniteQte" id="uniteQte"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="unité de la quantité" required="">
                </div>
            </div>
            <button type="submit" name="submit_etat_besoin"
                class="w-full items-center px-3 py-2 mt-8 sm:mt-6 text-sm font-medium text-center text-white rounded-md bg-green-500 hover:bg-green-600">
                Enregistrer un etat de besoin
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
                            Etat de besoin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Produit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date de l'eventaire
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantité
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Unité de la quantité
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
                            <a href="etat_besoin.php"
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


<!-- Mon modal pour l'etat de besoin ici-->
<div id="modal-etat-besoin" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ajouter un etat de besoin
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 bg-green-500 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="modal-etat-besoin">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" method="post" action="stock.php">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="idDepartement"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Departement</label>
                        <select id="idDepartement" name="idDepartement"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="PC">Biscuit</option>
                            <option value="GA">Console</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="DateDemande" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de
                            demande</label>
                        <input type="date" name="DateDemande" id="DateDemande"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                    </div>
                </div>
                <button type="submit" name="submitEtatBesoin"
                    class="text-white inline-flex items-center bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Ajouter une etat de besoin
                </button>
            </form>
        </div>
    </div>
</div>
<!-- mon modal pour l'etat de besoin ici -->