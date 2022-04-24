<?php


Class CoreController 
{
    protected function show($viewName, $viewData = [])
    {
        // On récupère la variable $router qui se trouve au niveau "global" de PHP
        // Donc le $router d'index.php
        // @todo : trouver mieux
        global $router;

        // Dans tous ces fichiers requis ci-dessous, $viewData est accessible

        // Le préfixe URL absolu pour le dossier public (assets)
        $absoluteUrl = dirname($_SERVER['SCRIPT_NAME']);


        // Inclusion header
        require_once __DIR__ . "/../views/header.tpl.php";

        // On inclut le template dynamiquement
        // Avec son chemin complet (chemin absolu)

        require_once __DIR__ . "/../views/{$viewName}.tpl.php";
        // Equivaut à
        // require_once __DIR__ . '/views/' . $page . '.tpl.php';

        // Inclusion header
        require_once __DIR__ . "/../views/footer.tpl.php";
    }
}