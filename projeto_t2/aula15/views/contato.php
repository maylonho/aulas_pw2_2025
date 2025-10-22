<!-- Cabeçalho INICIO-->
<?php include './componentes/header.php' ?>
<!-- Cabeçalho FIM-->

<!-- Conteudo do SITE INICIO-->
<div class="container">
    <h1>Fale conosco</h1>
    <form method="POST" action="<?=BASE_URL?>php/proc_contato.php">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome completo</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea rows="5" class="form-control" name="mensagem"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
<!-- Conteudo do SITE SIM-->

<!-- Rodapé INICIO-->
<?php include './componentes/footer.php' ?>
<!-- Rodapé FIM-->