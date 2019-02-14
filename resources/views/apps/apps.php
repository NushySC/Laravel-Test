<h1>Top rated apps</h1>

<ul class="apps">
    <?php foreach ($george as $app) : ?>

        <li class="app">

            <div class="title"><?= $app->title ?></div>

            <div class="category"><?= $app->category_name ?></div>

            <div class="genres">
                <?php if (isset($genres[$app->id])) : // if there are any genres for this app ?>

                    <?php foreach ($genres[$app->id] as $genre_id => $genre_name) : // loop through them ?>

                        <div class="genre"><?= $genre_name // print their names ?></div>

                    <?php endforeach; ?>

                <?php endif; ?>
            </div>

            <div class="rating">Rating: <?= (float)$app->rating ?> / 5</div>

            <div class="reviews">Reviews: <?= number_format($app->reviews, 0, '.', ' ') ?></div>

            <div class="installs">Installed <?= number_format($app->installs, 0, '.', ' ') ?>+ times</div>

            <div class="size">Size: <?= $app->size / 1000000 ?> MB</div>

            <div class="price">Price: <?= $app->price ? '$ '.$app->price : 'Free'; ?></div>

            <div class="content-rating">
                The application is recommended for <?= $app->content_rating ?>
            </div>

        </li>

    <?php endforeach; ?>
</ul>