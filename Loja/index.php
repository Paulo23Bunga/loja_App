<?php
session_start();
$conexao = mysqli_connect('localhost','root','','tb_produto');
mysqli_set_charset($conexao, "utf8");

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

  <style type="text/css">
    .b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.opacity-50 { opacity: .5; }
.opacity-75 { opacity: .75; }

.list-group {
  width: auto;
 /* max-width: 460px; */
  margin: 4rem auto;
  max-height: 360px;
  overflow-y: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.form-check-input:checked + .form-checked-content {
  opacity: .5;
}

.form-check-input-placeholder {
  pointer-events: none;
  border-style: dashed;
}
[contenteditable]:focus {
  outline: 0;
}

.list-group-checkable {
  display: grid;
  gap: .5rem;
  border: 0;
}
.list-group-checkable .list-group-item {
  cursor: pointer;
  border-radius: .5rem;
}
.list-group-item-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.list-group-item-check:hover + .list-group-item {
  background-color: var(--bs-light);
}
.list-group-item-check:checked + .list-group-item {
  color: #fff;
  background-color: var(--bs-blue);
}
.list-group-item-check[disabled] + .list-group-item,
.list-group-item-check:disabled + .list-group-item {
  pointer-events: none;
  filter: none;
  opacity: .5;
}

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-none d-md-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">loja@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+244 927 148 025</span></i>
      </div>
      <div class="social-links d-md-flex align-items-center position-relative" style="">

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
          <li><a href="#hero">Inicio</a></li>
          <li><a href="#services">Gravatas</a></li>
          <li><a href="#testimonials">Fatos</a></li>
          <li><a href="#team">Blase</a></li>
          <li><a href="#recent-posts">Calças</a></li>
          <li><a href="#contact">Contactos</a></li>
          
          <li><a href="carrinho.php" class="position-relative local"><i class="bi bi-cart4 icones-nav"></i>
            <?php
                      if(isset($_SESSION['carrinho'])){
                        $count = count($_SESSION['carrinho']);
                        echo "

                          <span class='badge bg-danger badge-number position-absolute' style=''>$count</span>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero bg-body">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <img src="assets/img/logo1.jpg" alt="">
      <!--   <h2 class="text-dark"></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p> -->
          <div class="d-flex justify-content-center justify-content-lg-start position-relative">

            <form action="" method="post" class="pesquisa">
              <input type="text" name="pesqui" id="buscarChat" placeholder="O que você procura?"><input type="submit" value="Pesquisar">
            </form>

  <div class="list-group list-group-checkable position-absolute w-100" id="listasms" style="z-index: 99;">
  
</div>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/portfolio/fato1.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">


          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100" >
            <div class="icon-box" style="background-image: url(assets/img/team/fato\ \(4\).jpg); background-size: cover; background-position: center;">
              <div class="icon"><i class="bi bi-eye-fill"></i></div>
              <h4 class="title"><a href="#testimonials" class="stretched-link">Fatos</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box" style="background-image: url(assets/img/team/calsa3.jpg); background-size: cover; background-position: center;">
              <div class="icon"><i class="bi bi-eye-fill"></i></div>
              <h4 class="title"><a href="#recent-posts" class="stretched-link">Calças</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box" style="background-image: url(assets/img/team/fato\ \(40\).jpg); background-size: cover; background-position: center;">
              <div class="icon"><i class="bi bi-eye-fill"></i></div>
              <h4 class="title"><a href="#team" class="stretched-link">Blase</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box" style="background-image: url(assets/img/team/luxo\ \(4\).jpg); background-size: cover; background-position: center;">
              <div class="icon"><i class="bi bi-eye-fill"></i></div>
              <h4 class="title"><a href="#services" class="stretched-link">Gravatas</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">


    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients" hidden>
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Gravatas</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
            <?php
        $sqlitems = "SELECT * FROM tb_produto WHERE categoria = 'Gravata' ORDER BY nome_produto ASC LIMIT 4";
        $resulitems = mysqli_query($conexao, $sqlitems);
        foreach ($resulitems as $key => $value) {
          ?>

          <div class="col-lg-3 col-md-4 col-sm-6" v-for="produto in produtos">
            <div class="service-item  position-relative">
              <div class="" style="min-width: 100%; min-height: 150px;" >

                <img src="assets/img/relogios/<?=$value['imagem_produto']?>" class="w-100" style="min-height: 100%;">
              </div>
               <h3><?=$value['nome_produto']?></h3>
              <p><b>Preço:</b> <?=$value['valor_venda']?><br>
                <b>Decrição:</b> <?=$value['descricao']?></p>
              <a href="carrinho.php?acao=add&id=<?=$value['id_produto']?>" id="<?=$value['id_produto']?>" class="readmore stretched-link">Add Carrinho<i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

            <?php
        }
        ?>

        
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Fatos</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
                <?php
        $sqlitems = "SELECT * FROM tb_produto WHERE categoria = 'Fato' ORDER BY nome_produto ASC";
        $resulitems = mysqli_query($conexao, $sqlitems);
        foreach ($resulitems as $key => $value) {
          ?>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex flex-column align-items-center">
                    <img src="assets/img/team/<?=$value['imagem_produto']?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?=$value['nome_produto']?></h3>
                      <h4 class="text-center"><?=$value['marca']?></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="conteudo d-flex justify-content-around align-items-center">
                    <p>
                      <b>Proço:</b> <?=$value['valor_venda']?> kz<br>
                      <b>Descrição:</b> <?=$value['descricao']?>
                     </p>
                     <p>
                      <a href="carrinho.php?acao=add&id=<?=$value['id_produto']?>">
                        <i class="bi bi-cart4"></i>
                      </a>

                     </p>

                  </div>

                </div>
              </div>
            </div><!-- End testimonial item -->
       <?php
        }
        ?>
        
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Destaques</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <?php
                  $filto = "SELECT * FROM tb_produto GROUP BY categoria ORDER BY categoria ASC";
                  $trazFiltro = mysqli_query($conexao, $filto);
                  while($dadosFriltro = mysqli_fetch_assoc($trazFiltro)){

                
               ?>
              <li data-filter=".<?= $dadosFriltro['categoria'] ?>"><?= $dadosFriltro['categoria'] ?></li>
              <?php 
                }
              ?>
            
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

              <?php
     
        $sqlitems1 = "SELECT * FROM tb_produto ORDER BY nome_produto DESC";
        $dadositems1 = mysqli_query($conexao, $sqlitems1);
          while($resulitems1 = mysqli_fetch_assoc($dadositems1)) {
          ?>

            <div class="col-xl-3 col-md-4 col-sm-6 portfolio-item <?=$resulitems1['categoria']?>">
              <div class="portfolio-wrap">
                <div class="tab-content" id="nav-tabContent">
                  <a href="assets/img/<?=$resulitems1['imagem_produto']?>" data-gallery="portfolio-gallery-app" class="glightbox tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><img src="assets/img/<?=$resulitems1['imagem_produto']?>" style="" class="img-fluid" alt=""></a>
                  <a href="assets/img/team/china (7).jpg" data-gallery="portfolio-gallery-app" class="glightbox tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><img src="assets/img/team/china (7).jpg" class="img-fluid" alt=""></a>
                  <a href="assets/img/team/china (5).jpg" data-gallery="portfolio-gallery-app" class="glightbox tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><img src="assets/img/team/china (5).jpg" class="img-fluid" alt=""></a>
                </div>

                <div class="portfolio-info position-relative">

                  <h4 style=""><a href="#" class="letras" style="" title="More Details"><?=$resulitems1['nome_produto']?></a></h4>
                  <div class="conteudo d-flex justify-content-around align-items-center">
                    <p>
                      <b>Proço:</b> <?=$resulitems1['valor_venda']?>
                     </p>
                     <p>
                      <a href="carrinho.php?acao=add&id=<?=$resulitems1['id_produto']?>">
                        <i class="bi bi-cart4"></i>
                      </a>

                     </p>
                  </div>
                  <p>
                    <div class="nav nav-tabs mb-3 position-absolute d-none" id="nav-tab" role="tablist" style="top: -1em; z-index: 999; border-top-left-radius: 15px; border-top-right-radius: 15px;">
                      <button class="nav-link active bg-black text-black" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"></button>
                      <button class="nav-link bg-danger text-danger" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"></button>
                      <button class="nav-link bg-white text-white" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"></button>
                    </div>
                  </p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
    <?php
        }
        ?>
          
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Blase</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gy-4">

                  <?php
        $sqlitems = "SELECT * FROM tb_produto WHERE categoria = 'Blazer' ORDER BY nome_produto ASC";
        $resulitems = mysqli_query($conexao, $sqlitems);
        foreach ($resulitems as $key => $value) {
          ?>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/<?=$value['imagem_produto']?>" class="img-fluid" alt="">
              <h4><?=$value['nome_produto']?></h4>
              <span>Marca</span><?=$value['marca']?>
              <p><b>Preço:</b> <?=$value['valor_venda']?></p>
              <div class="social">
                <a href="carrinho.php?acao=add&id=<?=$value['id_produto']?>" class=""><i class="bi bi-cart4"></i></a>
                <a href="" class="d-none"><i class="bi bi-heart-fill"></i></a>
                <a href="" class="d-none"><i class="bi bi-star-fill"></i></a>
                <a href="" class=""><i class="bi bi-info-circle-fill"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->
        <?php } ?>

       
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Calças</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
        </div>

        <div class="row gy-4">

                    <?php
        $sqlitems = "SELECT * FROM tb_produto WHERE categoria = 'Calça' ORDER BY nome_produto ASC";
        $resulitems = mysqli_query($conexao, $sqlitems);
        foreach ($resulitems as $key => $value) {
          ?>

          <div class="col-xl-3 col-md-4 col-sm-6">
            <article>

              <div class="post-img">
                <img src="assets/img/team/<?=$value['imagem_produto']?>" alt="" class="img-fluid">
              </div>

              <p class="post-category"><?=$value['marca']?></p>

              <h2 class="title">
                <a href="#"><?=$value['nome_produto']?></a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/team/calsa (1).jpg" alt="" class="img-fluid post-author-img flex-shrink-0 d-none">
                <div class="post-meta d-flex justify-content-between align-items-center w-100">
                  <div class="valor">
                    <p class="post-author">Preço: <span class="text-muted"><?=$value['valor_venda']?> kz</span></p>
                    <p class="post-date">
                      <b>Descrição:</b>
                      <time datetime="2022-01-01"><?=$value['descricao']?></time>
                    </p>
                  </div>
                  <h1>
                    <a href="carrinho.php?acao=add&id=<?=$value['id_produto']?>">
                      <i class="bi bi-cart4"></i>
                    </a>
                    
                  </h1>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

           <?php } ?>

         

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contactos</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Localização:</h4>
                  <p>Luanda / Amgola</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>paulo@mail.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+244 958 554 855</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Aberto:</h4>
                  <p>24/24</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
        <div class="col-6 col-sm-4">
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

<script type="text/javascript">
     /**Prucurar**/
   $("#buscarChat").keyup(function(){
        let dadosPesquisa = $(this).val();
        if(dadosPesquisa == ''){
          $("#listasms").hide();
            return;
        }else{
             $.post("pesquisar.php",
        {
            key: dadosPesquisa
        }, 
        function(data, status){
          $("#listasms").show();
            $("#listasms").html(data);
        }
       );
        }

       // console.log(dadosPesquisa);
   })

        /**Clicado**/
   
    /*  Array.from($('.stretched-link')).forEach((e)=>{
        e.addEventListener('click', (el)=>{
          el.preventDefault();

          var IdBaixar = e.id;
          let acao = 'add';
          let contar = 'carrinho';
       /*  var parametros = {nome: "carrinho"};
        var servico = "carrinho.php";
        $.get(servico,{
          carrinho: contar
        }, function(data, status) {
            alert(status);
            console.log(data);
}); */
  /*         
          $.get("carrinho.php",
          {
            acao: acao,
            id: IdBaixar,
            carrinho: contar
          },
          function(data, status){
            console.log(data);
            alert(status);

          }
          
        ); 

      })
    })
*/
</script>

</html>
