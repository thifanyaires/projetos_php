<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="./imagens/icons/icon.png">
    <link rel="stylesheet" href="style.css">

    <title>BITE BANK</title>
</head>
<body>
    <?php
    $saque = $_REQUEST['saque'] ?? 0;
    $saque_valor = (int) $saque;
    ?>
    <main role="main">
        <div class="header">
        <img src="./imagens/BITE-bank-logo.png" alt="Bite bank logo" id="logo">
        </div>
        <h1 id="subtitle">CAIXA ELETRÔNICO</h1>

        <form role="form" action="processar.php" method="get">
            <section class="form">
                <div id="saque">
                    <label for="saque">Digite o valor que deseja sacar em R$</label>
                    <br>
                    <input type="number" name="saque" id="saque" step="1" required aria-label="Valor do saque em reais" aria-required="true">
                </div>

                <div class="buttons">
                <button type="submit" value="sacar" id="sacar">Sacar</button>
                <button type="reset" value="limpar" id="limpar">Limpar</button>
            </div>
                
                    <h2>Notas disponíveis para saque:</h2>
                
                <div id="notas">
                    <img class="nota" src="imagens/notas/200-reais.jpg" alt="200 reais">
                    
                    <img class="nota" src="imagens/notas/100-reais.jpg" alt="100 reais">
                    
                    <img class="nota" src="imagens/notas/50-reais.jpg" alt="50 reais">
                    
                    <img class="nota" src="imagens/notas/20-reais.jpg" alt="20 reais">
                    
                    <img class="nota" src="imagens/notas/10-reais.jpg" alt="10 reais">
                    
                    <img class="nota" src="imagens/notas/5-reais.jpg" alt="5 reais">
                    
                    <img class="nota" src="imagens/notas/2-reais.jpg" alt="2 reais">
                </div>
            </section>    
        </form>
    </main>
</body>
</html>
