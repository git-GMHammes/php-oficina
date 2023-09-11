<?php
if (session()->get('tokenForm')) {
    $receiveToken = session()->get('tokenForm');
    myPrint($receiveToken, 'www\oficina\app\Views\saotiago\customer\create_form.php', true);
} else {
    $receiveToken = 'ERRO';
}
$form = [
    'action' => "saotiago/customer/api/create?tokenForm={$receiveToken}",
    'attributes' => 'class="was-validated"',
    'hidden' => array()
];
$form_close = [
    'extra' => '&nbsp;'
];
$submit = [
    'data' => [
        'name' => 'enviar'
    ],
    'value' => 'Enviar',
    'extra' => 'class="btn btn-outline-success"'
];
?>
<?= view('field/form_open_multipart', $form); ?>
<div class="d-flex justify-content-center">
    <div class="card text-center" style="width: 95%;">
        <div class="card-header">
            Novo Cadastro
            <?php (DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\customer\create_form.php', 'Line: 23', true)) : (NULL); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="text-start">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCustomer" aria-expanded="false" aria-controls="collapseCustomer">
                            <?= view('icon/arrows-expand', ['height' => '15px', 'width' => '15px']); ?>
                        </button>
                        <a class="btn btn-outline-primary" href="#" role="button">Ordens de Serviço</a>
                        <a class="btn btn-outline-primary" href="#" role="button">Listar Veículos</a>
                        <a class="btn btn-outline-primary" href="#" role="button">Vincular Veículo</a>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <h5 class="card-title">Cadastrar Cliente</h5>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="text-end">
                        <a class="btn btn-outline-danger disabled" href="#" role="button">
                            <span class="tempo"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                &nbsp;
            </div>
            <?= view('saotiago/customer/form_field') ?>
        </div>
        <div class="card-footer text-muted">
            &emsp;<?= view('field/form_submit', $submit) ?> &emsp;
            <a class="btn btn-outline-warning" href="<?= base_url() ?>#" role="button">Cancelar</a>
        </div>
    </div>
</div>
<?= view('field/form_close', $form_close); ?>