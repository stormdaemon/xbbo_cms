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
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8" src="https://habbofont.net/font/usva/xbbo.gif" alt="Habbo Logo">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Boutique</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Classements</a>
                            <a href="#" class="px-4 py-3 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Entrer dans l'hôtel</a>
                            <div class="relative group">
                                <button class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 align-middle">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </button>
                                <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-10 hidden">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Modifier mon profil</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">Déconnexion</a>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="mt-20">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex-1 min-w-0">
                    <div class="flex items-center">
                        <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=lg-275-110.ch-665-92.hr-125-135-110.sh-300-62.hd-209-1363.lg-280-1363.he-1608.fa-1206-1401.ca-1809-1401&amp;direction=4&amp;head_direction=4&amp;gesture=sml" alt="Avatar de pseudohabbo" class="rounded-full">
                        <div class="ml-4">
                            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate mb-10">Pseudo du personnage</h2>
                            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                </div>
                                <div class="mt-10 sm:mt-0">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                      Informations de compte
                                    </h3>
                                    <div class="mt-5 border-t border-gray-200">
                                      <dl class="divide-y divide-gray-200">
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Nom d'utilisateur
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            pseudohabbo
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Adresse email
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            pseudohabbo@example.com
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Mot de passe
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            ********
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Date de naissance
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            01/01/2000
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Téléphone
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            06 12 34 56 78
                                          </dd>
                                        </div>
                                      </dl>
                                    </div>
                                  </div>
                                
                                  <div class="mt-10 sm:mt-0">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                      Personnage
                                    </h3>
                                    <div class="mt-5 border-t border-gray-200">
                                      <dl class="divide-y divide-gray-200">
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Pseudo
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            pseudohabbo
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Date de naissance
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            01/01/2000
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Sexe
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            Homme
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Mot de passe
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            ********
                                          </dd>
                                        </div>
                                        <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4">
                                          <dt class="text-sm font-medium text-gray-500">
                                            Email
                                          </dt>
                                          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                johndoe@exemple.com                                              
                                            </dd>
                                        </div>
                                    </main>
                                    <footer class="bg-gray-800 fixed bottom-0 w-full flex items-center">
                                      <img src="https://habbofont.net/font/usva/xbbo.gif" alt="Logo Habbo" class="h-12 mr-0 lg:mr-0 ml-10">
                                      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-row justify-between items-center">
                                        <ul class="flex items-center space-x-4 text-gray-400 whitespace-nowrap">
                                          <li><a href="#" class="hover:text-white">Aide</a></li>
                                          <li><a href="#" class="hover:text-white">Sécurité</a></li>
                                          <li><a href="#" class="hover:text-white">Conditions d'utilisation</a></li>
                                          <li><a href="#" class="hover:text-white">Confidentialité</a></li>
                                        </ul>
                                        <p class="text-gray-400 mt-2 lg:mt-0 lg:ml-4">© 2023 Sulake Corporation Oy. Tous droits réservés. Habbo, Habbo Hotel, Sulake et leurs logos sont des marques déposées de Sulake Corporation Oy en Finlande et/ou dans d'autres pays.</p>       
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
