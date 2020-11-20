<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Seção 3: Integrando PHP com HTML & CSS</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Seção 4: Tipos Básicos Curso PHP</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo: Inteiros</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo: Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio: Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo: String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio: String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=boolean">Tipo: boolean</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Seção 5: Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio: Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio: Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Seção 6: Estruturas de controle #1</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">IF / ELSE</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores relacionais</a>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio: PI</a>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores lógicos</a>
                        <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio: Operadores
                                lógicos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS &copy <?= date('Y');?>
    </footer>
</body>

</html>