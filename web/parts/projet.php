<div class="fond1">
    <div class="cadre">
        <div class="slider-for">
            <?php foreach($sites as $site => $value): ?>
            <div class="description ">
                <p>
                    <?= $value['description']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
    <div class="gdeimg">

        <div class="slider-for">
            <?php foreach($sites as $site => $value): ?>
            <div class="imgtaille ">
                <img src="web/img/<?= $value['img_site']; ?>" alt="image des différents sites">
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<div class="fond2">
    <div class="img slider-nav">

        <?php foreach($sites as $site => $value): ?>
        <div class="imgsite ">
            <img src="web/img/<?= $value['img_site']; ?>" alt="image des différents sites">
        </div>
        <?php endforeach; ?>

    </div>
</div>