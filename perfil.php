<?php 
   include "banco.php";
   
   $query = "select * from login ";
   
   $consulta = mysqli_query($con, $query);
   
   while($f = mysqli_fetch_assoc($consulta)){
    $id = $f['id'];
     $nome = $f['nome'];
      $usuario = $f['usuario'];
      $email = $f['email'];
   
      $senha = $f['senha'];         
      $endereco = $f['endereco'];
      $cidade = $f['cidade'];
      $bairro = $f['bairro'];
   
      $cep = $f['cep'];
      $telefoneFixo = $f['telefoneFixo'];
      $telefoneCel = $f['telefoneCel'];
      $cpf = $f['cpf'];
   }
   
   include "header.php";
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
   </head>
   <body>
      <link rel="stylesheet" href="css/layout.css">
      <div id="myTab" class="nav-pills nav justify-content-center scrollmenu">
         <a href="perfil.php" class="tablink"><i class="fas fa-user-circle fa-lg"></i> MINHA CONTA</a>
         <a href="pedidos.php" class="tablink"><i class="fas fa-archive fa-lg"></i> MEUS PEDIDOS</a>
         <a href="contato.php" class="tablink"><i class="fas fa-exclamation-triangle fa-lg"></i> INFORMAR PROBLEMAS</a>
         <a href="config.php" class="tablink"><i class="fas fa-cog fa-lg"></i> CONFIGURAÇÕES</a>
         <a href="destroys.php" class="tablink"><i class="fas fa-sign-out-alt fa-lg"></i> SAIR</a>
      </div>
      <!-- menu mobile -->
      <div id="myTab2" class="nav-pills nav justify-content-center scrollmenu">
         <a href="perfil.php" class="tablink"><i class="fas fa-user-circle fa-lg"></i></a>
         <a href="pedidos.php" class="tablink"><i class="fas fa-archive fa-lg"></i></a>
         <a href="contato.php" class="tablink"><i class="fas fa-exclamation-triangle fa-lg"></i></a>
         <a href="config.php" class="tablink"><i class="fas fa-cog fa-lg"></i></a>
         <a href="destroys.php" class="tablink"><i class="fas fa-sign-out-alt fa-lg"></i></a>
      </div>
      <div class="container mt-5" id="content" style="background-color: #efefef;box-shadow:0px 0px 200px #c4c4c4; padding: 20px;border-radius: 15px">
         <div class="col-md-12">
            <div id="logbox">
               <form  method="post" action="">
                  <h1 class="font-weight-bold mb-5">Informações de Contato</h1>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                     </div>
                     <input type="email" class="form-control input pass" name="email" required>
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                     </div>
                     <input type="text" class="form-control input pass" name="nome" required>
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefone Fixo</span>
                     </div>
                     <input type="number" class="form-control input pass" name="telefoneFixo" required>
                  </div>
                  <div class="input-group mb-4">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telefone Móvel</span>
                     </div>
                     <input type="number" class="form-control input pass" name="telefoneFixo" required>
                  </div>
                  <hr>
                  <h1 class="font-weight-bold">Informações de Envio e Cobrança</h1>
                  <div class="form-row">
                     <div class="form-group col-md-10">
                        <label for="inputAddress">Endereço</label>
                        <input required type="text" class="form-control">
                     </div>
                     <div class="form-group col-md-2">
                        <label for="inputCity">Número</label>
                        <input required type="text" class="form-control" id="inputCity">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputAddress2">Cidade</label>
                     <input required type="text" class="form-control">
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-5">
                        <label for="inputCity">Bairro</label>
                        <input required type="text" class="form-control" id="inputCity">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputCity">Estado</label>
                        <input required type="text" class="form-control" id="inputCity">
                     </div>
                     <div class="form-group col-md-3">
                        <label for="inputZip">CEP</label>
                        <input type="text" class="form-control" id="inputZip">
                     </div>
                  </div>
                  <hr>
                  <h1 class="font-weight-bold mb-4">Informações Pessoias</h1>
                  <div class="form-row">
                     <div class="form-group col-md-4">
                        <label for="inputCity">Usuário</label>
                        <input required type="text" class="form-control" id="inputCity">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputCity">CPF</label>
                        <input required type="text" class="form-control" id="inputCity">
                     </div>
                     <div class="form-group col-md-4">
                        <label for="inputZip">Nascimento</label>
                        <input type="date" class="form-control" id="inputZip">
                     </div>
                  </div>
                  <div class="text-center">
                     <input type="submit" value="Atualizar" class="inputButton">
                  </div>
               </form>
            </div>
         </div>
         <!--col-md-6-->
         <div class="col-md-12 mt-5">
            <div id="logbox">
               <form id="signup" method="post" action="/signup">
                  <h1 class="font-weight-bold">Mudar Senha</h1>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Senha atual</span>
                     </div>
                     <input type="password" class="form-control input pass" name="email" required>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nova Senha</span>
                     </div>
                     <input type="password" class="form-control input pass" name="nome" required>
                  </div>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Repita a Senha</span>
                     </div>
                     <input type="password" class="form-control input pass" name="telefoneFixo" required>
                  </div>
                  <div class="text-center">
                     <input type="submit" value="Atualizar Senha" class="inputButton">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <hr>
      </div>
      <footer>
         <?php
            include "footer.inc";
            ?>
      </footer>
      <script type="text/javascript" src="js/index.js"></script>
      <script type="text/javascript" src="js/logos.js"></script>
      <script type="text/javascript" src="js/vitrine.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>