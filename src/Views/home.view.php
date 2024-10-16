<?php
require_once(__DIR__ . "/partials/head.php");
?>
<h1>Bienvenue</h1>

<?php 
if(!empty($allpokemons)){
    foreach($allpokemons as $pokemon){

        ?>
            <form method="POST">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $pokemon->getName() ?></h5>
                        <p class="card-text"><?= $pokemon->getType() ?></p>
                        <p class="card-text"><?= $pokemon->getLevel() ?></p>
                        <p class="card-text">description</p>
                        <p class="card-text"><?= $pokemon->getDescription() ?></p>
                        <a href="/details?id=<?= $pokemon->getId() ?>">Voir Détails</a>
                    </div>
                </div>
            </form>
        <?php 
    }        
}
?>

<?php
require_once(__DIR__ . "/partials/footer.php");
?>