<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Habbo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100">
    <header class="bg-white border-b-2 border-gray-300">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <div class="flex items-center">
          <a href="index.html">
          <img src="https://habbofont.net/font/usva/xbbo.gif" alt="Logo Habbo" class="h-12">
          </a>
        </div>
        <div class="flex items-center">
          <a href="login.html" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-full mr-4">Se connecter</a>
          <a href="register.html" class="bg-purple-300 hover:bg-purple-400 text-gray-900 font-bold py-2 px-4 rounded-full">S'inscrire</a>
        </div>
      </div>
    </header> 
    <main class="max-w-7xl mx-auto my-10 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-center mb-10">Inscription</h1>
      <section class="bg-white rounded-lg shadow-lg p-6">
        <form>
          <div class="mb-1">
            <label for="username" class="block text-gray-700 font-bold mb-2">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" class="w-full border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Adresse e-mail</label>
            <input type="email" id="email" name="email" class="w-full border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4 inline-flex">
            <div class="mb-4">
              <label for="sexe" class="block text-gray-700 font-bold mb-2">Sexe</label>
              <select id="sexe" name="sexe">
                <option value="man">Homme</option>
                <option value="woman">Femme</option>
              </select>
            </div>
            <div class="mb-4 ml-10">
              <label for="birthdate" class="block text-gray-700 font-bold mb-2">Date de naissance</label>
              <input type="date" id="birthdate" name="birthdate">
            </div>
          </div>                          
          <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">Mot de passe</label>
            <input type="password" id="password" name="password" class="w-full border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirmer le mot de passe</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border rounded-lg py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">S'inscrire</button>
            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
              <div class="flex items-center">
                <img alt="File:Google &quot;G&quot; Logo.svg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/24px-Google_%22G%22_Logo.svg.png?20221203181234" decoding="async" width="24" height="24" srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/36px-Google_%22G%22_Logo.svg.png?20221203181234 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/48px-Google_%22G%22_Logo.svg.png?20221203181234 2x" data-file-width="24" data-file-height="24">
                <span class="ml-5">Se connecter avec Google</span>
              </div>
            </button>   
            <a href="#" class="inline-block align-baseline font-bold text-sm text blue-500 hover:text-blue-800">J'ai déjà un compte</a>
            </div>
        </form>
        </section>
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
    </body>
    </html>