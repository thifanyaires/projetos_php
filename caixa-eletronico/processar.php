<?php
include 'funcoes.php';

session_start();
if (isset($_SESSION['saldo_atualizado'])) {
    $saldo = $_SESSION['saldo_atualizado'];
} else {
    $saldo = 5000; 
}

$saque = $_GET['saque'] ?? 0;
$saque_valor = (int) $saque;

if ($saque > $saldo) {
    echo '<div id="saldo-insuficiente">Saldo insuficiente para esta operação.<br/><br/> Seu saldo atual é de: ' . $saldo . ',00</b></div>';
} else {
   
    $saldo_anterior = $saldo;

    $resto = $saque;
    $tot200 = floor($resto / 200);
    $resto = $resto % 200;

    $tot100 = floor($resto / 100);
    $resto = $resto % 100;

    $tot50 = floor($resto / 50);
    $resto = $resto % 50;

    $tot20 = floor($resto / 20);
    $resto = $resto % 20;

    $tot10 = floor($resto / 10);
    $resto = $resto % 10;

    $tot5 = floor($resto / 5);
    $resto = $resto % 5;

    $tot2 = floor($resto / 2);
    $resto = $resto % 2;

    $saldo_final = $saldo - $saque;

   
    $_SESSION['saldo_atualizado'] = $saldo_final;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/png" href="./imagens/icons/icon.png">
    <link rel="stylesheet" href="style.css">   
</head>
<body>
    <?php if ($saque <= $saldo) { ?>
    
    <section id="content">
        <header class="header">
            <img src="./imagens/bite-bank.png" alt="Bite bank logo" id="logo">
        </header>
                
        <h1>SAQUE REALIZADO COM SUCESSO</h1>

        <main role="alert" aria-live="assertive">
            <h2>Você sacou R$<?=$saque_valor?>,00</h2>
                
            <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            
            <ul id="notas">
                    <?php if ($tot200 > 0) { ?>
                        <li><img src="imagens/notas/200-reais.jpg" alt="Nota de 200" class="nota" aria-hidden="true"><br/> x <?=$tot200?></li>
                    <?php } ?>
                    <?php if ($tot100 > 0) { ?>
                        <li><img src="imagens/notas/100-reais.jpg" alt="Nota de 100" class="nota" aria-hidden="true"><br/> x <?=$tot100?></li>
                    <?php } ?>
                    <?php if ($tot50 > 0) { ?>
                        <li><img src="imagens/notas/50-reais.jpg" alt="Nota de 50" class="nota" aria-hidden="true"><br/> x <?=$tot50?></li>
                    <?php } ?>
                    <?php if ($tot20 > 0) { ?>
                        <li><img src="imagens/notas/20-reais.jpg" alt="Nota de 20" class="nota" aria-hidden="true"><br/> x <?=$tot20?></li>
                    <?php } ?>
                    <?php if ($tot10 > 0) { ?>
                        <li><img src="imagens/notas/10-reais.jpg" alt="Nota de 10" class="nota" aria-hidden="true"><br/> x <?=$tot10?></li>
                    <?php } ?>
                    <?php if ($tot5 > 0) { ?>
                        <li><img src="imagens/notas/5-reais.jpg" alt="Nota de 5" class="nota" aria-hidden="true"><br/> x <?=$tot5?></li>
                    <?php } ?>
                    <?php if ($tot2 > 0) { ?>
                        <li><img src="imagens/notas/2-reais.jpg" alt="Nota de 2" class="nota" aria-hidden="true"><br/> x <?=$tot2?></li>
                    <?php } ?>
            </ul>

            <div id="saldo">
                <h3>Seu saldo anterior era de: R$<?=$saldo_anterior?>,00</h3>
                <h3>Seu saldo final ficou em: R$<?=$saldo_final?>,00</h3>
            </div>
            <?php } ?>
        </main>
            
        <button onclick="window.history.back()" id="return" class="button">Voltar</button>
    </section>    

    <script>
        var saqueValor = "<?=$saque_valor?>";
        var saldoFinal = "<?=$saldo_final?>";
        var mensagem = "Saque de " + saqueValor + " Reais realizado. Seu saldo é de: " + saldoFinal;
        var synth = window.speechSynthesis;
        var utterThis = new SpeechSynthesisUtterance(mensagem);
        synth.speak(utterThis);
    </script>
</body>
</html>
