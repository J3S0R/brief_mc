<?php
include_once __DIR__ . '/utilities/header.php'; 
$ingredients = allIngredients($db);
?>

<?php foreach ($ingredients as $row): ?>
<div class="p-3 d-flex">
  <div class="card" style="width: 18rem;">
    <img src="<?= $row['image'] ?>" class="card-img-top h-100" alt="<?= $row['nom'] ?>">
    <div class="card-body d-flex flex-column text-center">
      <h5 class="card-title"><?= $row['nom'] ?></h5>
      <a href="#?id=<?= $row['id'] ?>" class="btn btn-success d-flex justify-content-center w-50 m-auto">Voir les ingrédients</a>
    </div>
  </div>
</div>
<?php endforeach; ?>