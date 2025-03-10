<main>
    <section>
        <img src="<?= $poster_url; ?>" width=" 450" alt="Poster de <?= $title ?>"
        style="border-radius: 16px" />
    </section>

    <hgroup>
        <h3>MADE BY Cristian Calambás Santa</h3>
        <h3><?= $title ?>se entrena en <?= $until_message; ?></h3>
        <p>Fecha de Estreno: <?= $release_date; ?></p>
        <p>La siguiente es: <?= $following_production; ?></p>
    </hgroup>
</main>