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

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Boutique</h1>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- Contenu d'une carte -->
          <div class="bg-white shadow-md rounded-lg p-6">
            <img class="w-full h-56 object-cover object-center mb-4" src="https://i0.wp.com/images.habbo.com/c_images/reception/pixrem_promo.png" alt="item image">
            <h3 class="text-lg font-medium text-gray-900 mb-2">10.000 Pixels</h3>
            <p class="text-gray-700 mb-4">Ajoute des pixels à ton porte monnaie !</p>
            <p class="text-gray-900 font-medium mb-2">Prix : 3,50 € TTC</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Acheter</button>
          </div>
            <!-- Fin du contenu -->
          <div class="bg-white shadow-md rounded-lg p-6">
            <img class="w-full h-56 object-cover object-center mb-4" src="https://i.pinimg.com/736x/8d/ee/6d/8dee6deff47bde98e522fcc49740c054.jpg" alt="item image">
            <h3 class="text-lg font-medium text-gray-900 mb-2">Appartement complet</h3>
            <p class="text-gray-700 mb-4">Appartement réalisé par un architecte XBBO !</p>
            <p class="text-gray-900 font-medium mb-2">Prix : 10 € TTC</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Acheter</button>
          </div>
          <div class="bg-white shadow-md rounded-lg p-6">
            <img class="w-full h-56 object-cover object-center mb-4" src="https://pbs.twimg.com/media/E-SDRpKXoAEbJNp.jpg:large" alt="item image">
            <h3 class="text-lg font-medium text-gray-900 mb-2">10.000 Diamants</h3>
            <p class="text-gray-700 mb-4">Ajoute des diamants à ton porte monnaie !</p>
            <p class="text-gray-900 font-medium mb-2">Prix : 5,50 € TTC</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Acheter</button>
          </div>
          <div class="bg-white shadow-md rounded-lg p-6">
            <img class="w-full h-56 object-cover object-center mb-4" src="https://p29.zdusercontent.com/attachment/56308/eAHqlEh6WJrSPHP9rZ1hf4b8M?token=eyJhbGciOiJkaXIiLCJlbmMiOiJBMTI4Q0JDLUhTMjU2In0..07V9wa8N3apEBRs-Mj5vOA.watqSodFtQXaKeHfEglcKXw5YAcoMD6wk_OpiSt1CQXJJ0TqsmkES53m9tZ8F1uWCY13dRD4McQCrZsVELtnjkQ8AdooWcIcC7xfJV4OTsDB8zMDLDMjIauyy-2wUleVJtfooeoLsJ5oRFmlidIeGJ0t9sX3nzs9KNm1KSZVZnwBO0FSUIEdPMKi6hlcMs5N3771ZI6i65FV5YK_fOk1tHtunEDmgB1dxDdiOBoknegafiG-vGxcd_aRjU-rU-AVHU-Br88pNr1HvFwmU1SEWA.8j4MnkPbZi5J1fhsvwsU6A" alt="item image">
            <h3 class="text-lg font-medium text-gray-900 mb-2">Badge sur mesure</h3>
            <p class="text-gray-700 mb-4">Réaliser par un graphiste XBBO !</p>
            <p class="text-gray-900 font-medium mb-2">Prix : 5 € TTC</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Acheter</button>
          </div>
          </div>
          </main>
          <!-- Ajouter plus de cartes -->
      

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
