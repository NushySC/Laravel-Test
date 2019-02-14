<?php foreach ($countries as $country) : ?>

    <div class="country">
        <h3><?= $country->Name ?></h3>
        <div class="data">
            <label for="">Area:</label>
            <?= $country->SurfaceArea ?>
        </div>
    </div>

<?php endforeach; ?>