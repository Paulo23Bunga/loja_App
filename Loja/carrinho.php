
<?php
session_start();
$conexao = mysqli_connect('localhost','root','','tb_produto');
mysqli_set_charset($conexao, "utf8");

if (!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = array();
  echo $_SESSION['carrinho'];
}else{
 // $_SESSION['carrinho'] = array();
  
}

    /**ADICIONA PRODUTO**/
    if (isset($_GET['acao'])) {
      if ($_GET['acao'] == 'add') {
        $id = intval($_GET['id']);
        if (!isset($_SESSION['carrinho'][$id])) {
          $_SESSION['carrinho'][$id] = 1;
        //  echo $_SESSION['carrinho'][$id];
      //  var_dump($_SESSION['carrinho']);
          header('Location: index.php?sucesso');
        } else {
          $_SESSION['carrinho'][$id] += 1;
        //  print_r($_SESSION['carrinho']);
        header('Location: index.php?sucesso');
        }
      }

      if($_GET['acao'] == 'del') {
          $id = intval($_GET['id']);
          if (isset($_SESSION['carrinho'][$id])){
            unset($_SESSION['carrinho'][$id]);
          }
      }

      if ($_GET['acao'] == 'up') {
        if(is_array($_POST['prod'])){
          foreach ($_POST['prod'] as $id => $qtd) {
            $id = intval($id);
            $qtd = intval($qtd);
            if (!empty($qtd) || $qtd <> 0) {
              $_SESSION['carrinho'][$id] = $qtd;
            }else {
              unset($_SESSION['carrinho'][$id]);
            }
          }
        }
      }

    }



  //print_r("<script>alert(".$_SESSION['carrinho'][$id].")</script>");
//  echo "<script>alert(".$_SESSION['carrinho'][$id].")</script>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Loja Nome</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

 <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="vue-dev/dist/vue.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-none d-md-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">loja@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+244 927 148 025</span></i>
      </div>
      <div class="social-links d-md-flex align-items-center" style="">

            <form action="" method="post" class="">
              <input type="search" name="search" placeholder="O que procuras?"> <button><i class="bi bi-search"></i></button>
            </form>

      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/logoSemFundo.png" alt="">
        <h1 class="position-relative" style="color: #ffffffff;">2A-CELANDER<span style="color: #bc151f !important;">.</span>

        </h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
         
          <li><a href="#main" class="position-relative"><i class="bi bi-cart4 icones-nav"></i>
            <?php
                      if(isset($_SESSION['carrinho'])){
                        $count = count($_SESSION['carrinho']);
                      //  $count = $_GET['carrinho'];
                        echo "

                          <span class='badge bg-danger badge-number position-absolute' style='right: -10px; top:-5px;'>$count</span>
                        ";
                      }else {
                        // code...
                        echo "<span class='badge bg-danger badge-number position-absolute' style='right: -10px; top:-5px;'>0</span>";
                      }
                   ?>
           
          </a></li>
          <li><a href="#"><i class="bi bi-search icones-nav"></i></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->


  <main id="main" class="main container">

    <div class="pagetitle text-center my-4" id="carrinho">
      <h1>Compras Disponiveis No Carrinho</h1>

    </div><!-- End Page Title -->

    <section class="section" >
      <form class="" action="?acao=up" method="post">
      <div class="row">

        <div class="card pb-0 col-md-8 table-responsive">
          <table class="table table-striped table-borderless">
            <thead>
              <tr>
                <th scope="col" class="text-cente">#</th>
                <th scope="col">Produto</th>
                <th scope="col">Qtd</th>
                 <th scope="col">Subtotal</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $total = 0;
                if (count($_SESSION['carrinho']) == 0){
                  echo "<tr><td colspan='5'>Não há produtos</td></tr>";
                } else {
                  foreach ($_SESSION['carrinho'] as $id => $qtd) {
                    $seleciona = "SELECT * FROM tb_produto WHERE id_produto = '$id'";
                    $dadoscapt = mysqli_query($conexao,$seleciona) or die(mysql_errno());
                    $linhas = mysqli_fetch_assoc($dadoscapt);

                    $nome = $linhas['nome_produto'];
                    $preco = number_format($linhas['valor_venda'], 2, ',', ',');
                    $sub = number_format($linhas['valor_venda'] * $qtd, 2, ',', ',');
                  //  $sub = number_format($linhas['valor_venda'] * $qtd, 2, ',', ',');

                    $img = $linhas['imagem_produto'];

                    $total += intval($sub);

                ?>


                <tr class="product-row-<?=$id?>">
    <!-- Rest of the table row code -->
                  <th scope="row"><a href="#"><img src="assets/img/<?=$img?>" style="width: 65px; height: 65px;" alt=""></a></th>
                  <td><a href="#" class=""><?=$nome?> <br><b class="preco" id="preco<?=$id?>"><?=$preco?></b></a></td>
                 
    


                 <td class="fw-bold">
                  <input type="number" class="" name="prod[<?=$id?>]" id="prod<?=$id?>" value="<?=$qtd?>" style="max-width: 55px;" oninput="updateSub(<?=$id?>); updateSubTotal();">
                </td>

                <!--  <td><?php //$sub ?></td> -->
                  <td id="sub_total_<?=$id?>"><?=$sub?></td>


                  <td><a href="?acao=del&id=<?=$id?>" style="font-size: 21px;">
                    <i class="bi bi-trash-fill"></i>
                </a></td>
              </tr>


          
                <?php   }
                } ?>
           
           

            </tbody>
          </table>

        </div>


        <div class="col-md-4">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Finalizar Compra</h5>
                <div class="conta">
                    <p class="d-flex justify-content-between"><span><b>Subtotal</b></span><span class="">
                      <?php if(!empty($total)) {?>
                      <b><?php $sub = $total - 1.0;
                            echo $sub .'.000';
                       ?></b>
                      <?php }else { ?>
                        000.00
                        <?php } ?>
                    </span>

                  </p>
                    <p class="d-flex justify-content-between"><span><b>Desconto</b></span><span class="text-danger">1000Kz</span></p>
                    <p class="d-flex justify-content-between"><span><b>Total</b></span>
                    <span id="total_span">
                      <?php if (!empty($total)) { ?>
                          <b><?= number_format($total, 2, '.', ',') ?></b>
                      <?php } else { ?>
                          <b>000.00</b>
                      <?php } ?>
                  </span>


                  </p>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button" hidden>Finalizar Compra</button>
                    <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=927148025&text=Hola&source=&data" target="_blank">Finalizar Compra</a>
                  </div>

            </div>
          </div><!-- End Border Badges -->

        </div>

      </div>
    </form>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="" class="shadow-lg rodape" >
    <div class="row bg-danger n1" style="max-width: 100%;" >
     <div class="col-12 col-md-4 text-center logo-footer bg-white" >
       <img src="assets/img/logo1.jpg" alt="" height="450px" width="100" style="width: 100%;" class="">
     </div>
     <div class="col-12 col-md-8 bg-dark row text-light py-4 n2" style="max-width: 100%;">
         <div class="col-6 col-sm-4">
           <h4>Meus Links</h4>
           <ul>
             <li><a href="#">Home</a></li>
             <li><a href="#">About us</a></li>
             <li><a href="#">Services</a></li>
             <li><a href="#">Terms of service</a></li>
             <li><a href="#">Privacy policy</a></li>
           </ul>
         </div>
         <div class="col-6 col-sm-4">
           <h4>Nossos Trabalhos</h4>
           <ul>
             <li><a href="#">Web Design</a></li>
             <li><a href="#">Web Development</a></li>
             <li><a href="#">Product Management</a></li>
             <li><a href="#">Marketing</a></li>
             <li><a href="#">Graphic Design</a></li>
           </ul>
         </div>
         <div class="col-6 col-sm-4" id="root">
           <h4>Contacta-nos</h4>
           <p>
             Camama <br>
             Lunada<br>
             Angola <br><br>
             <strong>Phone:</strong> +244 958 554 855<br>
             <strong>Email:</strong> info@exemplo.com<br>
           </p>
         </div>
         <div class="col-12">
           <div class="social-links d-flex justify-content-center mt-4">
             <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
             <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
             <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
             <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
           </div>
         </div>
         </div>
     </div>
    </div>
   </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/jquery-3.5.1.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/index-vue.js" charset="utf-8"></script>

</body>

<script>

      /**ATUALIZAR TOTAL 2**/
  
     function updateSub(productId) {
        // The existing code to update the sub-total
        var quantity = parseInt(document.getElementById('prod' + productId).value);

          let preco =  $("#preco"+productId).html();
          

       // var price = parseFloat('<?=$linhas['valor_venda']?>');
        var price = parseFloat(preco);

        var subTotal = (price * quantity).toFixed(2);
        document.getElementById('sub_total_' + productId).innerText = subTotal;

        // Update the value of $sub in PHP, so it's up-to-date when generating the page
        <?php $sub = ' + subTotal + '; ?>

       // console.log(price);
    }

    function updateSubTotal() {
        var total = 0;
     

        <?php foreach ($_SESSION['carrinho'] as $id => $qtd) { ?>
            var quantity = parseInt(document.getElementById('prod<?=$id?>').value);
            var qtd = parseInt(<?=$qtd?>);
            var preco = parseFloat(document.getElementById('sub_total_<?=$id?>').innerText);
            var price = parseFloat('<?=$linhas['valor_venda']?>');
            var subTotal = (preco * qtd).toFixed(2);
            total += parseFloat(subTotal);

            // console.log(qtd);

        <?php } ?>

        // Update the value of $total in PHP, so it's up-to-date when generating the page
        <?php $total = ' + total + '; ?>

        // Update the displayed total value in the corresponding span
        document.getElementById('total_span').innerText = total.toFixed(2);
    }


</script>




</html>
