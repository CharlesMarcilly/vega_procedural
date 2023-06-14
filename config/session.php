<?php

// Récupération de la durée de vie de la session souhaité en seconde
$sessionLifeTime = $_ENV['SESSION_LIFETIME'] * 60;

// Modification de la valeur dans le fichier de configuration prévu par PHP
ini_set("session.gc_maxlifetime",$sessionLifeTime);

// Modification du cookie de session
session_set_cookie_params("$sessionLifeTime");

// Activation de l'utilisation des sessions
session_start();


// echo ini_get("session.gc_maxlifetime") / 60;

?>