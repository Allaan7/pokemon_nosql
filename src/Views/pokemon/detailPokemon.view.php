<?php
require_once(__DIR__ . "/../partials/head.php");
var_dump($pokemon);
?>

<h1>Détails du pokémon</h1>


<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $pokemon->getName() ?></h5>
        <p class="card-text"><?= $pokemon->getType() ?></p>
        <p class="card-text"><?= $pokemon->getLevel() ?></p>
        <p class="card-text">description</p>
        <p class="card-text"><?= $pokemon->getDescription() ?></p>
    </div>
</div>
<?php
require_once(__DIR__ . "/../partials/footer.php");
?>