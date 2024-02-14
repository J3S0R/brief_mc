<?php
// Inclure les fichiers de fonctions et de configuration
require_once dirname(__DIR__) . '/functions/pdo.php'; // Inclut les fonctions liées à la base de données PDO
require_once dirname(__DIR__) . '/functions/potions.php'; // Inclut les fonctions liées aux potions
require_once dirname(__DIR__) . '/functions/ingredients.php'; // Inclut les fonctions liées aux ingrédients
require_once dirname(__DIR__) . '/config/config.php'; // Inclut les configurations de la base de données
// Établir une connexion à la base de données en utilisant les informations de configuration
$db = getPDOlink($config);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-nav">
        <a class="nav-link" href="index.php">Potions</a> <!-- Lien vers la page des potions -->
        <a class="nav-link" href="ingredients.php">Ingrédients</a> <!-- Lien vers la page des ingrédients -->
      </div>
      <a class="navbar-brand mx-auto" href="#">
        <img src="assets/img/15-2-minecraft-logo-png.png" alt="Logo" width="120">
      </a>
      <div class="navbar-nav">
        <button type="button" class="btn btn-success">Se connecter</button> <!-- Bouton pour se connecter -->
      </div>
    </div>
  </nav>
