<!-- Cabeçalho do Site -->
<?php
include './componentes/header.php';
require '../conexao.php';
?>

<!-- Final do Cabeçalho do Site -->

<!-- Conteúdo do Site -->
<div class="container">
    <h1>Resenhas de Terror</h1>
    <h4>Aqui você encontra as resenhas mais tenebrosas do 2º ano do MTec do Centro Paula Souza</h4>

    <div class="row">
        <?php
        $sql = "SELECT * FROM obras WHERE categoria='terror'";
        $resultado = mysqli_query($conexao, $sql);
        ?>
        <?php
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo '
                <div class="card m-2" style="width: 18rem;">
                    <img src="'.BASE_URL.'public/imagens/obras/'.$linha["img"].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"> ' . $linha["nome"] . ' </h5>
                        <p class="card-text"> ' . mb_substr($linha['sinopse'],0 , 100)  . ' ...</p>
                        <a href="#" class="btn btn-primary">Ver Mais</a>
                    </div>
                </div>
                ';
        }
        ?>


    </div>


</div>
<!-- Final do Conteúdo do Site -->

<!-- Rodapé do Site -->
<?php include './componentes/footer.php' ?>
<!-- Final do Rodapé do Site -->