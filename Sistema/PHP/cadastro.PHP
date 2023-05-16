<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/cadastro.CSS">
</head>
<body>
    

<form class="fundo" action="insert.php"  method="post">>

             
                
<div class="row g-3">

<div class="col-11">
  <input type="text" name="nome" class="form-control" placeholder="nome" aria-label="nome" style="margin-top: 20px; margin-left: 35px;">
</div>
<div class="col-5 ">
  <input type="text" name="Endereço" class="form-control" placeholder="Endereço" aria-label="Endereço" style="margin-left: 35px;">
</div>

<div class="col-2">
  <input type="text" name="numero" class="form-control" placeholder="numero" aria-label="numero" style="margin-left: 35px;">
</div>

<div class="col-4">
  <input type="text" name="Bairro" class="form-control" placeholder="Bairro" aria-label="Bairro" style="margin-left: 35px;">
</div>

<div class="col-4">
  <input type="text" name="Cidade" class="form-control" placeholder="Cidade" aria-label="Cidade" style="margin-left: 35px;">
</div>

<div class="col-4">
  <input type="text" name="Estado" class="form-control" placeholder="Estado" aria-label="Estado" style="margin-left: 40px;">
</div>

<div class="col-3">
  <input type="text" name="CEP" class="form-control" placeholder="CEP" aria-label="CEP" style="margin-left: 35px;">
</div>

<div class="col-3">
  <input type="text" name="Telefone" class="form-control" placeholder="Telefone" aria-label="Telefone" style="margin-left: 35px;">
</div>


<div class="col-4">
  <input type="text" name="CPF" class="form-control" placeholder="CPF" aria-label="CPF" style="margin-left: 40px;">
</div>

<div class="col-4">
  <input type="text" name="RG" class="form-control" placeholder="RG" aria-label="RG" style="margin-left: 35px;">
</div>

<div class="col-11">
  <input type="text" name="E-mail" class="form-control" placeholder="E-mail" aria-label="E-mail" style="margin-left: 35px;">


  
  <div class="col-5">
      <input type="button" value="Cadastrar-se" style="margin-left: 100px; margin-top: 10px; width: 630px; background-image: linear-gradient(to bottom, rgba(81, 12, 185, 0.257), rgb(101, 101, 203));">
  </div>



</form>










</body>
</html>