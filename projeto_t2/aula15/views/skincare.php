<!-- Cabeçalho INICIO-->
<?php 
include './componentes/header.php';
include '../conexao.php'; 
?>

<!-- Cabeçalho FIM-->

<!-- Conteudo do SITE INICIO-->
<div class="container">
    <h1>Página Skim Care</h1>
    <p>Cuidados com a pele, uma rotina que geralmente inclui limpeza, tonificação, hidratação e proteção solar</p>

    <div class="row">

        <?php
        $sql = "SELECT * FROM produtos WHERE categoria_produto='skin'";
        $resultado = mysqli_query($conexao, $sql);
        ?>
        <?php
        while ($linha = mysqli_fetch_assoc($resultado)) {
            
            echo '<div class="card m-2" style="width: 18rem;">
                    <img src="'.BASE_URL.'public/imagens/produtos/'.$linha["img"].' " class="card-img-top" alt="...">
                    
                    <div class="card-body">
                        <h5 class="card-title"> '. $linha["nome_produto"] .' </h5>
                        <p class="card-text"> ' . $linha["descricao_produto"] . ' </p>
                        <p class="card-text"> ' . $linha["valor_produto"] . ' </p>
                        <a href="#" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>';
        }
        ?>



    </div>

</div>
<!-- Conteudo do SITE SIM-->

<!-- Rodapé INICIO-->
<?php include './componentes/footer.php' ?>
<!-- Rodapé FIM-->