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
      .banner-imagem {
        height: 400px;

      }
    </style>

    <title>Home | IMPACT</title>
  </head>
  <body class=" mt-5 pt-1">

    <!-- DarkMode Button -->
    <button id="dark-mode" class="btn btn-warning text-black-50 floating2"><i class="fas fa-adjust"></i></button>

    <!-- Login button -->
    <a title="Área do Administrador" href="<?php echo base_url(); ?>/login" class="btn btn-warning text-black-50 floating"><i class="fas fa-lock"></i></a>

    <?php $this->load->view('navbar'); ?>

    <!-- <section id="Home">
        <div class="container-fluid mt-4">
            <div class="carousel bg-info shadow-lg rounded-lg">
                <div class="row align-items-center">
                    <div class="col-md-12 h-25">
                        <img src="" class="img-fluid rounded-lg">
                    </div>
                </div>
                <span id="publicacoes"></span>
            </div>
        </div>
    </section> -->
    
    <section class="mt-5 pt-3">

        <h1 id="p-titulo" class="text-center mt-5 mb-5"><?php echo $titulo; ?></h1>
        <p class="text-center col-8 mx-auto"><?php echo $descricao ?></p>
        
        <div class="col-5 mt-5 mx-auto">
          <p class="text-center text-muted col-8 mx-auto"><small>
          <?php 
            $sampleDate = $data;
            $convertDate = date("d/m/Y", strtotime($sampleDate));                                  
            echo "Data de publicação: ",$convertDate;
          ?>
        </small></p>
        <hr></div>

        <div class="container-fluid my-5">
            <div class="container">
                <div class="row">
                        <!-- Card de Postagem -->
                        <div class="col-md-10 mx-auto">
                          <div class=" mb-3">
                            <div class="card-body">
                              <img class="card-img-top" src="<?php echo $imagem;?>">
                              <div class="m-5"></div>
                              <p class="card-text"><?php echo $texto;?></p>
                            </div>
                          </div>
                        </div>
                        <!-- FIM Card de Postagem -->
                  
                </div><span id="contato"></span>
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
          $('#p-data').toggleClass('text-white-50');
          $('#p-desc').toggleClass('text-white-50');
          $('#p-desc').toggleClass('text-muted');
          $('#p-titulo').toggleClass('text-light');
          $('.navbar').toggleClass('bg-light navbar-light');
          $('.navbar').toggleClass('bg-dark navbar-dark');
          $('body').toggleClass('bg-dark text-white');
          $('.card').toggleClass('bg-dark');
          $('.card').toggleClass('border-top-0 border-bottom-0 border-right-0');
          $('input').toggleClass('bg-dark text-white border-info');
          $('textarea').toggleClass('bg-dark text-white border-info');
          if ($('.navbar').hasClass('bg-dark')) {
            $('#logo').attr('src','<?php echo base_url();?>/assets/img/logo-white.png');
          }else{
            $('#logo').attr('src','<?php echo base_url();?>/assets/img/logo.png');
          }
        }

        $('#dark-mode').click(function(event) {
          event.preventDefault();
          $('#p-data').toggleClass('text-white-50');
          $('#p-titulo').toggleClass('text-light');
          $('#p-desc').toggleClass('text-white-50');
          $('#p-desc').toggleClass('text-muted');
          $('.navbar').toggleClass('bg-light navbar-light');
          $('.navbar').toggleClass('bg-dark navbar-dark');
          $('body').toggleClass('bg-dark text-white');
          $('.card').toggleClass('bg-dark');
          $('.card').toggleClass('border-top-0 border-bottom-0 border-right-0');
          $('input').toggleClass('bg-dark text-white border-info');
          $('textarea').toggleClass('bg-dark text-white border-info');
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