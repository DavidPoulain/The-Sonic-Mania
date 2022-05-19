<?php

// Point d'entrée unique => FrontController

// On inclut l'autoload de Composer
// (va permettre d'utiliser les librairies installées avec `composer require`)
require __DIR__ . '/../vendor/autoload.php';

// Inclusion de nos classes
// Nos contrôleurs
require_once __DIR__ . '/../app/Controllers/CoreController.php';
require_once __DIR__ . '/../app/Controllers/MainController.php';
require_once __DIR__ . '/../app/Controllers/ErrorController.php';
// Nos modèles
require_once __DIR__ . '/../app/Models/CoreModel.php';
require_once __DIR__ . '/../app/Models/Character.php';
require_once __DIR__ . '/../app/Models/Type.php';
// Les "outils"
require_once __DIR__ . '/../app/Utils/Database.php';

// On instancie AltoRouter
// @link altorouter.com
$router = new AltoRouter();

// On doit indiquer à AltoRouter si on travaille dans un sous-dossier

// Le chemin de base, se trouve être le dossier parent du fichier index.php
// accessible depuis la super-globale PHP $_SERVER (infos liées au serveur et à PHP)
// /!\ Pas d'espaces ni d'accents dans le nom du dossier
$publicFolder = dirname($_SERVER['SCRIPT_NAME']);

$router->setBasePath($publicFolder);

// On map nos routes

// Home
$router->map(
    // La méthode HTTP
    'GET',
    // Route/motif de l'URL (après /public)
    '/',
    // Destination
    [
        'controller' => 'MainController',
        'method' => 'home',
    ],
    // Nom de la route (pour référence interne à Altorouter)
    'main_home'
);

$router->map(
    // La méthode HTTP
    'GET',
    // Route/motif de l'URL (après /public)
    '/creator',
    // Destination
    [
        'controller' => 'MainController',
        'method' => 'creator',
    ],
    // Nom de la route (pour référence interne à Altorouter)
    'main_creator'
);


// Y'a-t-il une correspondance ? (entre la requête et nos routes)
$match = $router->match();

// dump($match);

// Dispatcher (on appelle la destination demandée)

// Si une correspondance est trouvée ($match !== false)
if($match) {

    $controllerName = $match['target']['controller'];
    $methodName = $match['target']['method'];

    // Instanciation de la classe MainController
    // Dynamiquement...
    $controller = new $controllerName();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    // /!\ On appelle la méthode qui correspond au contenu de la variable $methodName
    // /!\ On en profite pour transmettre les paramètres d'URL reçus d'AltoRouter
    $controller->$methodName($match['params']);

} else {

    $controller = new ErrorController();
    $controller->error404();

}
