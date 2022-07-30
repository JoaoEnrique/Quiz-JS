<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Quiz</title>
</head>
<body>
    <header>

    </header>

    <main>
        <?php

            //variavel que recebe um valor aleatorio pra aparecer as perguntas em ordem aleatoria
            $numero = rand(1,2); 

            if($numero == 2){
                ?>
                    <h1>Pergunta 1</h1>

                    <form action="">
                        <h3>O que é a gravidade?</h3>
                        <input type="radio" name="forca" id="forca">
                        <label for="forca">Força</label><br>

                        <input type="radio" name="aceleracao" id="aceleracao">
                        <label for="aceleracao">Aceleração</label><br>

                        <input type="radio" name="espaco" id="espaco">
                        <label for="espaco">Distorção do Espaco-Tempo</label><br>

                        <input type="radio" name="nenhum" id="nenhum">
                        <label for="nenhum">Nenhuma das alternativas</label><br>

                            
                        <button onclick="result1()">Próximo</button>
                    </form>
                <?php
            }
            else{
                ?>
                    <h1>Pergunta 1</h1>

                    <form action="">
                        <h3>Quando Albert Einstein Publicou a Teoria da Relatividade Geral?</h3>
                        <input type="radio" name="1915" id="1915">
                        <label for="1915">1915</label><br>

                        <input type="radio" name="1925" id="1925">
                        <label for="1925">1925</label><br>

                        <input type="radio" name="1927" id="1927">
                        <label for="1927">1927</label><br>

                        <input type="radio" name="1905" id="1905">
                        <label for="1905">1905</label><br>

                        <button>Próximo</button>
                    </form>
                <?php
            }
            
        ?>
    </main>

    <script src="js/main.js"></script>

    <footer>

    </footer>
</body>
</html>