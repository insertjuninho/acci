<?php
  include "header.php"
?>
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
         <div class="space-medium">
        <div class="container p-5" style="background:#e8e8e8">
            <div class="row">
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="feature-description">
                        <h2>Estamos prontos para ouvir suas necessidades e esclarecer quaisquer duvidas.</h2>
                        <hr>
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><i class="far fa-address-book"></i></div>
                            <div class="feature-content">
                                <p>Resolva todos os seus problemas sem complicações.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><i class="fas fa-comments"></i></div>
                            <div class="feature-content">
                                <p>Tem alguma sugestão? Nos diga.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <!-- feature-left -->
                        <div class="feature-left">
                            <div class="feature-icon"><i class="far fa-question-circle"></i></div>
                            <div class="feature-content">
                                <p>Esclareça suas duvidas.</p>
                            </div>
                        </div>
                        <!-- /.feature-left -->
                        <hr>
                    </div>
                </div>
                <!-- /.feature-sections -->
                <div class="offset-xl-1 col-xl-6 offset-lg-1 col-lg-10 offset-md-1 col-md-10 col-sm-12 col-12 mt30">
                    <form method="post" action="">
                        <!-- service-form -->
                        <div class="service-form">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="mb-3">Insira seus dados </h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="name"></label>
                                        <input name="nome" type="text" placeholder="Nome" class="form-control" required>
                                        <div class="form-icon"><i class="fa fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <div class="form-icon"><i class="fa fa-envelope"></i></div>
                                        <label class="control-label sr-only" for="email"></label>
                                        <input name="email" type="email" placeholder="Email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <div class="form-icon"><i class="fa fa-phone"></i></div>
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input name="celular" type="number" min="0" placeholder="Telefone" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only"></label>
                                        <input name="assunto" type="text" placeholder="Assunto" class="form-control" required>
                                        <div class="form-icon"><i class="fas fa-asterisk"></i></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="select"></label>
                                        <div class="select">
                                            <select name="tipo" name="select" class="form-control">
                                                <option disabled selected>Tipo de Contato</option>
                                                <option value="problemas na compra">Problemas com minha compra</option>
                                                <option value="sugestao">Sugestão</option>
                                                <option value="reclamacao">Reclamação</option>
                                                <option value="elogio">Elogios</option>
                                                <option value="duvida">Dúvidas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="textarea"></label>
                                        <textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button type="submit" name="singlebutton" class="btn btn-block mb10 btn-secondary">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.service-form -->
                </div>
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
