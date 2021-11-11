<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Lista Registro PHP</title>
</head>
    <h2>Lista de Usuários</h2>
<body>
    
</body>
</html>

<?php
    //echo "sejam bem vindos ao PHP";
    $sql ="select * from clientes";
    $resultado = mysqli_query($conn,$sql);

        while ($registro=mysqli_fetch_array($resultado)){

        $Id_cliente = $registro['Id_cliente'];
        $Nome_cliente = $registro['Nome_cliente'];
        $Idade_cliente = $registro['Idade_cliente'];
        $Genero_cliente = $registro['Genero_cliente'];
        $Data_Nasc_Cliente = $registro['Data_Nasc_Cliente'];
        $Email_Cliente = $registro['Email_Cliente'];
        $Curso_Cliente = $registro['Curso_Cliente'];

        echo $Id_cliente.'<br>';
        echo $Nome_cliente.'<br>';
        echo $Idade_cliente.'<br>';
        echo $Genero_cliente.'<br>';
        echo $Data_Nasc_Cliente.'<br>';
        echo $Email_Cliente.'<br>';
        echo $Curso_Cliente.'<br>'.'<hr>';
        }
?>