<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca|Roboto&display=swap" rel="stylesheet"> 

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/9207b5b49a.js"></script>

    <!-- Custom CSS -->
    <style type="text/css">
      .roboto {font-family: 'Roboto', sans-serif}
      .border-radius {border-radius: 5rem}
      .border-radius-sm {border-radius: 1em}
      .bg-info{background-color: #5092c2 !important;}
      .badge-info{background-color: #5092c2 !important;}
      .btn-info{background-color: #5092c2 !important;}
      .border-info{border-color: #5092c2 !important;}
      .text-info{color: #5092c2 !important;}
      body{
        font-family: 'Lexend Deca', sans-serif;
      }
    </style>

    <title>Painel de Controle | Impact</title>
  </head>
  <body class=" mt-5 pt-1 bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-white">
      <a class="navbar-toggler text-info border-radius border-info mr-2" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <i class="fas fa-bars"></i></i></a>
      </a>

      <a id="navbar-brand" class="navbar-brand" href="#"><img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" height="30"></a>
      <div id="profile" class="dropleft ml-auto">
        <a class="btn btn-outline-info border-radius" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
              <?php echo $this->session->userdata('nome'); ?>
            </span>
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item text-muted" href="<?php echo base_url(); ?>dashboard/perfil">
            <i class="fas fa-user"></i> Perfil</a>
          <a class="dropdown-item text-muted" href="<?php echo base_url(); ?>dashboard/encerrar">
            <i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
      </div> 
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
      
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-info" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-tachometer-alt"></i> Painel de Controle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo base_url(); ?>dashboard/publicacoes"><i class="fas fa-columns"></i> Publicações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo base_url(); ?>dashboard/produtos"><i class="fas fa-shopping-basket"></i> Produtos</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php 
      $nProdutos = $this->db->query('SELECT * FROM produtos');
      $nPublicacoes = $this->db->query('SELECT * FROM publicacoes');
    ?>

    <div class="container-fluid p-0 pt-1">
      <div class="container-fluid mt-3">
            <div class="carousel bg-info shadow-lg rounded-lg p-5">
                <div class="row justify-content-center align-items-center">
                  <div class="col-md-6">
                    <div class="col-md-12 ">
                      <h2 class="text-center text-white">E aí, <?php echo $this->session->userdata('nome'); ?>! Bem-vindo :D</h2>
                    </div>
                    <div class="col-md-6 mx-auto">
                      <img src="<?php echo base_url();?>/assets/img/home-impact.png" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card shadow m-2 border-top-0 border-right-0 border-bottom-0 border-info">
                      <div class="card-body px-5 py-5 text-center">
                        <h1><span class="badge badge-info"><?php echo $nPublicacoes->num_rows(); ?></span></h1>
                        <i class="fas fa-columns"></i> Pulicações no blog
                      </div>
                    </div>
                    <div class="card shadow m-2 border-top-0 border-right-0 border-bottom-0 border-info">
                        <div class="card-body px-5 py-5 text-center">
                          <h1><span class="badge badge-info"><?php echo $nProdutos->num_rows(); ?></span></h1>
                          <i class="fas fa-shopping-basket"></i> Produtos cadastrados             
                        </div>
                      </div>
                  </div>
                </div>
                <span id="publicacoes"></span>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

