<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\warrantie\form_field.php', 'Line: 2', true)) : (NULL);
// myPrint(FORM_DEFAULT, 'Teste', true);
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
    'default' => '0,00',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Data da Garantia Obrigatório',
    'with_set' => true
];
$data_garantia_label = [
    'label_text' => 'Data da Garantia',
    'id' => 'data_garantia',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_garantia = [
    'data' => [
        'type' => 'date',
        // 'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'data_garantia',
        'id' => 'data_garantia',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Data da Garantia',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'data_garantia',
    'default' => 'Data da Garantia',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Data da Garantia Obrigatório',
    'with_set' => true
];
$servico_label = [
    'label_text' => 'Serviço',
    'id' => 'servico',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$servico = [
    'name' => 'servico',
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
        'id' => 'servico',
        // 'readonly' => 'readonly'
    ]
];
$produto_label = [
    'label_text' => 'Produto',
    'id' => 'produto',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$produto = [
    'name' => 'produto',
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
        'id' => 'produto',
        // 'readonly' => 'readonly'
    ]
];
$observacoes_label = [
    'label_text' => 'Observações',
    'id' => 'observacoes',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$observacoes = [
    'data' => [
        'name'  => 'observacoes',
        'id'    => 'observacoes',
        'value' => set_value('observacoes', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Observações é Obrigatório',
];
?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $preco_label) ?>
            <?= view('field/form_input', $preco) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $data_garantia_label) ?>
            <?= view('field/form_input', $data_garantia) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $servico_label) ?>
            <?= view('field/form_dropdown', $servico) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $produto_label) ?>
            <?= view('field/form_dropdown', $produto) ?>
        </div>
    </div>
</div>
<div class="collapse" id="collapseWarranties">
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="mb-12">
                <?= view('field/form_label', $observacoes_label) ?>
                <?= view('field/form_textarea', $observacoes) ?>
            </div>
        </div>
    </div>
</div>