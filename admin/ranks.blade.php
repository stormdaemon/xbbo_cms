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

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-20">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Gestion des rangs</h1>
        
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
          <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <form>
            <table class="min-w-full leading-normal">
              <thead>
                <tr>
                  <th scope="col" class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rang</th>
                  <th scope="col" class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pseudo</th>
                </tr>
              </thead>
              <tbody>
                <!--- Les administrateurs et leurs rangs -->
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap bg-white text-sm font-medium text-gray-900">
                      <select class="bg-white border border-gray-300 rounded-md px-2 py-1">
                        <option value="admin">Admin</option>
                        <option value="Dev">Développeur</option>
                        <option value="graph">Graphiste</option>
                        <option value="architecte">Architecte</option>
                        <option value="modo">Modérateur</option>
                      </select>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-white text-sm text-gray-500">admin1</td>
                  </tr>  
                  <!--- Fin -->
                  <!--- 2 -->                      
                  <tr>
                    <td class="px-6 py-4 whitespace-no-wrap bg-white text-sm font-medium text-gray-900">
                      <select class="bg-white border border-gray-300 rounded-md px-2 py-1">
                        <option value="admin">Admin</option>
                        <option value="Dev">Développeur</option>
                        <option value="graph">Graphiste</option>
                        <option value="architecte">Architecte</option>
                        <option value="modo">Modérateur</option>
                      </select>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-white text-sm text-gray-500">admin1</td>
                  </tr>
                  <!--- Fin du 2 -->  
                  <!--- 3 -->  
                  <tr>
                    <td class="px-6 py-4 whitespace-no-wrap bg-white text-sm font-medium text-gray-900">
                      <select class="bg-white border border-gray-300 rounded-md px-2 py-1">
                        <option value="admin">Admin</option>
                        <option value="Dev">Développeur</option>
                        <option value="graph">Graphiste</option>
                        <option value="architecte">Architecte</option>
                        <option value="modo">Modérateur</option>
                      </select>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap bg-white text-sm text-gray-500">admin1</td>
                  </tr>
                  <!--- Fin du 3 -->                
              </tbody>
            </table>
            <input type="submit" value="Valider" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-4 mt-4 mb-4">
            </form>
          </div>
        </div>
          <h1 class="text-3xl font-bold text-gray-900 mb-8">Ajouter une nouvelle recrue</h1>
          
          <div class="w-full max-w-md">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">
                  Nom d'utilisateur
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nom d'utilisateur">
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="rank">
                  Rang
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="rank">
                    <option value="admin">Admin</option>
                    <option value="Dev">Développeur</option>
                    <option value="graph">Graphiste</option>
                    <option value="architecte">Architecte</option>
                    <option value="modo">Modérateur</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-7a1 1 0 011 1v3a1 1 0 01-2 0V4a1 1 0 011-1zm0 12a1 1 0 01-1-1V10a1 1 0 112 0v4a1 1 0 01-1 1z" clip-rule="evenodd"/></svg>
                  </div>
                </div>
              </div>
              <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                  Ajouter
                </button>
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