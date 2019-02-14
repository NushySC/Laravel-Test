<?php if (Session::has('success_message')) : ?>
    <div class="alert alert-success">
        <?= Session::get('success_message') ?>
    </div>
<?php endif; ?>

<form action="" method="post">

    <?= csrf_field() ?>

    <label for="name">Name</label><br>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($game['name']) ?>">
    <br><br>

    <label for="image_url">Image URL</label><br>
    <input type="text" name="image_url" id="image_url" value="<?= htmlspecialchars($game['image_url']) ?>">
    <br><br>

    <label for="description">Description</label><br>
    <textarea name="description" id="description" cols="30" rows="10"><?= htmlspecialchars($game['description']) ?></textarea>
    <br><br>

    <label for="rating">Rating</label><br>
    <input type="text" name="rating" id="rating" value="<?= htmlspecialchars($game['rating']) ?>">
    <br><br>

    <label for="released_at">Released at</label><br>
    <input type="text" name="released_at" id="released_at" value="<?= htmlspecialchars($game['released_at']) ?>">
    <br><br>

    <input type="submit" value="Save">

</form>
