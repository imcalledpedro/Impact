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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/sidebar.css">

    <style type="text/css">
      .roboto {font-family: 'Roboto', sans-serif}
      .border-radius {border-radius: 5rem}
      .border-radius-sm {border-radius: 1em}
      body{
        font-family: 'Lexend Deca', sans-serif;
      }
    </style>

    <title>Painel de Controle | Impact</title>
  </head>
  <body class=" mt-5 pt-1">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-white">
      <a class="navbar-toggler text-primary border-radius border-primary mr-2" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <i class="fas fa-bars"></i></i></a>
      </a>


      <a id="navbar-brand" class="navbar-brand" href="#"><i class="fas fa-cloud"></i> Impact</a>
      <div id="profile" class="dropleft ml-auto">
        <a class="btn btn-outline-primary border-radius" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pedro Lucas</span>
            <i class="fas fa-user"></i>
            <!-- <img class="img-profile rounded-circle" src=""> -->
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item text-muted" href="#">
            <i class="fas fa-user"></i> Perfil</a>
          <a class="dropdown-item text-muted" href="#">
            <i class="fas fa-cog"></i> Ajustes</a>
          <a class="dropdown-item text-muted" href="encerrar">
            <i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
      </div> 
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
      
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-secondary" href="dashboard"><i class="fas fa-tachometer-alt"></i> Painel de Controle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="publicacoes"><i class="fas fa-columns"></i> Publicações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-secondary" href="produtos"><i class="fas fa-shopping-basket"></i> Produtos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0 pt-1 .bg-light">
      <!-- Card Tabela -->
          <div class="col-12">
            <div class="card shadow m-3 border-right-0 border-top-0 border-bottom-0 border-primary">
              <!-- nome -->
              <div class="card-header bg-transparent border-0">
                Produtos
              </div>
              <!-- tabela -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover text-center ">
                    <thead>
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Loja</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody class="roboto">

                      <?php
                        $contador = 0;
                        foreach ($produtos as $produto) { ?>
                          <tr>
                            <td><?= $produto->nome; ?></td>
                            <td><?php echo $produto->descricao; ?></td>
                            <td><?php echo $produto->categoria; ?></td>
                            <td><a href="<?php echo $produto->link; ?>" target="_blank">Acessar</a></td>
                            <td>
                              <a href="/produtos/detalhar/<?php echo $produto->id; ?>"><i class="fas fa-eye m-1"></i></a>
                              <a href="/produtos/editar/<?php echo $produto->id; ?>"><i class="fas fa-edit m-1"></i></a>
                              <a href="/produtos/deletar/<?php echo $produto->id; ?>"><i class="fas fa-trash-alt m-1"></i></a>
                            </td>
                          </tr>
                      <?php $contador++;
                        }
                      ?>
                    </tbody>
                  </table>

                  <!-- info + paginação -->
                  <div class="row ml-1 mr-1">

                    <div class="col text-muted">
                      Registros: <?php echo $contador ?>
                    </div>

                    <ul class="pagination col justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- fim card tabela -->
    </div>

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

