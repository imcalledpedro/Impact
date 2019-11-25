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
      .bg-info{background-color: #5092c2 !important;}
      .badge-info{background-color: #5092c2 !important;}
      .btn-info{background-color: #5092c2 !important;}
      .btn-outline-info{border-color: #5092c2 !important;}
      .btn-outline-info:hover{background-color: #5092c2 !important;}
      .border-info{border-color: #5092c2 !important;}
      .text-info{color: #5092c2 !important;}
      body{
        font-family: 'Lexend Deca', sans-serif;
      }
    </style>

    <title>Painel de Controle | Impact</title>
  </head>
  <body class=" mt-5 pt-1">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-white">
      <a class="navbar-toggler text-info border-radius border-info mr-2" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <i class="fas fa-bars"></i></i></a>
      </a>

      <a id="navbar-brand" class="navbar-brand" href="#"><img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" height="30"></a>
      <div id="profile" class="dropleft ml-auto">
        <a class="btn btn-outline-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nome'); ?></span>
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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
            <a class="nav-link text-secondary" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-tachometer-alt"></i> Painel de Controle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="<?php echo base_url(); ?>dashboard/publicacoes"><i class="fas fa-columns"></i> Publicações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-secondary" href="<?php echo base_url(); ?>dashboard/produtos"><i class="fas fa-shopping-basket"></i> Produtos</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0 pt-1">
      <!-- Card Tabela -->
          <div class="col-12">
            <div class="card shadow m-3 border-right-0 border-top-0 border-info">
              <!-- nome -->
              <div class="card-header bg-transparent border-0 mx-3">
                <div class="row">
                  <h5><i class="fas fa-columns"></i> Publicações</h5>
                  <a href="<?php echo base_url(); ?>dashboard/publicacoes/adicionar" class="btn btn-info ml-auto"><small><i class="fas fa-plus"></i> Adicionar</small></a>
                </div>
                <div class="row">
                  <a href="<?php echo base_url(); ?>#publicacoes"  target="_blank" class=" mx-1"><small><i class="fas fa-eye"></i> Visualizar como cliente</small></a>
                </div>
              </div>
              <!-- tabela -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-hover text-center table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data</th>
                        <!-- <th scope="col">Anexo</th> -->
                        <th scope="col" style="width: 10%">Ações</th>
                      </tr>
                    </thead>
                    <tbody class="roboto">

                      <?php
                        $contador = 0;
                        foreach ($publicacoes as $publicacao) { ?>
                          <tr>
                            <td><?= $publicacao->titulo; ?></td>
                            <td><?php echo character_limiter($publicacao->descricao, 20); ?></td>
                            <td><?php echo $publicacao->data_publicacao; ?></td>
                            <!-- <td><a class="text-info" href="<?php //echo $publicacao->anexo; ?>" target="_blank">Acessar</a></td> -->
                            <td>
                              <a class="text-info mx-1" href="<?php echo base_url() ?>dashboard/publicacoes/editar/?id=<?php echo $publicacao->id; ?>"><i class="fas fa-pen text-warning"></i></a>

                              <!-- Button trigger modal -->
                              <a data-toggle="modal" data-target="#exampleModal<?php echo $publicacao->id; ?>">
                                <i class="fas fa-trash text-danger"></i>
                              </a>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal<?php echo $publicacao->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header border-0">
                                      <!-- <h5 class="modal-title" id="exampleModalLabel">Excluir</h5> -->
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Deseja excluir permanentemente "<?php echo $publicacao->titulo; ?>"?</p>
                                      
                                    </div>
                                    <div class="modal-footer border-0">
                                      <a class="btn btn-sm btn-secondary text-white" data-dismiss="modal">Cancelar</a>
                                      <a class="btn btn-sm btn-danger mx-1" href="<?php echo base_url() ?>dashboard/publicacoes/deletar/?id=<?php echo $publicacao->id; ?>">
                                        Excluir
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>

                        

                      <?php $contador++;
                        }
                      ?>

                    </tbody>
                  </table>
                  <div class="col text-muted">
                      Registros: <?php echo $contador; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- fim card tabela -->
    </div>

<!-- Modal -->
                              <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Excluir Publicação</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Deseja excluir a publicação permanentemente?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                      <a href="deletarPublicacao/?id=<?php //echo ${"modal$publicacao->id"}; ?>" class="btn btn-danger">Excluir</a>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

