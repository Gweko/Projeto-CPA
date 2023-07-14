<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css" media="">
    <title>CPA - Comissão Própria de Avaliação</title>
</head>

<body>
    <div class="box">
        <center>
        <br><br>

        <div class="campo">
        <form action="banco2.php" method="POST">
            <h3 id="Tituloum"><strong>Crie uma conta</strong></h3>
            <h3 id="Titulodois"><strong>CPA - Comissão Própria de Avaliação</strong></h3>
            <br>
        </div>

        <form>
            <div>
                <fieldset class="grupo">
                    <div class="campo">
                    <form action="banco2.php" method="POST">
                        <div class="text"><strong>Email:</strong></div><br><br>
                        <div class="box1">
                            <input type="email" placeholder="Digite o seu email" name="email" id="email" class="input" required>
                            <label for="email"></label>
                        </div>
                    </div>
                    <br><br>
                    <div class="campo">
                        <div class="textA"><strong>Nome Completo:</strong></div><br><br>
                        <div class="box1">
                            <input type="email" placeholder="Digite o seu email" name="email" id="email" class="input" required>
                            <label for="email"></label>
                        </div>
                    </div>
                    <br><br>
                    <div class="campo">
                        <div class="textB"><strong>Nova senha:</strong></div><br><br>
                        <div class="box1">
                            <input type="password" placeholder="Digite a sua senha" name="senha" id="password" class="input" required>
                            <label for="senha"></label>
                        </div>
                    </div><br><br>
                    <div class="textC"><strong>Confirmar senha:</strong></div><br><br>
                    <div class="box1">
                        <input type="password" placeholder="Digite a sua senha" name="senha" id="password" class="input" required>
                        <label for="senha"></label>
                    </div>
                </div><br><br>
                    <br><br><br>
                    <div class="campo">
                        <button class="botão" type="submit">Entrar</button>
                    </div>
                </fieldset><br><br><br>
            </div>
        </form>
        </center>
    </div>
</body>

</html>