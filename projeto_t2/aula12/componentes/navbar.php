<nav class="navbar navbar-expand-lg bg-info navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lula Cosméticos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>paginas/pagina_inicial.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>paginas/sobre.php">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>paginas/skincare.php">Skin Care</a></li>
            <li><a class="dropdown-item" href="#">Maquiágem</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Perfumes</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>paginas/contato.php">Contato</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>