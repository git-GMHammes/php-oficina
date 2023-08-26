<?php
$form = [
    'action' => 'saotiago/workorder/api/create',
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
<?= view('field/form_open_multipart', $form) ?>
<div class="d-flex justify-content-center">
    <div class="card text-center" style="width: 95%;">
        <div class="card-header">
            <?php (DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\workorder\create_form.php', 'Line: 22', true)) : (NULL); ?>
            Novo Cadasttro
        </div>
        <div class="card-body">
        <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="text-start">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWorkOrder" aria-expanded="false" aria-controls="collapseWorkOrder">
                            <?= view('icon/arrows-expand', ['height' => '15px', 'width' => '15px']); ?>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <h5 class="card-title">Cadastrar Ordem de Servico</h5>
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
            <?= view('saotiago/workorder/form_field') ?>
        </div>
        <div class="card-footer text-muted">
            &emsp;<?= view('field/form_submit', $submit) ?> &emsp;
            <a class="btn btn-outline-warning" href="<?= base_url() ?>#" role="button">Cancelar</a>
        </div>
    </div>
</div>
<?= view('field/form_close', $form_close); ?>