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

    <title>Editar Produto | Impact</title>
  </head>
  <body class=" mt-5 pt-1 bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-white shadow">
      <a class="navbar-toggler text-info border-radius border-info mr-2" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <i class="fas fa-bars"></i></i></a>
      </a>

      <a id="navbar-brand" class="navbar-brand" href="<?php echo base_url(); ?>dashboard"><img id="logo" src="<?php echo base_url();?>/assets/img/logo.png" height="30"></a>
      <div id="profile" class="dropleft ml-auto">
        <a class="btn btn-outline-info border-radius" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
              <?php echo $this->session->userdata('nome'); ?>
            </span>
            <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item text-muted" href="<?php echo base_url();?>dashboard">
            <i class="fas fa-tachometer-alt"></i> Painel de Controle</a>
          <a class="dropdown-item text-muted" href="encerrar">
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
                <h5><i class="fas fa-edit"></i> Editar Produto</h5>
              </div>

              <div class="card-body">
                 <form class="form-signin" method="post" action="">

                <div class="form-label-group mb-4">
                  <label for="inputNome">Nome</label>
                  <input name="nome" value="<?php  ?>" type="text" id="inputNome" class="form-control" placeholder="Nome">
                </div>

                <div class="form-label-group mb-4">
                  <label for="inputDescricaoProduto">Descrição</label>
                  <textarea name="descricaoProduto" value="<?php ?>" type="textarea" id="inputDescricaoProduto" class="form-control" placeholder="Descrição" rows="3"></textarea>
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLink1">Link 1</label>
                  <input name="link1" value="<?php ?>" type="text" id="inputLink1" class="form-control" placeholder="Link 1">
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLink2">Link 2</label>
                  <input name="link2" value="<?php ?>" type="text" id="inputLink2" class="form-control" placeholder="Link 2">
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLink3">Link 3</label>
                  <input name="link3" value="<?php ?>" type="text" id="inputLink3" class="form-control" placeholder="Link 3">
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLink4">Link 4</label>
                  <input name="link4" value="<?php ?>" type="text" id="inputLink4" class="form-control" placeholder="Link 4">
                </div>

                <div class="form-label-group mb-4">
                    <label for="inputLinkImagem">Link da Imagem</label>
                  <input name="linkimagem" value="<?php ?>" type="text" id="inputLinkImagem" class="form-control" placeholder="Link da Imagem">
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

