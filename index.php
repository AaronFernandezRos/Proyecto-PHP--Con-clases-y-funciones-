<?php
// Aquí va el código php

require_once 'php/script/render.php';
require_once 'php/classes/ApiClient.php';
require_once 'php/classes/Nextmovie.php';

$ApiClient = new ApiClient('https://whenisthenextmcufilm.com/api');
$data1 = $ApiClient->fetchData();

$nueva_pelicula = new NextMovie($data1);
?>
<!doctype html>
<html lang="en">
<?php render_template("head", $data = []) ?>
<!-- <?php render_template("banner", $data = []) ?> -->
<?php render_template("body", $nueva_pelicula-> getData()) ?>

<!-- <?php render_template("banner", $data = []) ?> -->

</html>

