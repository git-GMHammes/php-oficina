<?php
if (session()->get('tokenForm')) {
    $receiveToken = session()->get('tokenForm');
    myPrint($receiveToken, 'www\oficina\app\Views\saotiago\warranties\create_form.php', true);
} else {
    $receiveToken = 'ERRO';
}
$form = [
    'action' => "saotiago/warranties/api/create?tokenForm={$receiveToken}",
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
            <?php (DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\warranties\create_form.php', 'Line: 23', true)) : (NULL); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="text-start">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWarranties" aria-expanded="false" aria-controls="collapseWarranties">
                            <?= view('icon/arrows-expand', ['height' => '15px', 'width' => '15px']); ?>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <h5 class="card-title">Cadastrar Garantia</h5>
                </div>
                <div class="col-12 col-sm-4">
                    &nbsp;
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button onclick="location.reload()" class="btn btn-outline-primary" type="submit">
                    <div style="font-size: 2rem;">
                        <span class="tempo"></span>
                    </div>
                </button>
            </div>
            <?= view('saotiago/warrantie/form_field') ?>
        </div>
        <div class="card-footer text-muted">
            &emsp;<?= view('field/form_submit', $submit) ?> &emsp;
            <a class="btn btn-outline-warning" href="<?= base_url() ?>#" role="button">Cancelar</a>
        </div>
    </div>
</div>
<?= view('field/form_close', $form_close); ?>