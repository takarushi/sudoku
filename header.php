<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
$path_parts = pathinfo(__FILE__);
$page = $path_parts['filename'];// Get the page name
$page = ! empty($page) ? $page : 'index'; // if no page name, set it to `index`
$backgrounds = array(); // define array of background colors.
$backgrounds['sumar,php'] = '#ffaa00'; //assign colors for pages.
$backgrounds['resta.php'] = '#ffaa00';
$backgrounds['multiplica.php'] = '#ffaa00';
$backgrounds['division.php'] = '#ffaa00';
$backgrounds['mixta.php'] = '#ffaa00';
$background = ! empty($backgrounds[$page]) ? $backgrounds[$page] : ''; // get respective color for the page.
?>
    <link rel="stylesheet" href="estilo_header.css">
    <title>Document</title>

</head>

<header class="header">
    <div class="logo-header">
        <img src="logo.jpg" alt="" width="50px">
    </div>
    <nav class="menu">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="sumar.php">Adicción</a></li>
        <li><a href="resta.php">Sustracción</a></li>
        <li><a href="multiplica.php">Multiplicación</a></li>
        <li><a href="division.php">División</a></li>
        <li><a href="mixta.php">Mixto</a></li>
    </ul>
    </nav>
    <body>
</body>
</html>