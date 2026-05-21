# Réponses à l'évaluation Mini Blog

## Question 1 — Layouts Blade

1. `@yield('title')` est une zone vide si non définie. `@yield('title', 'Valeur par défaut')` affiche 'Valeur par défaut' si aucune valeur n'est donnée par la vue enfant.
2. `@extends` permet d'avoir une structure centrale modifiable en un seul endroit, contrairement à l'inclusion manuelle qui force à répéter le code.
3. En utilisant des dossiers distincts (ex: `layouts/public` et `layouts/admin`) et en s'assurant que les vues du dashboard étendent spécifiquement le layout `dashboard.blade.php`.

## Question 3 — Assets & Composants du dashboard

1. On utilise : `<a class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="...">Lien</a>`.
2. Pour mieux organiser les fichiers et éviter de polluer le dossier `components` principal quand le nombre de composants augmente.

## Question 4 — Création des routes

1. `GET` sert à récupérer des données (affichage), `POST` sert à envoyer des données (soumission de formulaire).
2. `Route::get('/url', ...)->name('nom');`. Ils permettent d'utiliser `route('nom')` dans les vues : si l'URL change dans `web.php`, tous les liens se mettent à jour automatiquement.
3. C'est une variable dans l'URL. On le récupère en argument dans la méthode du contrôleur : `public function show($id) { ... }`.
4. Laravel les traite comme deux routes distinctes. `GET` affichera la page, `POST` traitera le formulaire.

## Question 5 — Groupement des routes du dashboard

1. 
   ```php
   Route::prefix('dashboard')->name('dashboard.')->group(function () {
       // ...
   });
   ```
2. `prefix()` modifie l'URL, `middleware()` protège l'accès (ex: vérification que l'utilisateur est admin).
3. C'est un raccourci pour déclarer les 7 routes RESTful (index, create, store, show, edit, update, destroy). Utile pour `Post`, `Category`, `User`.

## Question 6 — Création des contrôleurs

1. `php artisan make:controller NomController`. Pour un contrôleur de ressource : `php artisan make:controller NomController --resource`.
2. `index` (liste), `create` (formulaire création), `store` (sauvegarde), `show` (détail), `edit` (formulaire modif), `update` (mise à jour), `destroy` (suppression).
3. Ce sont trois façons équivalentes d'envoyer des données. `compact` est le plus élégant, `with` est très lisible, le tableau est la base.
