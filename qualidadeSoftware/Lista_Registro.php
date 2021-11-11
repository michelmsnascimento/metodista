<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pagina Lista Registro PHP</title>
</head>
    
<body>
<div class="container-md">
    <div class="card bg-dark text-white">
        <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./inserir_Registro.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./Lista_Registro.php">Usuários</a>
            </li>
        
            </ul>
            
        
        <h4>Lista de Usuários</h4>
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
        </div>
    </div>
</div> 
</body>
</html>

