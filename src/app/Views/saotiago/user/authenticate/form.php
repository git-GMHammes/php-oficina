<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\user\authenticate\form.php', 'Line: 2', true)) : (NULL);
$valor = "Escrevendo um texto";
?>
<?php
$form = [
    'action' => 'saotiago/user/api/authenticate',
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
    'extra' => 'class="btn btn-outline-primary"'
];
?>
<?= view('field/form_open_multipart', $form) ?>
<div class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <?= view('saotiago/user/authenticate/form_field') ?>
        </div>
        <div class="card-footer">
            <?= view('field/form_submit', $submit) ?>&emsp;&emsp;
            <a class="btn btn-outline-primary" href="<?=base_url()?>saotiago/user/endpoint/create" role="button">Novo Cadastro</a>
        </div>
    </div>
</div>
<?= view('field/form_close', $form_close); ?>