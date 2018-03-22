<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/logos/docs.theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ACCIO</title>
  </head>
  <body style="background-image:url(fundo2.jpg); ">
    
    <a href="admin.php"><header class="btn btn-warning" style="width: 100%; display: inline-block;">
      
      <img class="logo" src="css/LOGO.png" alt="LOGO"> 
  </header></a>
     <div id="main" class="container bg-light mt-3">
  
  <h3 class="page-header">Adicionar Item</h3>
  
  <form method="post" action="add.php" enctype="multipart/form-data">
  
    <div class="row">
       <div class="form-group col-md-4">
        <label for="codprod">Codigo do Produto</label>
        <input type="number" min="0" class="form-control" id="codprod" placeholder="Digite o valor" name="codprod">
      </div>
    <div class="form-group col-md-4">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" placeholder="Digite o valor" name="categoria">
      </div>
  </div>
  <div class="row">
      <div class="form-group col-md-3">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" id="tipo" placeholder="Digite o valor" name="tipo">
      </div>
    <div class="form-group col-md-3">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="Digite o valor" name="nomeprod">
      </div>
    <div class="form-group col-md-3">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control" id="modelo" placeholder="Digite o valor" name="modelo">
      </div>
    <div class="form-group col-md-3">
        <label for="fabricante">Fabricante</label>
        <input type="text" class="form-control" id="fabricante" placeholder="Digite o valor" name="fabricante">
      </div>
  </div>
    <div class="row">
      <div class="form-group col-md-6">
        <label for="quantidade">Quantidade</label>
        <input type="text" class="form-control" id="quantidade" placeholder="Digite o valor" name="quantidade">
      </div>
    <div class="form-group col-md-6">
        <label for="preco">Preço</label>
        <input type="text" class="form-control" id="preco" placeholder="Digite o valor" name="preco">
     </div>
     <div class="form-group col-md-6">
        <label for="caracteristica">Caracteristica</label>
        <input type="text" class="form-control" id="caracteristica" placeholder="Digite o valor" name="caracteristica">
     </div>
    <div class="col-md-4">
        <label for="foto">Adicionar Foto</label>
        <input type="file" name="arquivo1" accept="image/jpeg, image/png, image/jpg" required/>
        <input type="file" name="arquivo2" accept="image/jpeg, image/png, image/jpg" required/>
        <input type="file" name="arquivo3" accept="image/jpeg, image/png, image/jpg" required/>
        <input type="file" name="arquivo4" accept="image/jpeg, image/png, image/jpg" required/>
    </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-dark">Salvar</button>
    <a href="admin.php" class="btn btn-default text-dark">Cancelar</a>
    </div>
  </div>
  </form>
 </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>