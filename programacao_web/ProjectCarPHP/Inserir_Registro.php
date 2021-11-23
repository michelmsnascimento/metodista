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
<div class="card">
    


<body>
      <div class="container-md">
       <div class="card bg-dark text-white">
          <div class="card-body">
            <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./inserir_Registro.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Lista_Registro.php">Usuários</a>
            </li>
        
            </ul>
            
            
            <h4>Castrar Carro</h4>
            <form class="row g-3 was-validated" id="cadastro" method="POST" novalidate>
              
      
              <div class="col-md-4">
                <label for="modelo_carro" class="form-label">Modelo do carro</label>
                <input type="text" class="form-control" name="modelo_carro" id="modelo_carro" placeholder="Marca Modelo" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-4">
                <label for="ano_fabricacao" class="form-label">Ano Fabricação</label>
                <input type="text" class="form-control" name="ano_fabricacao" id="ano_fabricacao" placeholder="aaaa" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-4">
                <label for="placa_carro" class="form-label">Placa</label>
                <input type="text" class="form-control" name="placa_carro" id="placa_carro" placeholder="DDD-1111" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              
              <div class="col-12">
              <a href="./index.php"><button class="btn btn-success" type="submit">Cadastrar Carro</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>


<?php
    include_once("conexao.php");

    $modelo_carro = filter_input(INPUT_POST, 'modelo_carro', FILTER_SANITIZE_STRING);
    $ano_fabricacao = filter_input(INPUT_POST, 'ano_fabricacao', FILTER_SANITIZE_STRING);
    $placa_carro = filter_input(INPUT_POST, 'placa_carro', FILTER_SANITIZE_STRING);
    
    $comando_inserir = "insert into carros (modelo_carro,ano_fabricacao,placa_carro) values ('$modelo_carro','$ano_fabricacao','$placa_carro')";

    $envio = mysqli_query($conn,$comando_inserir);
?>



<script> // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>    
</body>
</html>

<?php
    
?>