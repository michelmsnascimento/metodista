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
            
            
            <h4>Castrar Usuário</h4>
            <form class="row g-3 was-validated" id="cadastro" method="POST" novalidate>
              <div class="col-md-1">
                <label for="Id_cliente" class="form-label">RG</label>
                <input type="text" class="form-control" name="Id_cliente" id="Id_cliente" placeholder="0000" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="Nome_cliente" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="Nome_cliente" id="Nome_cliente" placeholder="Mark Otto" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="Email_Cliente" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="Email_Cliente" id="Email_Cliente" placeholder="Mark@Otto.com" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-1">
                <label for="Idade_cliente" class="form-label">Idade</label>
                <input type="number" class="form-control" name="Idade_cliente" id="Idade_cliente" placeholder="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="Genero_cliente" class="form-label">Sexo</label>
                <input type="text" class="form-control" name="Genero_cliente" id="Genero_cliente" placeholder="Masculino/Feminino" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="Data_Nasc_Cliente" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" name="Data_Nasc_Cliente" id="Data_Nasc_Cliente" placeholder="aaaa-mm-dd" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4">
                <label for="Curso_Cliente" class="form-label">Curso</label>
                <input type="text" class="form-control" name="Curso_Cliente" id="Curso_Cliente" placeholder="Nome do Curso" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                <label class="form-check-label" for="validationFormCheck1">Aceitar os termos</label>
                <div class="invalid-feedback">Você deve aceitar os termos para proseguir</div>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
              </div>
            </form>
          </div>
        </div>
      </div>


<?php
    include_once("conexao.php");

    $Id_cliente = filter_input(INPUT_POST, 'Id_cliente', FILTER_SANITIZE_STRING);
    $Nome_cliente = filter_input(INPUT_POST, 'Nome_cliente', FILTER_SANITIZE_STRING);
    $Idade_cliente = filter_input(INPUT_POST, 'Idade_cliente', FILTER_SANITIZE_STRING);
    $Genero_cliente = filter_input(INPUT_POST, 'Genero_cliente', FILTER_SANITIZE_STRING);
    $Data_Nasc_Cliente = filter_input(INPUT_POST, 'Data_Nasc_Cliente', FILTER_SANITIZE_STRING);
    $Email_Cliente = filter_input(INPUT_POST, 'Email_Cliente', FILTER_SANITIZE_STRING);
    $Curso_Cliente = filter_input(INPUT_POST, 'Curso_Cliente', FILTER_SANITIZE_STRING);

    $comando_inserir = "insert into clientes (Id_cliente,Nome_cliente,Idade_cliente,Genero_cliente,Data_Nasc_Cliente,Email_Cliente,Curso_Cliente) values ('$Id_cliente','$Nome_cliente','$Idade_cliente','$Genero_cliente','$Data_Nasc_Cliente','$Email_Cliente','$Curso_Cliente')";

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