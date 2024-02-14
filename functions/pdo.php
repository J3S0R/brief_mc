<?php 
// Définition de la fonction getPDOlink qui permet d'établir une connexion à la base de données
function getPDOlink($config){
    // Construction de la chaîne de connexion PDO en utilisant les informations de configuration
    $dsn = "mysql:dbname={$config['dbname']};host={$config['dbhost']};port={$config['dbport']}";

    try {
        // Tentative de connexion à la base de données en utilisant PDO
        $db = new PDO($dsn, $config['dbuser'], $config['dbpass']);
        // Configuration de l'encodage des caractères à UTF-8 pour la connexion
        $db->exec("SET NAMES UTF8");
        // Configuration du mode de récupération des données par défaut à FETCH_ASSOC (tableaux associatifs)
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // Retourne l'objet PDO représentant la connexion établie
        return $db;
    } catch (PDOException $e){
        // En cas d'erreur de connexion, affiche un message d'erreur et quitte le script
        exit ('Erreur de connexion : ' . $e->getMessage());
    }
}
?>
