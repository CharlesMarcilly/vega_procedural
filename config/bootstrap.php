<?php
/**
 * ---------------------------------------------------
 *                       Amorçage de l'application
 * ---------------------------------------------------
 * 
 * L'amorçage fait référence au processus de préparation de l'environnement avant qu'une application ne démarre, pour résoudre et traiter une requête d'entrée. L'amorçage se fait en deux endroits : le script d'entrée et l'application.
 * 
 * Ses rôles : 
 * - Charger les variables d'environnement
 * - Charger la configuration session
 * - Charger le monolog (les logs)
 * ----------------------------------------------------------------
 ** Chargement et traîtement des variables d'environnement*/


 // * - Charger les (raccourcis) constantes
require __DIR__ . "/constants.php";


require CONFIG . "/environment.php";

// * - Charger la configuration système
require CONFIG . "/system.php";

// * - Charger la configuration session
require CONFIG . "/session.php";

// Chargement du monolog
require CONFIG ."/monolog.php";

?>