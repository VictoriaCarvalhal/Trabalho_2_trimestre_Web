<?php
    $ano = "";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Violência Doméstica</title>
</head>
<body>
    <?php
        $ano = array("2011", "2012", "2013", "2014", "2015", "2016");
        foreach($ano as $ano) {
            echo "<a href=\"TabelaViolenciaContraAMulher.php?seleciona=$ano\">$ano</a> .";
        }
        $local = null;
    ?>

    <form method="post" action="TabelaViolenciaContraAMulher.php">
        <p>Localidade:</p>
            <p><textarea name="local" rows="6" cols="50"><?=$local?></textarea></p>
            <p><button type="submit">Selecionar</button></p>
    </form>
</body>
</html>