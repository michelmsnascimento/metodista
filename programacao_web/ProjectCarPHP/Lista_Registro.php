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
    <title>Carros Cadastrados</title>
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
            
        
        <h4>Lista de Carros Castrados</h4>





<?php
    
    $sql ="select * from carros";
    $resultado = mysqli_query($conn,$sql);

        while ($registro=mysqli_fetch_array($resultado)){
        $id_carro = $registro['id_carro'];
        $modelo_carro = $registro['modelo_carro'];
        $ano_fabricacao = $registro['ano_fabricacao'];
        $placa_carro= $registro['placa_carro'];
        
        echo $id_carro.'<br>';
        echo $modelo_carro.'<br>';
        echo $ano_fabricacao.'<br>';
        echo $placa_carro.'<hr>'.'<br>';

        }
?>



        </div>
    </div>
</div> 
</body>
</html>

