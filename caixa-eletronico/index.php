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

     
    <section id="content">
        <header class="header">
            <img src="./imagens/bite-bank.png" alt="Bite bank logo" id="logo">
        </header>        
        <h1>CAIXA ELETRÔNICO</h1>

        <div class="form">
            <main role="main">
                <form role="form" action="processar.php" method="get">
                        <div id="saque">
                            <label for="saque">DIGITE O VALOR QUE DESEJA SACAR</label>
                            <br>
                            <input type="number" name="saque" id="caixa_texto" step="1" required aria-label="Valor do saque em reais" aria-required="true" placeholder="R$ 0,00">
                        </div>

                        <div class="buttons">
                            <button type="submit" value="sacar" id="sacar" class="button">Sacar</button>
                            <button type="reset" value="limpar" id="limpar" class="button">Limpar</button>
                        </div>
                </form>        
            </main>
        </div>

        <div id="notas">
            <h2 id="disponivel">NOTAS DISPONÍVEIS:</h2>
                        
                <img class="nota" src="imagens/notas/200-reais.jpg" alt="200 reais">
                            
                <img class="nota" src="imagens/notas/100-reais.jpg" alt="100 reais">
                            
                <img class="nota" src="imagens/notas/50-reais.jpg" alt="50 reais">
                            
                <img class="nota" src="imagens/notas/20-reais.jpg" alt="20 reais">
                            
                <img class="nota" src="imagens/notas/10-reais.jpg" alt="10 reais">
                            
                <img class="nota" src="imagens/notas/5-reais.jpg" alt="5 reais">
                            
                <img class="nota" src="imagens/notas/2-reais.jpg" alt="2 reais">
        </div>
    </section>        
</body>
</html>
