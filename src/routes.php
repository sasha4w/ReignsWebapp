<?php

declare(strict_types=1);
/*
-------------------------------------------------------------------------------
les routes
-------------------------------------------------------------------------------
 */

return [



    
    ['GET', '/', '@accueil'],
    // Administrateur  
    // ['GET', '/administrateurs/effacer/{id:\d+}', 'administrateur@delete'],
    // afficher le formulaire d'ajout d'un nouvel adiministrateur
    // ['GET', '/adiministrateurs/ajouter', 'administrateur@create'],
    // enregistrer les données soumises d'un nouvel adiministrateur
    // ['POST', '/adiministrateurs/ajouter', 'administrateur@create'],
    
    ['GET', '/administrateurs', 'administrateur@index'],
    // afficher le formulaire de connexion d'un administrateur
    ['GET', '/administrateurs/connexion', 'administrateur@login'],
    // enregistrer les données soumises d'un nouveau administrateur
    ['POST', '/administrateurs/connexion', 'administrateur@login'],
    // déconnecter l'administrateur
    ['GET', '/administrateurs/deconnexion', 'administrateur@logout'],

    // Créateur  
    ['GET', '/createurs', 'createur@index'],
    // ['GET', '/createurs/effacer/{id:\d+}', 'createur@delete'],
    // afficher le formulaire d'ajout d'un nouveau createur
    ['GET', '/createurs/ajouter', 'createur@create'],
    // enregistrer les données soumises d'un nouveau createur
    ['POST', '/createurs/ajouter', 'createur@create'],

    // afficher le formulaire de connexion d'un createur
    ['GET', '/createurs/connexion', 'createur@login'],
    // enregistrer les données soumises d'un nouveau createur
    ['POST', '/createurs/connexion', 'createur@login'],
    // déconnecter le créateur
    ['GET', '/createurs/deconnexion', 'createur@logout'],
    
    // Carte  
    ['GET', '/cartes', 'carte@index'],
    ['GET', '/cartes/effacer/{id:\d+}', 'carte@delete'],
    // afficher le formulaire d'ajout d'une nouvelle carte
    ['GET', '/cartes/ajouter/{deckId}/', 'carte@create'],
    // enregistrer les données soumises d'une nouvelle carte
    ['POST', '/cartes/ajouter/{deckId}/', 'carte@create'],

    // Deck  
    ['GET', '/decks', 'deck@index'],
    ['GET', '/decks/effacer/{id:\d+}', 'deck@delete'],
    // afficher le formulaire d'ajout d'un nouveau deck
    ['GET', '/decks/ajouter', 'deck@create'],
    // enregistrer les données soumises d'un nouveau deck
    ['POST', '/decks/ajouter', 'deck@create'],




    /////////////////////////////////////////////////////

    

];
