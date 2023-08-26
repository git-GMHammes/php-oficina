<?php
$form = [
    'action' => 'saotiago/service/api/create_os',
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
        Novo Vínculo
            <?php (DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\service\create_form_os.php', 'Line: 23', true)) : (NULL);?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Vincular [Serviço/OS]</h5>
            <?= view('saotiago/service/form_field_os') ?>
        </div>
        <div class="card-footer text-muted">
        &emsp;<?= view('field/form_submit', $submit) ?> &emsp;
            <a class="btn btn-outline-warning" href="<?= base_url()?>#" role="button">Cancelar</a>
        </div>
    </div>
</div>
<?= view('field/form_close', $form_close); ?>