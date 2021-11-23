<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pagina inicial PHP</title>
</head>
<body>
<div class="container-md">
    <div class="card bg-dark text-white">
        <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./inserir_Registro.php">Cadastro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Lista_Registro.php">Usuários</a>
            </li>
        
            </ul>
            
        
        <h4>Microblau Cars</h4>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./public/img/01.jpg" class="d-block w-100" alt="car01">
    </div>
    <div class="carousel-item">
      <img src="./public/img/02.jpg" class="d-block w-100" alt="car02">
    </div>
    <div class="carousel-item">
      <img src="./public/img/03.jpg" class="d-block w-100" alt="car03">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>
    </div>
</div>
</body>
</html>

