<?php
include_once __DIR__ . '/utilities/header.php'; 
// Cette ligne appelle la fonction allPotions() pour récupérer toutes les potions à partir de la base de données. La fonction prend en paramètre une connexion PDO à la base de données.
$potions = allPotions($db);
?>

<?php foreach ($potions as $row): ?>
<div class="p-3 d-flex">
  <div class="card" style="width: 18rem;">
    <img src="<?= $row['image'] ?>" class="card-img-top h-100" alt="<?= $row['nom'] ?>">
    <div class="card-body d-flex flex-column text-center">
      <h5 class="card-title"><?= $row['nom'] ?></h5>
      <p class="card-title"><?= $row['effet'] ?></p>
      <p class="card-title"><?='durée : ' . $row['duree'] . ' minutes' ?></p>
      <a href="potion_details.php?potion_id=<?= $row['id'] ?>" class="btn btn-success">Voir les ingrédients</a>
    </div>
  </div>
</div>
<?php endforeach; ?>
