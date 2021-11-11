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
    <title>Pagina Lista Registro PHP</title>
</head>
<div class="card">
    <h2>Inserir Dados</h2>


<body>
<div class="container-md">
<div class="card bg-dark text-white">
<div class="card-body">
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-1">
    <label for="Id_cliente" class="form-label">Id</label>
    <input type="text" class="form-control" id="Id_cliente" value="0000" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="Nome_cliente" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" id="Nome_cliente" value="Mark Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-1">
    <label for="validationCustomUsername" class="form-label">Idade</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  
</form>
</div>
</div>
</div>
</div>
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