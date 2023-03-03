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

    <main class="container mt-40 mx-auto px-4">
        <!-- Connectés -->
        <div class="flex flex-wrap -mx-4">
          <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  </div>
                  <div class="ml-5 w-0 flex-1">
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                      Connectés
                    </dt>
                    <dd class="flex items-baseline">
                      <div class="text-2xl leading-8 font-semibold text-gray-900">
                        127
                      </div>
                    </dd>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin de la carte connectés -->
          <!-- Inscrits -->
          <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16"> <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/> <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> </svg>
                  </div>
                  <div class="ml-5 w-0 flex-1">
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                      Inscrits
                    </dt>
                    <dd class="flex items-baseline">
                      <div class="text-2xl leading-8 font-semibold text-gray-900">
                        2456
                      </div>
                    </dd>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin de la carte inscrits -->
          <!-- Version du cms -->
          <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <div class="px-4 py-5 sm:p-6">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16"> <path d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8l3.147-3.146zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8l-3.147-3.146z"/> </svg>
                  </div>
                  <div class="ml-5 w-0 flex-1">
                    <dt class="text-sm leading-5 font-medium text-gray-500 truncate">
                      Version de XBBO CMS
                    </dt>
                    <dd class="flex items-baseline">
                      <div class="text-2xl leading-8 font-semibold text-gray-900">
                        0.1
                      </div>
                    </dd>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <!-- Fin de la carte version du cms -->
            <!-- Liste des membres de l'administration -->
          <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <div class="px-4 py-5 sm:p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Rank
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          Pseudo
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <!-- Début du rang -->
                      <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">1</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                              <div class="h-16 w-16 rounded-full overflow-hidden">
                                  <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=lg-275-110.ch-665-92.hr-125-135-110.sh-300-62.hd-209-1363.lg-280-1363.he-1608.fa-1206-1401.ca-1809-1401&amp;direction=4&amp;head_direction=4&amp;gesture=sml" alt="" class="h-full w-full object-cover">
                                </div>                              
                            <div class="ml-4">
                              <div class="text-sm font-medium text-gray-900">
                                Pseudo Habbo
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">24</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">2050</div>
                        </td>
                      </tr>
                      <!-- Fin du rang -->
                    </tbody>
                  </table>
            </div>
          </div>
            <!-- Fin de la carte liste des membres de l'administration -->
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
