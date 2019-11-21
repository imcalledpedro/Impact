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
      .btn-outline-info{border-color: #5092c2 !important;}
      .btn-outline-info:hover{background-color: #5092c2 !important;}
      body{
        font-family: 'Lexend Deca', sans-serif;
      }
    </style>

    <title>Editar Publicação | Impact</title>
  </head>
  <body class=" mt-5 pt-1 bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-white shadow">
      <a class="navbar-toggler text-info border-radius border-info mr-2" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <i class="fas fa-bars"></i></i></a>
      </a>

      <a id="navbar-brand" class="navbar-brand" href="<?php echo base_url(); ?>dashboard"><img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" height="30"></a>
      <div id="profile" class="dropleft ml-auto">
        <a class="btn btn-outline-info" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
              <?php echo $this->session->userdata('nome'); ?>
            </span>
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item text-muted" href="<?php echo base_url();?>dashboard">
            <i class="fas fa-tachometer-alt"></i> Painel de Controle</a>
          <a class="dropdown-item text-muted" href="<?php echo base_url(); ?>dashboard/encerrar">
            <i class="fas fa-sign-out-alt"></i> Sair</a>
        </div>
      </div> 
    </nav>

    <div class="container  mt-5 pt-1">
      <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto">
          <div class="card shadow m-3 border-right-0 border-top-0 border-bottom-0 border-info">
            <!-- Editar perfil -->
              <div class="card-header bg-transparent border-0">
                <h5><i class="fas fa-edit"></i> Editar Publicação</h5>
              </div>

              <div class="card-body">
                 <form class="form-signin" method="post" action="<?php echo base_url() ?>dashboard/publicacoes/editar/dados">

                <div class="form-label-group mb-4">
                  <label for="inputTitulo">Título</label>
                  <input name="titulo" value="<?php  echo $titulo; ?>" type="text" id="inputTitulo" class="form-control" placeholder="Titulo">
                </div>

                <div class="form-label-group mb-4">
                  <label for="inputDescricao">Descrição</label>
                  <textarea name="descricao" type="textarea" id="inputDescricao" class="form-control" placeholder="Descrição" rows="3"><?php echo $descricao; ?></textarea>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputTexto">Texto</label>
                  <textarea name="texto_completo" type="text" id="inputTexto" class="form-control" placeholder="Texto" rows="10"><?php echo $texto_completo; ?></textarea>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputDate">Data</label>
                  <input name="data_publicacao" value="<?php echo $data_publicacao; ?>" type="text" id="inputDate" class="form-control"></input>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputAnexo">Anexo</label>
                  <input name="anexo" value="<?php echo $anexo; ?>" type="text" id="inputAnexo" class="form-control"></input>
                </div>

                <div class="form-label-group mb-4">
                  <label for="inputId">ID</label>
                  <input name="id" value="<?php echo $id;?>" type="text" id="inputId" class="form-control" placeholder="ID" readonly>
                </div>

                <button class="btn btn-lg btn-info btn-block text-uppercase" type="submit">Salvar</button>

              </form>
              </div>
          </div> 
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

