<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../imagens/logo-branco.png" height="40px" /></a>
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
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= BASE_URL ?>paginas/categoria_terror.php">Terror</a></li>
            <li><a class="dropdown-item" href="#">Comédia</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Ação</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>paginas/contato.php">Contato</a>
        </li>
      </ul>
      <form method="POST" action="<?=BASE_URL?>php/proc_login.php" class="d-flex" role="search">
        <input class="form-control me-2 w-25" type="text" placeholder="Usuário" aria-label="Usuário" name="usuario" />
        <input class="form-control me-2 w-25" type="password" placeholder="Senha" aria-label="Senha" name="senha" />
        <button class="btn btn-outline-success" type="submit">Entrar</button>
      </form>
    </div>
  </div>
</nav>