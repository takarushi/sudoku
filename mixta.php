<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudoku Matemático</title>
    <link rel="stylesheet" href="estilo_multi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <?php include "header.php"; ?>
</header>
<body>
    <br>
    <div class="container">
    <h1>Ejercicios Mixtos</h1>
    <table>
        <tr>
            <td class="contiene">9</td>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="contiene">7</td>
            <td class="contiene">=</td>
            <td class="contiene">13</td>
            <td class="contiene">72</td>
            <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        </tr>
        <tr>
            <td class="contiene">*</td>
            <td class="contiene">24</td>
            <td class="contiene">/</td>
            <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">3</td>
            <td class="contiene">/</td>
            <td class="contiene">*</td>
        </tr>
        <tr>
            <td class="no-contiene" id="5" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="no-contiene" id="6" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">52</td>
        </tr>
        <tr>
            <td class="contiene">=</td>
            <td class="contiene">7</td>
            <td class="contiene">*</td>
            <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">42</td>
            <td class="contiene">=</td>
            <td class="contiene">=</td>
        </tr>
        <tr>
            <td class="contiene">81</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="contiene">6</td>
            <td class="contiene">86</td>
        </tr>
        <tr>
            <td></td>
            <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="contiene">12</td>
            <td class="contiene">=</td>
            <td class="contiene">34</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
            <td class="contiene">.</td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        <td class="contiene">25</td>
        <td class="contiene">+</td>
        <td class="no-contiene" id="7" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="contiene">=</td>
        <td class="contiene">86</td>
        </tr>
    </table>
    <br>
        <div class="container-alternatives">
            <div class="box" draggable="true" ondragstart="drag(event)" id="a">20</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="b">34</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="c">8</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="d">6</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="e">46</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="f">9</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="g">12</div>
            <div class="box" draggable="true" ondragstart="drag(event)" id="h">64</div>
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
<script src="mixto.js"></script>
<script src="time.js"></script>
</body>
</html>
