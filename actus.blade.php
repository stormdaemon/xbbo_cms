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

    <main class="max-w-5xl mx-auto mt-20">
        <h1 class="text-3xl font-bold mb-5">Actualités</h1>
        
        <div class="grid grid-cols-3 gap-8">
        
          <!-- Actualité 1 -->
          <div class="bg-white shadow rounded-lg overflow-hidden">
            
            <div class="p-6">
              <h2 class="text-xl font-bold mb-2">Titre de l'actualité 1</h2>
              <p class="text-gray-700 mb-2">Contenu de l'actualité 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor lorem nec ex rhoncus suscipit. Nullam maximus velit et massa ultrices rhoncus.</p>
              <div class="flex justify-between items-center">
                <p class="text-gray-500 text-sm">Publié le 1er mars 2023 par John Doe</p>
                
              </div>
            </div>
          </div>
          
          <!-- Actualité 2 -->
          <div class="bg-white shadow rounded-lg overflow-hidden">
            
            <div class="p-6">
              <h2 class="text-xl font-bold mb-2">Titre de l'actualité 2</h2>
              <p class="text-gray-700 mb-2">Contenu de l'actualité 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor lorem nec ex rhoncus suscipit. Nullam maximus velit et massa ultrices rhoncus.</p>
              <div class="flex justify-between items-center">
                <p class="text-gray-500 text-sm">Publié le 28 février 2023 par Jane Smith</p>
                
              </div>
            </div>
          </div>
          
          <!-- Actualité 3 -->
          <div class="bg-white shadow rounded-lg overflow-hidden">
            
            <div class="p-6">
              <h2 class="text-xl font-bold mb-2">Titre de l'actualité 3</h2>
              <p class="text-gray-700 mb-2">Contenu de l'actualité 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor lorem nec ex rhoncus suscipit. Nullam maximus velit et massa ultrices rhoncus.</p>
              <div class="flex justify-between items-center">
                <p class="text-gray-500 text-sm">Publié le 25 février 2023 par Bob Johnson</p>
                
              </div>
            </div>
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
