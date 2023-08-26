<?php
$form = [
    'action' => 'saotiago/user/api/create',
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
            Cadastrar
            <?php (DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\user\create\create_form.php', 'Line: 23', true)) : (NULL); ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Novo Usuário</h5>
            <?= view('saotiago/user/create/form_field') ?>
        </div>
        <div class="card-footer text-muted">
        &emsp;<?= view('field/form_submit', $submit) ?> &emsp;
            <a class="btn btn-outline-warning" href="<?= base_url()?>saotiago/user/endpoint/authenticate" role="button">Cancelar</a>
        </div>
    </div>
</div>
<?= view('field/form_close', $form_close); ?>