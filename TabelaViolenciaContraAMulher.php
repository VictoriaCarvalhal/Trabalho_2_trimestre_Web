<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Tabela</title>
</head>
<body>
<table id="tabela">
<?php
    if(!isset($_GET["seleciona"]))
        $_GET["seleciona"] = null;

    if($_GET["seleciona"] <= 2016 && $_GET["seleciona"] >= 2011){

        $ano = $_GET["seleciona"];
        
        $f = fopen("violencia-domestica-df.csv", "r");
        $dados=fgetcsv($f);

        while($dados)
        {
            $ano = (int) $ano; 

            $ind = $ano - 2010;
            echo "<tr><td>$dados[0]</td><td>$dados[$ind]</td><tr>";
            
            $dados=fgetcsv($f);
        }
        fclose($f);
    }
    if(isset($_POST["local"])){

        $local = $_POST["local"];

        $f = fopen("violencia-domestica-df.csv", "r");
        $dados=fgetcsv($f);

        echo "<tr><td>$dados[0]</td><td>$dados[1]</td><td>$dados[2]</td><td>$dados[3]</td>
                <td>$dados[4]</td><td>$dados[5]</td><td>$dados[6]</td><td>Somatorio</td><tr>";
        while($dados)
        {
            if($local == $dados[0]){
                
                $soma = $dados[1] +$dados[2] +$dados[3] +$dados[4] +$dados[5] +$dados[6];
                echo "<tr><td>$dados[0]</td><td>$dados[1]</td><td>$dados[2]</td><td>$dados[3]</td>
                <td>$dados[4]</td><td>$dados[5]</td><td>$dados[6]</td><td>$soma</td><tr>";
                break;
            }
            $dados=fgetcsv($f);
        }
        fclose($f);
    }
?>
    <a href="AnoViolenciaContraAMulher.php"><input type="button"value="Voltar"></a>
</table>
</body>
</html>