<?php 
function allIngredients($db) {
    $sql = 'SELECT * FROM ingredients';
    $requete = $db->query($sql);
    $ingredients = $requete->fetchAll();
    return $ingredients;
};