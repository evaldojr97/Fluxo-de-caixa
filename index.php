<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">-FLUXO DE CAIXA-</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="./pages/openingBalance.php">SALDO INICIAL</a>
                <a class="nav-item nav-link" href="#">CONTAS A PAGAR</a>
                <a class="nav-item nav-link" href="#">CONTAS A RECEBER</a>
                <a class="nav-item nav-link" href="#">PAGAMENTO EM CAIXA</a>
                <a class="nav-item nav-link" href="#">RELATÓRIO DO DIA</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="container">
        <div class="row">
            <article class="col-md-12">
                <h1>Configure seu saldo inicial para abertura do caixa</h1>
            </article>
        </div>
    </div>
</section>

<?php
    $db = open_database();

    if ($db) {
        echo '<h1>Banco de Dados Conectado!</h1>';
    } else {
        echo '<h1>ERRO: Não foi possível Conectar!</h1>';
    }
?>

<?php include(FOOTER_TEMPLATE); ?>