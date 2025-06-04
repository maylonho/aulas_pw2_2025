<!-- Cabeçalho do Site -->
<?php include '../componentes/header.php' ?>
<!-- Final do Cabeçalho do Site -->

<!-- Conteúdo do Site -->
<div class="container">
  <h1 class="mt-5 mb-5">Fale Conosco</h1>
  <form method="POST" action="<?=BASE_URL?>php/proc_contato.php">
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="mensagem" class="form-label">Mensagem</label>
      <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- Fim do Conteúdo do Site -->

<!-- Rodapé do Site -->
<?php include '../componentes/footer.php' ?>
<!-- Final do Rodapé do Site -->