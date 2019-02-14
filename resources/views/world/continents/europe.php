
<h1>Countries of Europe</h1>

<ul>
    <?php foreach ($countries as $country) : ?>

        <li>
            <?php echo $country->Name; ?>
        </li>

    <?php endforeach; ?>
</ul>