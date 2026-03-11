<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Quiz</title>
    <link rel="stylesheet" href="style.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<div class="container resultado-container">
        
<?php

// ========== RECEBENDO OS DADOS DO FORMULÁRIO ==========

$nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'Jogador';

$p1 = $_POST['p1'] ?? '';
$p2 = $_POST['p2'] ?? '';
$p3 = $_POST['p3'] ?? '';
$p4 = $_POST['p4'] ?? '';
$p5 = $_POST['p5'] ?? '';
$p6 = $_POST['p6'] ?? '';
$p7 = $_POST['p7'] ?? '';
$p8 = $_POST['p8'] ?? '';
$p9 = $_POST['p9'] ?? '';
$p10 = $_POST['p10'] ?? '';


// ========== CONTANDO QUANTAS VEZES O QUIZ FOI JOGADO ==========

$contagemJogos = 1;

if(isset($_COOKIE['contador_quiz']))
{
    $contagemJogos = (int)$_COOKIE['contador_quiz'] + 1;
}

setcookie("contador_quiz", $contagemJogos, time() + (365*24*60*60), "/");


// ========== CONTADOR DE PONTOS ==========

$pontos = array(
    "rpg" => 0,
    "fps" => 0,
    "puzzle" => 0,
    "sports" => 0,
    "strategy" => 0
);


// ========== SOMANDO OS PONTOS ==========

$respostas = [$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10];

foreach($respostas as $r)
{
    if(isset($pontos[$r]))
    {
        $pontos[$r]++;
    }
}


// ========== DESCOBRIR GÊNERO VENCEDOR ==========

$generoVencedor = array_key_first($pontos);
$maiorPontuacao = $pontos[$generoVencedor];

foreach($pontos as $genero => $ponto)
{
    if($ponto > $maiorPontuacao)
    {
        $maiorPontuacao = $ponto;
        $generoVencedor = $genero;
    }
}


// ========== PERFIS ==========

$perfilInfo = array(

    "rpg" => array(
        "titulo" => "RPG - O Aventureiro",
        "icone" => "<i class='fa-solid fa-hat-wizard'></i>",
        "descricao" => "Você é um explorador de mundos imersivos! Ama histórias épicas e aventuras memoráveis.",
        "cores" => "#8b5a8e"
    ),

    "fps" => array(
        "titulo" => "FPS - O Atirador",
        "icone" => "<i class='fa-solid fa-crosshairs'></i>",
        "descricao" => "Adrenalina pura! Reflexos rápidos e combate intenso fazem parte do seu estilo.",
        "cores" => "#d32f2f"
    ),

    "puzzle" => array(
        "titulo" => "Puzzle - O Estrategista",
        "icone" => "<i class='fa-solid fa-puzzle-piece'></i>",
        "descricao" => "Desafios mentais e lógica são seu território favorito.",
        "cores" => "#1976d2"
    ),

    "sports" => array(
        "titulo" => "Sports - O Campeão",
        "icone" => "<i class='fa-solid fa-futbol'></i>",
        "descricao" => "Competição, ranking e vitória são o que te motivam.",
        "cores" => "#f57c00"
    ),

    "strategy" => array(
        "titulo" => "Strategy - O General",
        "icone" => "<i class='fa-solid fa-chess'></i>",
        "descricao" => "Planejamento e tática são suas maiores armas.",
        "cores" => "#388e3c"
    )

);


// ========== SALVAR NOME EM COOKIE ==========

setcookie("jogador", $nome, time() + (30*24*60*60), "/");

$perfilAtual = $perfilInfo[$generoVencedor];

?>


<div class="resultado">

<h1>
<i class="fa-solid fa-gamepad"></i>
Resultado do Quiz
</h1>


<div class="info-jogador">

<p>Jogador: <strong><?php echo $nome; ?></strong></p>

<p>Pontuação Final: <strong><?php echo $maiorPontuacao; ?>/10</strong></p>

<p>Vezes que jogou: <strong><?php echo $contagemJogos; ?></strong></p>

</div>


<div class="perfil-resultado">

<h2>
<?php echo $perfilAtual["icone"]; ?>
<?php echo $perfilAtual["titulo"]; ?>
</h2>

<p class="descricao-perfil">
<?php echo $perfilAtual["descricao"]; ?>
</p>

</div>


<!-- RANKING -->

<div class="ranking">

<h3>
<i class="fa-solid fa-chart-column"></i>
Seu Ranking
</h3>

<table class="tabela-ranking">

<thead>

<tr>
<th>Gênero</th>
<th>Pontos</th>
<th>Compatibilidade</th>
</tr>

</thead>

<tbody>

<?php

arsort($pontos);

foreach($pontos as $genero => $ponto)
{

$info = $perfilInfo[$genero];

$percentual = ($ponto/10)*100;

echo "<tr>";

echo "<td>".$info["icone"]." ".$info["titulo"]."</td>";

echo "<td>".$ponto."/10</td>";

echo "<td>

<div class='barra-progresso'>

<div class='progresso' style='width:".$percentual."%'></div>

</div>

</td>";

echo "</tr>";

}

?>

</tbody>

</table>

</div>


<!-- BOTÕES -->

<div class="botoes-acao">

<a href="quiz.php" class="btn-jogar-novamente">

<i class="fa-solid fa-rotate-right"></i>
Jogar Novamente

</a>

<a href="index.php" class="btn-voltar">

<i class="fa-solid fa-house"></i>
Voltar ao Início

</a>

</div>

</div>

</div>

</body>
</html>