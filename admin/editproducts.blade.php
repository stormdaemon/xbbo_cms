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

    <main class="max-w-lg mx-auto mt-20">
        <h1 class="text-3xl font-bold mb-5 whitespace-nowrap">Formulaire de modification du produit</h1>
        <form action="#" method="post">
          <div class="mb-4">
            <label for="titre" class="block text-gray-700 font-bold mb-2">Titre :</label>
            <input type="text" name="titre" id="titre" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
          </div>
          <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description :</label>
            <textarea name="description" id="description" rows="3" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
          </div>
          <div class="mb-4">
            <label for="prix" class="block text-gray-700 font-bold mb-2">Prix :</label>
            <input type="number" name="prix" id="prix" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
          </div>
          <div class="mb-4">
            <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
              <span>Télécharger une image</span>
              <input id="image" name="image" type="file" class="sr-only">
            </label>
          </div>
          <div class="mt-8">
            <button type="submit" class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition duration-150 ease-in-out rounded-md">
              Enregistrer les modifications
            </button>
          </div>
        </form>
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