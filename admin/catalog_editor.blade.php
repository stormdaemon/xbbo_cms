<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Profil - Habbo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
  </head>
  <body class="bg-gray-100">
    <!-- Navbar -->
    <header class="bg-gray-800 fixed top-0 w-full z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ml-12">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8" src="https://habbofont.net/font/habbo_ribbon/administration.gif" alt="Habbo Logo">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 whitespace-nowrap">
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Accueil</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Gestion des ranks</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Gestion des actualités</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Gestion du catalogue</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Gestion des badges</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Paramètres du CMS</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Gestion des comptes utilisateurs</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Gestion de la boutique</a>
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 align-middle">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </button>
                                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-10 hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Déconnexion</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10 mt-10">
        <h1 class="text-3xl font-bold mb-5">Gestion du catalogue</h1>
        
        <!-- Tableau des produits -->
        <div class="max-h-96 overflow-y-scroll mb-8">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50 whitespace-nowrap">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item ID</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom de la page</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom du produit</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix en crédits</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix en points</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type de points</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantité maximum de stacks</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Choisir le produit à éditer</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">123</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Page de Noël</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bougie parfumée</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">50</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1000</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Duckets</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                </td>
             </tr>
            </tbody>
            </table>
        </div>

        <!-- Formulaire d'ajout de produit -->

        <div class="max-w-lg">
            <h2 class="text-xl font-medium mb-5">Créer un nouveau produit</h2>
            <form action="#" method="post">
              <div class="mb-4">
                <label for="item_id" class="block text-gray-700 font-bold mb-2">Item ID :</label>
                <input type="text" name="item_id" id="item_id" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
              </div>
              <div class="mb-4">
                <label for="page_id" class="block text-gray-700 font-bold mb-2">Nom de la page :</label>
                <select name="page_id" id="page_id" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="page_noel">Page de Noël</option>
                    <option value="page_halloween">Page de Halloween</option>
                </select>
            </div>            
              <div class="mb-4">
                <label for="catalog_name" class="block text-gray-700 font-bold mb-2">Nom du produit :</label>
                <input type="text" name="catalog_name" id="catalog_name" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
              </div>
              <div class="mb-4">
                <label for="prix_credits" class="block text-gray-700 font-bold mb-2">Prix en crédits :</label>
                <input type="number" name="prix_credits" id="prix_credits" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
              </div>
              <div class="mb-4">
                <label for="prix_points" class="block text-gray-700 font-bold mb-2">Prix en points :</label>
                <input type="number" name="prix_points" id="prix_points" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
              </div>
              <div class="mb-4">
                <label for="type_points" class="block text-gray-700 font-bold mb-2">Type de points :</label>
                <select name="type_points" id="type_points" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                  <option value="duckets">Duckets</option>
                  <option value="diamonds">Diamonds</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="quantite_max" class="block text-gray-700 font-bold mb-2">Quantité max :</label>
                <input type="number" name="quantite_max" id="quantite_max" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
              </div>
              <div class="mt-8">
                <button type="submit" class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full rounded-md">Ajouter</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="bg-gray-800 fixed bottom-0 w-full">
      <div class="flex items-center justify-center">
    <img src="https://habbofont.net/font/usva/xbbo.gif" alt="Logo Habbo" class="h-12 mr-4">
    <div class="text-gray-400">
      <p class="whitespace-nowrap">© 2023 Sulake Corporation Oy. Tous droits réservés. Habbo, Habbo Hotel, Sulake et leurs logos sont des marques déposées de Sulake Corporation Oy en Finlande et/ou dans d'autres pays.</p>
      <p class="mt-4 lg:mt-2">© 2023 Développé par StormDaemon</p>
    </div>     
  </div>  
</footer>
      <script>
        const dropdownButton = document.querySelector('.group > button');
        const dropdownMenu = document.querySelector('.group > div');
    
        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
    
      </body>
        </html>
