<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\service\form_field_os.php', 'Line: 2', true)) : (NULL);
$os_id_label = [
    'label_text' => 'ID Ordem de serviço',
    'id' => 'os_id',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$os_id = [
    'name' => 'os_id',
    'options' => [
        '001' => 'valor 1',
        '002' => 'valor 2',
        '003' => 'valor 3',
        '004' => 'valor 4',
        '005' => 'valor 5',
    ],
    'selected' => '003',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'os_id',
        // 'readonly' => 'readonly'
    ]
];
$servico_id_label = [
    'label_text' => 'ID Servico',
    'id' => 'servico_id',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$servico_id = [
    'name' => 'servico_id',
    'options' => [
        '001' => 'valor 1',
        '002' => 'valor 2',
        '003' => 'valor 3',
        '004' => 'valor 4',
        '005' => 'valor 5',
    ],
    'selected' => '003',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'servico_id',
        // 'readonly' => 'readonly'
    ]
];
$servico_label = [
    'label_text' => 'Serviço',
    'id' => 'servico',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$servico = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'servico',
        'id' => 'servico',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Serviço',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'servico',
    'default' => 'Serviço',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Serviço Obrigatório',
    'with_set' => true
];
$quantidade_label = [
    'label_text' => 'Quantidade',
    'id' => 'quantidade',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$quantidade = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'quantidade',
        'id' => 'quantidade',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Quantidade',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'quantidade',
    'default' => 'Quantidade',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Quantidade Obrigatório',
    'with_set' => true
];
$preco_label = [
    'label_text' => 'Preço',
    'id' => 'preco',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$preco = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'preco',
        'id' => 'preco',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Preço',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'preco',
    'default' => 'Preço',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Preço Obrigatório',
    'with_set' => true
];
$sub_total_label = [
    'label_text' => 'Sub Total',
    'id' => 'sub_total',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$sub_total = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'sub_total',
        'id' => 'sub_total',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Sub Total',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'sub_total',
    'default' => 'Sub Total',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Sub Total Obrigatório',
    'with_set' => true
];
?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $os_id_label) ?>
            <?= view('field/form_dropdown', $os_id) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $servico_id_label) ?>
            <?= view('field/form_dropdown', $servico_id) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $servico_label) ?>
            <?= view('field/form_input', $servico) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $quantidade_label) ?>
            <?= view('field/form_input', $quantidade) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $preco_label) ?>
            <?= view('field/form_input', $preco) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $sub_total_label) ?>
            <?= view('field/form_input', $sub_total) ?>
        </div>
    </div>
</div>