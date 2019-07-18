<?php require_once('../config.php'); ?>
<?php include(HEADER_TEMPLATE); ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">-FLUXO DE CAIXA-</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="openingBalance.php">SALDO INICIAL</a>
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
                <h1>Quanto há de dinheiro para a abertura do caixa?</h1>
            </article>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-4">
                <form class="form-inline" method="post">
                    <div class="form-group mx-sm-3 mb-2">
                        <input class="form-control" type="text" name="saldo" placeholder="Ex. : 1000.00">
                    </div>
                    <button class="btn btn-dark mb-2" name="entrar" value="entrar">Abrir Caixa</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include(FOOTER_TEMPLATE); ?>