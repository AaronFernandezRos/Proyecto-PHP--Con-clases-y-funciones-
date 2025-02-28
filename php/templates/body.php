<body>
    <div class="container movie-container">
        <img src="<?= $data["poster_url"] ?>" alt="<?= $data["title"] ?>" class="movie-image">
        <h1 class="mt-4"><?= $data["type"] ?></h1>
        <h2 class="mt-4"><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días </h2>
        <h2 class="fs-5">Fecha de estreno: <strong><?= $data["release_date"] ?></strong></h2>
        <p class="fs-5 text" w-75 mx-auto><?= $data["overview"] ?></p><br>
        <img src="<?= $data["following_production"]["poster_url"] ?>" alt="<?= $data["title"] ?>" class="movie-image">
        <h1 class="mt-4"><?= $data["following_production"]["type"] ?></h1>
        <h2 class="mt-4"><?= $data["following_production"]["title"] ?> se estrena en <?= $data["following_production"]["days_until"] ?> días </h2>
        <h2 class="fs-5">Fecha de estreno: <strong><?= $data["following_production"]["release_date"] ?></strong></h2>
        <p class="fs-5 text"><?= $data["following_production"]["overview"] ?></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>