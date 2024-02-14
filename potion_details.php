<?php
// Inclure le fichier d'en-tête de l'application
include_once __DIR__ . '/utilities/header.php';

// Vérifier si l'ID de la potion est défini dans les paramètres GET
if (isset($_GET['potion_id'])) {
    // Récupérer l'ID de la potion à partir des paramètres GET
    $potion_id = $_GET['potion_id'];

    try {
        // Requête SQL pour récupérer les ingrédients associés à la potion spécifique
        $sql = "SELECT i.* FROM ingredients i 
                INNER JOIN potion_ingredients pi ON i.id = pi.ingredient_id
                WHERE pi.potion_id = :potion_id";
        // Préparation de la requête SQL avec PDO
        $stmt = $db->prepare($sql);
        // Liaison des paramètres pour éviter les injections SQL
        $stmt->bindParam(':potion_id', $potion_id);
        // Exécution de la requête SQL
        $stmt->execute();
        // Récupération des résultats de la requête sous forme d'un tableau associatif
        $ingredients = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Affichage des ingrédients associés à la potion
        echo "<h1>Ingrédients nécessaires pour la potion :</h1>";
        echo "<ul>";
        foreach ($ingredients as $ingredient) {
            echo "<li>{$ingredient['nom']}</li>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        // Gestion des erreurs en cas d'échec de la requête SQL
        echo "Erreur : " . $e->getMessage();
    }
} else {
    // Si aucun ID de potion n'est spécifié dans les paramètres GET, afficher un message d'erreur
    echo "Aucune potion sélectionnée.";
}
?>
