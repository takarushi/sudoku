<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudoku Matemático</title>
    <link rel="stylesheet" href="estilo_resta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <?php include "header.php"; ?>
</header>
<body>
<br>
    <div class="container">
    <h1>Sustracción</h1>
    <table>
        <tr>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="contiene">4</td>
            <td class="contiene">=</td>
            <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">-</td>
            <td></td>
            <td class="contiene">-</td>
            <td></td>
            <td class="contiene">-</td>
        </tr>
        <tr>
            <td class="contiene">6</td>
            <td class="contiene">-</td>
            <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">-3</td>
        </tr>
        <tr>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
        </tr>
        <tr>
            <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="contiene">-5</td>
            <td class="contiene">=</td>
            <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
    </table>
    <br>
        <div class="container-alternatives">
            <div class="box" draggable="true" ondragstart="drag(event)" id="a">13</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="b">9</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="c">8</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="d">14</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="e">10</div>
    </div>
    <br>
    <div class="frame">
        <div class="time" id="time">00:00:00.000</div>
        <div class="button-container">
            <div class="btn" onclick="start()">
            <i class="fas fa-play"></i>
            </div>
            <div class="btn" onclick="pause()">
            <i class="fas fa-pause"></i>
            </div>
            <div class="btn" onclick="restart()">
            <i class="fas fa-undo-alt"></i>
            </div>
        </div>
    </div>
    <br>
    <div class="resultado">
    <h2>Resuelve el sudoku y verás aqui el resultado</h2>
    </div>
</div>
<script src="resta.js"></script>
<script src="time.js"></script>
</body>
</html>