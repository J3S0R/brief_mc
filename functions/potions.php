<?php 
function allPotions($db) {
    $sql = 'SELECT * FROM potions';
    $requete = $db->query($sql);
    $potions = $requete->fetchAll();
    return $potions;
};