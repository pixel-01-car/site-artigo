<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PAC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autor
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-autor">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-autor">Listar</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Artigos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-artigo">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-artigo">Listar</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-dark" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
  

    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <?php
            include('config.php');
            switch(@$_REQUEST['page']){
              //Autor
              case 'cadastrar-autor':
                include('cadastrar-autor.php');
                break;
                case 'listar-autor':
                  include('listar-autor.php');
                  break;
                  case 'editar-autor':
                    include('editar-autor.php');
                    break;
                    case 'salvar-autor':
                      include('salvar-autor.php');
                      break;
                      //Categoria
                      case 'cadastrar-categoria':
                        include('cadastrar-categoria.php');
                        break;
                        case 'listar-categoria':
                          include('listar-categoria.php');
                          break;
                          case 'editar-categoria':
                            include('editar-categoria.php');
                            break;
                            case 'salvar-categoria':
                              include('salvar-categoria.php');
                              break;
                              //Artigo
                              case 'cadastrar-artigo':
                                include('cadastrar-artigo.php');
                                break;
                                case 'listar-artigo':
                                  include('listar-artigo.php');
                                  break;
                                  case 'editar-artigo':
                                    include('editar-artigo.php');
                                    break;
                                    case 'salvar-artigo':
                                      include('salvar-artigo.php');
                                      break;
                                      default:
                                      print "<h1>Publicação de Artigos e Categorias (Blog/Notícias)</h1>";
            }
          ?>
        </div>
      </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
