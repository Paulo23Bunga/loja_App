
<?php
session_start();
$conexao = mysqli_connect('localhost','root','','tb_produto');
mysqli_set_charset($conexao, "utf8");

if (!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = array();
  echo $_SESSION['carrinho'];
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



            <?php
                      if(isset($_SESSION['carrinho']) OR isset($_GET['carrinho'])){
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
       
     