<?php foreach ($games as $game) : ?>

    <div class="game">
        <div class="image">
            <img src="<?= $game->image_url ?>" />
        </div>
        <div class="info">
            <h2 class="name"><?= $game->name ?></h2>
            <div class="release">Released at: <?= $game->released_at ?></div>
            <div class="description">
                <?= $game->description ?>
            </div>
            <div class="rating"><?= $game->rating ?>%</div>
        </div>
    </div>

<?php endforeach; ?>