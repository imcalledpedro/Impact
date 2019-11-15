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

    <title>Home | IMPACT</title>
  </head>
  <body class=" mt-5 pt-1">

    <!-- DarkMode Button -->
    <button id="dark-mode" class="btn btn-warning text-black-50 floating2"><i class="fas fa-adjust"></i></button>

    <!-- Login button -->
    <a title="Área do Administrador" href="login" class="btn btn-warning text-black-50 floating"><i class="fas fa-lock"></i></a>

    <nav class="navbar navbar-expand-lg  fixed-top shadow navbar-light bg-light px-5">

    	<a id="navbar-brand" class="navbar-brand ml-5" href="#">
         <img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" height="40">   
      </a>

  	  <a class="navbar-toggler text-primary border-primary py-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  	    <i class="fas fa-bars"></i></i>
  	  </a>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto mr-5">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#publicacoes" data-smooth="#publicacoes">Publicações</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="produtos">Produtos</a>
	      </li>
        <li class="nav-item">
          <a class="nav-link" href="#contato">Contato</a>
        </li>
	    </ul>
	  </div>
	</nav>


    <section id="Home">
        <div class="container-fluid mt-4">
            <div class="carousel bg-info shadow-lg rounded-lg p-5">
                <div class="row align-items-center">
                    <div class="col-md-6">

                        <h2 class="text-center text-white">Nós lutamos contra <br>o mundo plastificado.</h2>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url();?>/assets/img/home-impact.png" class="img-fluid">
                    </div>
                </div>
                <span id="publicacoes"></span>
            </div>
        </div>
    </section>

    

    <section class="mt-5">

        <h1 class="text-center mt-5 mb-5">Publicações</h1>
        <div class="col-5 mt-5 mx-auto"><hr></div>

        <div class="container-fluid my-5">
            <div class="container">
                <div class="row">

                  <?php $contador = 0;
                      foreach ($publicacoes as $publicacao) { ?>
                        <!-- Card de Postagem -->
                        <div class="col-md-10 mx-auto">
                          <div class="card mb-3 border-left border-info border-top-0 border-bottom-0 border-right-0 shadow">
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $publicacao->titulo ?></h5>
                              <p class="card-text"><small><?php echo $publicacao->descricao ?></small></p>
                              <a href="publicacao/?id=<?php echo $publicacao->id;?>" class="btn btn-info shadow">Continuar lendo</a>
                              <p class="card-text text-right"><small class="text-muted"><?php 
                                $sampleDate = $publicacao->data_publicacao;
                                $convertDate = date("d/m/Y", strtotime($sampleDate));                                  
                                echo "Data de publicação: ",$convertDate;
                               ?></small></p>
                            </div>
                          </div>
                        </div>
                        <!-- FIM Card de Postagem -->
                  <?php $contador++;}?>
                </div><span id="contato"></span>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h1 class="text-center mt-5 mb-5">Contato</h1>
        <div class="col-5 mt-5 mx-auto"><hr></div>
        <div class="container mt-5">
            <div class="row">
              <div class="card mx-auto mb-5 shadow border-right-0 border-bottom-0 border-top-0 border-info">
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col mb-3">
                        <input type="text" class="form-control" placeholder="Nome">
                      </div>
                      <div class="col mb-3">
                        <input type="text" class="form-control" placeholder="Sobrenome">
                      </div>
                      <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" placeholder="Assunto">
                      </div>
                      <div class="col-md-12 mb-3">
                        <textarea class="form-control" placeholder="Mensagem" rows="5"></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-info shadow-lg">Enviar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3 bg-info">
      <div class="container text-center">
        <span class="text-white">Projeto Impact - IFRN - <i>Campus</i> Natal - Zona Norte</span><br>
        <span class="text-white">Informática para Internet - 3.4111.1v</span><br>
        <span class="text-white">FANT4STIC FOUR</span>
      </div>
    </footer>

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