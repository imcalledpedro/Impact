<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/9207b5b49a.js"></script>

    <!-- Google Fonts Link -->
	  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style type="text/css">
    	* {font-family: 'Lexend Deca', sans-serif}
      html {scroll-behavior: smooth}
      .bg-info{background-color: #5092c2 !important;}
      .btn-info{background-color: #5092c2 !important;}
      .border-info{border-color: #5092c2 !important;}
      .text-info{color: #5092c2 !important;}
      .floating {
        position: fixed;
        bottom: 25px;
        right: 25px;
        z-index: 1060;
        border-radius:30px;
      }
      .floating2 {
        position: fixed;
        bottom: 70px;
        right: 25px;
        z-index: 1060;
        border-radius:30px;
      }
    </style>

    <title>Produtos | IMPACT</title>
  </head>
  <body class=" mt-5 pt-1">

    <!-- DarkMode Button -->
    <button id="dark-mode" class="btn btn-warning text-black-50 floating2"><i class="fas fa-adjust"></i></button>

    <!-- Login button -->
    <a title="Área do Administrador" href="login" class="btn btn-warning text-black-50 floating"><i class="fas fa-lock"></i></a>

    <?php $this->load->view('navbar'); ?>

    <section id="Home">
      <div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url();?>assets/img/escova.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>assets/img/canudo.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        <!-- Transformar isso em um carrosel de imagens (anuncios) -->
        <!-- <div class="container-fluid mt-4">
            <div class="carousel bg-info shadow-lg rounded-lg p-5">
                <div class="row align-items-center">
                    <div class="col-md-6">

                        <h2 class="text-center text-white">Coloque aqui os anúncios (carrousel com slide)</h2>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php //echo base_url();?>/assets/img/home-impact.png" class="img-fluid">
                    </div>
                </div>
                <span id="publicacoes"></span>
            </div>
        </div> -->
    </section>

    <section class="mt-5">
      <!-- <h1 class="text-center mt-5 mb-5">Produtos</h1>
      <div class="col-5 mt-5 mx-auto"><hr></div> -->

      <div class="container-fluid my-5">
          <div class="card p-5">
              <div class="row">
              		<div class="col-md-6">
              			<img src="<?php echo $link_imagem; ?>" class="img-fluid" alt="...">
              		</div>
              		<div class="col">
              			<h1><?php echo $nome; ?></h1>
              			<p><?php echo 'Categoria: '.$categoria; ?></p>
              			<p><?php echo $descricao; ?></p>
              			<ul class="list-group">
						  <li class="list-group-item">Loja 1<a target="_blank" class="btn btn-info float-right" href="<?php echo $link1; ?>">Acessar</a></li>
						  <li class="list-group-item">Loja 2<a target="_blank" class="btn btn-info float-right" href="<?php echo $link2; ?>">Acessar</a></li>
						  <li class="list-group-item">Loja 3<a target="_blank" class="btn btn-info float-right" href="<?php echo $link3; ?>">Acessar</a></li>
						  <li class="list-group-item">Loja 4<a target="_blank" class="btn btn-info float-right" href="<?php echo $link4; ?>">Acessar</a></li>
						</ul>
              		</div>


                     <!--  <div class="card col-12 mx-1 shadow p-2" style="width: 18rem;">
                        <img src="<?php //echo //$link_imagem; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php //echo $nome; ?></h5>
                          <a href="#" class="btn btn-primary">Ver produto</a>
                        </div>
                      </div> -->
              </div>
              <span id="contato"></span>
          </div>
      </div>
    </section>
    
    <?php $this->load->view('rodape'); ?>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">

      $(function(){

        const nightModeStorage = localStorage.getItem('NightMode')

        // caso tenha o valor no localStorage
        if (nightModeStorage) {
          $('.navbar').toggleClass('bg-light navbar-light');
          $('.navbar').toggleClass('bg-dark navbar-dark');
          $('body').toggleClass('bg-dark text-white');
          $('.card').toggleClass('bg-dark');
          $('.card').toggleClass('border-top-0 border-bottom-0 border-right-0');
          $('input').toggleClass('bg-dark text-white border-info');
          $('textarea').toggleClass('bg-dark text-white border-info');
          $('.list-group-item').toggleClass('bg-dark');
          if ($('.navbar').hasClass('bg-dark')) {
            $('#logo').attr('src','<?php echo base_url();?>/assets/img/logo-white.png');
          }else{
            $('#logo').attr('src','<?php echo base_url();?>/assets/img/logo.png');
          }
        }

        $('#dark-mode').click(function(event) {
          event.preventDefault();
          $('.navbar').toggleClass('bg-light navbar-light');
          $('.navbar').toggleClass('bg-dark navbar-dark');
          $('body').toggleClass('bg-dark text-white');
          $('.card').toggleClass('bg-dark');
          $('.card').toggleClass('border-top-0 border-bottom-0 border-right-0');
          $('input').toggleClass('bg-dark text-white border-info');
          $('textarea').toggleClass('bg-dark text-white border-info');
          $('.list-group-item').toggleClass('bg-dark');

          if ($('.navbar').hasClass('bg-dark')) {
            $('#logo').attr('src','<?php echo base_url();?>/assets/img/logo-white.png');
          }else{
            $('#logo').attr('src','<?php echo base_url();?>/assets/img/logo.png');
          }

          if ($(".card").hasClass('bg-dark')) {
            // salva o tema no localStorage
            localStorage.setItem('NightMode', true)
            return
          } else {
            // senão remove
          localStorage.removeItem('NightMode')
          }
          
        });

      });
    </script>
  </body>
</html>