<body>
    <main>
        <section class="section__main section__main--characters">
            <h2 class="title title__secondary">Les personnages</h2>
            <?php foreach ($viewData['characters'] as $oneCharacter) : ?>
                <div class = "containeur">
                    <article class = "articlePerso">
                        <figure>
                            <img class = "articlePerso__image" src="<?= $absoluteUrl . '/assets/images/' . $oneCharacter->getPicture(); ?>" alt="character picture">
                            <figcaption class = "articlePerso__nom"><?= $oneCharacter->getName() ?></figcaption>
                        </figure>
                        <p class = "articlePerso__desciption"><?= $oneCharacter->getDescription() ?></p>
                    </article>
                </div>
            <?php endforeach; ?>
        </section>
    </main>