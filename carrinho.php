    <?php 
      include "header.php";
   ?>

    <div class="container mt-5">
<div class="tab-content text-center">
   <div id="cart" style="margin-bottom: 12%;">
      <br>
      <h3 class="mb-5">Você Tem <?php echo "0" ?> Itens em seu Carrinho</h3>
      <a href="index.php" class="btn btn-outline-danger btn-block mb-5" style="text-decoration: none;">QUE TAL IR AS COMPRAS?
      <span class="ml-3"><i class="fas fa-shopping-bag"></i></span></a>

      <div class="container">
         <table id="cart" class="table table-hover table-condensed">
            <thead>
               <tr>
                  <th style="width:50%" class="text-center">PRODUTO</th>
                  <th style="width:10%">PREÇO</th>
                  <th style="width:8%">QUANTIDADE</th>
                  <th style="width:22%" class="text-center">SUBTOTAL</th>
                  <th style="width:10%">EXCLUIR</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td data-th="Product">
                     <div class="row">
                        <div class="col-md-4 hidden-xs">
                           <img src="img/produtos/530.jpg" alt="item" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                           <h6 class="text-center">Gabinete NZXT Phantom 530 - CA-PH530-W1</h6>
                        </div>
                  </td>
                  <td data-th="Preço">R$ 000.00</td>
                  <td data-th="Quantidade">
                  <input type="number" min="0" class="form-control text-center col-md-6" value="1">
                  </td>
                  <td data-th="Subtotal" class="text-center">R$ 000.00</td>
                  <td class="actions" data-th="Exluir">
                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt fa-lg"></i></button>
                  </td>
               </tr>
            </tbody>
            <tfoot>
            <tr>
            <td colspan="4">
            <h5>Frete Estimado:</h5></td>
            <td class="text-right"><b>R$ 000.00</b></td>
            </tr>
            <tr>
            <td colspan="4">
            <h5>Total:</h5></td>
            <td class="text-right"><b>R$ 000.00</b></td>
            </tr>
            <tr>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
            <td colspan="2" class="hidden-sm-up"></td>
            <td colspan="4">
            <a href="#" onclick="window.open('https://www.paypal.com/signin?country.x=BR&locale.x=pt_BR','PayPal','  LEFT=10, WIDTH=770, HEIGHT=400');" class="btn btn-success btn-lg btn-block" ">Finalizar <i class="fa fa-angle-right "></i></a>
            </td>
            </tr>
            </tfoot>
         </table>
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