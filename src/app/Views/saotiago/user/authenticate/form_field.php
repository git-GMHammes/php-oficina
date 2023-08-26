<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\user\authenticate\form_field.php', 'Line: 2', true)) : (NULL);
$usuario_label = [
    'label_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/></svg>',
    'id' => 'login',
    'attributes' => [
        'class' => 'label-class'
    ]
];
$usuario = [
    'data' => [
        'type' => 'text',
        'name' => 'usuario',
        'id' => 'usuario',
        'class' => 'form-control form-control-sm',
        'required' => 'required'
    ],
    'field' => 'usuario',
    'default' => 'usuario',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Login Obrigatório',
    'with_set' => true
];
$senha_label = [
    'label_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16"><path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/><path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>',
    'id' => 'senha',
    'attributes' => [
        'class' => 'label-class'
    ]
];
$senha = [
    'data' => [
        'name' => 'senha',
        'id' => 'senha',
        'class' => 'form-control form-control-sm',
        'required' => 'required'
    ],
    'value' => '******',
    'escape' => true
];
?>
<div class="input-group has-validation">
    <span class="input-group-text" id="validationTooltipUsernamePrepend">
        <?= view('field/form_label', $usuario_label) ?>
    </span>
    <?= view('field/form_input', $usuario) ?>
</div>
<div class="container">
    &nbsp;
</div>
<div class="input-group has-validation">
    <span class="input-group-text" id="validationTooltipUsernamePrepend">
        <?= view('field/form_label', $senha_label) ?>
    </span>
    <?= view('field/form_password', $senha) ?>
</div>