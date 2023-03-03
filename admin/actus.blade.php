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

    <main class="container mx-auto px-4 py-8 mt-10">
        <h1 class="text-3xl font-bold mb-8">Gestion des actualités</h1>
      
        <!-- Tableau des dernières actualités -->
        <h2 class="text-2xl font-bold mb-4">Dernières actualités</h2>
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-8">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Éditer</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap text-sm font-medium text-gray-900">Nouvelle mise à jour disponible</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">Admin</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">02/03/2023</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Éditer</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap text-sm font-medium text-gray-900">Nouveau concours de construction</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">Admin</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">28/02/2023</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Éditer</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap text-sm font-medium text-gray-900">Résultats du concours de construction</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">Admin</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">24/02/2023</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Éditer</a>
                </td>
              </tr>
            </tbody>
        </table>
        </div>
        
        <!-- Formulaire d'ajout d'une actualité -->

        <div class="max-w-md mx-auto my-8">
            <form action="#" method="POST" class="space-y-6">
              <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                <div class="mt-1">
                  <input type="text" name="title" id="title" autocomplete="off" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Contenu</label>
                <div class="mt-1">
                  <textarea name="content" id="content" rows="5" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
              </div>
              <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <div class="mt-1">
                  <input type="date" name="date" id="date" autocomplete="off" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <label for="author" class="block text-sm font-medium text-gray-700">Auteur</label>
                <div class="mt-1">
                  <input type="text" name="author" id="author" autocomplete="off" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Créer
                </button>
              </div>
            </form>
          </div>
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
