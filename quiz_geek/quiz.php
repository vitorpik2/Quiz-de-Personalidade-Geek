<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Qual seu Gênero de Game</title>
    <link rel="stylesheet" href="style.css">
    
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <div class="container">  
    <h1><i class="fa-solid fa-gamepad"></i> Descubra seu Gênero de Game</h1>
        <p class="progress">Pergunta 1 de 10</p>

        <form method="POST" action="resultado.php" class="quiz-form">
            
            <!-- Campo obrigatório: Nome do jogador -->
            <div class="form-group">
                <label for="nome">Seu Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>

            <!-- Pergunta 1 -->
            <div class="pergunta">
                <h2>Pergunta 1/10</h2>
                <p><strong>Qual tipo de gameplay você prefere?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p1" value="rpg" required>
                        <span> Contar histórias épicas e desenvolver personagens</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p1" value="fps">
                        <span> Ação rápida e reflexos aguçados</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p1" value="puzzle">
                        <span> Resolver quebra-cabeças e pensar estrategicamente</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p1" value="sports">
                        <span> Competição e desempenho athletic</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p1" value="strategy">
                        <span> Planejar e dominar adversários com tática</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="pergunta">
                <h2>Pergunta 2/10</h2>
                <p><strong>Quanto tempo você prefere gastar em um jogo?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p2" value="rpg" required>
                        <span> Longas sessões de 50+ horas</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p2" value="fps">
                        <span> Partidas rápidas de 10-30 minutos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p2" value="puzzle">
                        <span> Sessões moderadas de 30-60 minutos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p2" value="sports">
                        <span> Partidas curtas de 15-20 minutos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p2" value="strategy">
                        <span> Sem limite de tempo, quanto mais melhor!</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="pergunta">
                <h2>Pergunta 3/10</h2>
                <p><strong>Como você prefere jogar?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p3" value="rpg" required>
                        <span> Sozinho, imerso na história</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p3" value="fps">
                        <span> Multiplayer competitivo contra outros</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p3" value="puzzle">
                        <span> Desafios cognitivos contra si mesmo</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p3" value="sports">
                        <span> Competição em tempo real com amigos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p3" value="strategy">
                        <span> Batalhando contra IA inteligente</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 4 -->
            <div class="pergunta">
                <h2>Pergunta 4/10</h2>
                <p><strong>O que te motiva a jogar?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p4" value="rpg" required>
                        <span> Explorar mundos e conhecer histórias</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p4" value="fps">
                        <span> Vencer e ser o melhor jogador</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p4" value="puzzle">
                        <span> Encontrar soluções criativas</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p4" value="sports">
                        <span> Ganhar troféus e campeonatos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p4" value="strategy">
                        <span> Expandir impérios e conquistar</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 5 -->
            <div class="pergunta">
                <h2>Pergunta 5/10</h2>
                <p><strong>Qual é seu tipo de desafio preferido?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p5" value="rpg" required>
                        <span> Exploração e descoberta</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p5" value="fps">
                        <span> Precisão e timing perfeito</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p5" value="puzzle">
                        <span> Lógica e raciocínio crítico</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p5" value="sports">
                        <span> Treino e aperfeiçoamento de habilidades</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p5" value="strategy">
                        <span> Análise profunda e planejamento</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 6 -->
            <div class="pergunta">
                <h2>Pergunta 6/10</h2>
                <p><strong>Como você se vê como jogador?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p6" value="rpg" required>
                        <span> Aventureiro buscando experiências</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p6" value="fps">
                        <span> Guerreiro competitivo e agressivo</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p6" value="puzzle">
                        <span> Cientista apaixonado por desafios</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p6" value="sports">
                        <span> Campeão procurando vitórias</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p6" value="strategy">
                        <span> General calculista e estratégico</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 7 -->
            <div class="pergunta">
                <h2>Pergunta 7/10</h2>
                <p><strong>Qual é o seu ambiente de jogo favorito?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p7" value="rpg" required>
                        <span> Mundos abertos e imersivos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p7" value="fps">
                        <span> Mapas urbanos e cenários realistas</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p7" value="puzzle">
                        <span> Ambientes coloridos e fantásticos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p7" value="sports">
                        <span> Estádios e campos de competição</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p7" value="strategy">
                        <span> Mapas táticos e detalhados</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 8 -->
            <div class="pergunta">
                <h2>Pergunta 8/10</h2>
                <p><strong>Como você reage à dificuldade?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p8" value="rpg" required>
                        <span> Prefiro seguir a história, dificuldade não importa</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p8" value="fps">
                        <span> Aumento a dificuldade ao máximo!</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p8" value="puzzle">
                        <span> Gosto de desafio intelectual moderado</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p8" value="sports">
                        <span> Preciso vencer em qualquer nível</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p8" value="strategy">
                        <span> Difícil é sinônimo de satisfação</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 9 -->
            <div class="pergunta">
                <h2>Pergunta 9/10</h2>
                <p><strong>O que mais te irrita em um jogo?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p9" value="rpg" required>
                        <span> Jogabilidade rápida e sem história</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p9" value="fps">
                        <span> Ritmo lento e passos pequenos</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p9" value="puzzle">
                        <span> Aleatoriedade sem lógica</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p9" value="sports">
                        <span> Falta de competição real</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p9" value="strategy">
                        <span> Jogos muito rápidos ou impulsivos</span>
                    </label>
                </div>
            </div>

            <!-- Pergunta 10 -->
            <div class="pergunta">
                <h2>Pergunta 10/10</h2>
                <p><strong>Qual é seu tipo de conquista favorita?</strong></p>
                <div class="opcoes">
                    <label class="radio-label">
                        <input type="radio" name="p10" value="rpg" required>
                        <span> Completar uma história incrível</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p10" value="fps">
                        <span> Quebra-recordes de pontos e eliminações</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p10" value="puzzle">
                        <span> Resolver quebra-cabeças impossíveis</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p10" value="sports">
                        <span> Vencer campeonatos e troféus</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="p10" value="strategy">
                        <span> Dominar adversários com estratégia perfeita</span>
                    </label>
                </div>
            </div>

            <!-- Botão de envio -->
            <button type="submit" class="btn-submit"><i class="fa-solid fa-gamepad"></i> Descobrir meu Perfil!</button>
        </form>
    </div>
</body>
</html>
