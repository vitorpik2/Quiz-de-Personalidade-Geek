<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz de Gênero de Game</title>

    <link rel="stylesheet" href="style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="container">

<h1>
<i class="fa-solid fa-gamepad"></i>
Qual é o seu Gênero de Game Favorito?
</h1>

<p class="descricao">

Responda o quiz e descubra qual é o seu gênero de game perfeito baseado nas suas preferências e personalidade!

</p>

<?php

if(isset($_COOKIE['jogador']))
{
    echo "<div class='welcome-message'>";
    echo "<p><i class='fa-solid fa-hand'></i> Bem-vindo de volta, <strong>".$_COOKIE['jogador']."</strong>!</p>";
    echo "<p>Pronto para jogar novamente?</p>";
    echo "</div>";
}

?>

<a href="quiz.php" class="btn-inicio">

<i class="fa-solid fa-rocket"></i>
Começar Quiz

</a>

</div>

</body>
</html>