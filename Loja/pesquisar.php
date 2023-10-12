<?php
   session_start();
   


$sNome = "localhost";
$uNome = "root";
$pass = "";
$db_nome = "tb_produto";

try {
    //code...
  //  $conexao  = new \PDO("mysql:host=$sNome;dbname=$db_nome", $uNome, $pass);
    $conexao  = new PDO("mysql:host=$sNome;dbname=$db_nome", $uNome, $pass);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    //throw $th;
    echo "Connexao Falhada : ". $e->getMessage();
}


if(isset($_POST['key'])){
    $nome = "%".$_POST['key']."%";
$query = $conexao->prepare('SELECT * FROM tb_produto WHERE nome_produto LIKE ? OR categoria LIKE ?');
$query->execute([$nome, $nome]);
//$dados = $query->fetch(PDO::FETCH_ASSOC);
//print_r($dados);
if ($query->rowCount() > 0) {
    $usuarios = $query->fetchAll();

    foreach ($usuarios as $usuario) {
      //  if($usuario['id_prestador'] == $_SESSION['id_cliente']) continue;

        echo "

          <input class='list-group-item-check' type='radio' name='verifica' id='verifica$usuario[id_produto]' value=''>
  <label class='list-group-item py-3 d-flex align-items-center justify-content-between' for='verifica$usuario[id_produto]'>
    <div class='d-flex align-items-center'>
       <img src='assets/img/$usuario[imagem_produto]' width='55' height='55' class='rounded'>
    <div class='px-2'>
      <span class='d-block small'>
        $usuario[nome_produto]
    </span>
    <span class='d-block small opacity-50'>
        Preço: $usuario[valor_venda]
    </span>
    </div>
    </div>
   
    <a href='carrinho.php?acao=add&id=$usuario[id_produto]' class='badge rounded-pill bg-danger text-light'>Comprar -></a>
  </label>
    
        ";
    }

    
} else{
   
    echo "
    <div class='alert alert-secondary alert-dismissible fade show' role='alert'>
    <i class='bi bi-person-x-fill' style='font-size: 3rem;'></i>    
    resultado de busca
    <b>".htmlspecialchars($_POST['key']) ."</b> não encontrado
 </div>      
    "; 
}

}else{
/*    echo "
    <div class='alert alert-info alert-dismissible fade show' role='alert'>
    <i class='bi bi-person-x-fill d-block' style='font-size: 3rem;'></i>    
        não foram achados nehum dados da pesquisa...
 </div>      
    "; */
} 