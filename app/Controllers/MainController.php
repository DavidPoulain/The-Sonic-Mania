<?php


class MainController extends CoreController
{
    // Page d'accueil
    public function home($params)
    {
        $characterModel = new Character();
        $character = $characterModel->findAll();
        // Notre tableau de données
        $data = [
            
            'page_title' => 'Bienvenue dans le monde de Sonic !',
            'characters' => $character,
        ];

        // On appelle la fonction show() pour la page demandée
        // Avec le tableau de données
        $this->show('home2', $data);        
    }

    // Page d'accueil
    public function creator($params)
    {
        $characterModel = new Character();
        $character = $characterModel->findAll();
        // Notre tableau de données
        $data = [
            
            'page_title' => 'Les créateurs de Sonic',
            'characters' => $character,
        ];

        // On appelle la fonction show() pour la page demandée
        // Avec le tableau de données
        $this->show('creator', $data);        
    }

}
