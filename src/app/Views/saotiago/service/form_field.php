<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\service\form_field.php', 'Line: 2', true)) : (NULL);
$servico_label = [
    'label_text' => 'Nome',
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
        'placeholder' => 'Nome',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'servico',
    'default' => 'Nome',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Nome Obrigatório',
    'with_set' => true
];
$veiculo_label = [
    'label_text' => 'Veículo',
    'id' => 'veiculo',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$veiculo = [
    'name' => 'veiculo',
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
        'id' => 'veiculo',
        // 'readonly' => 'readonly'
    ]
];
$n_os_label = [
    'label_text' => 'Ordem de Serviço',
    'id' => 'n_os',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$n_os = [
    'name' => 'n_os',
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
        'id' => 'n_os',
        // 'readonly' => 'readonly'
    ]
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
$descricao_label = [
    'label_text' => 'Descrição',
    'id' => 'descricao',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$descricao = [
    'data' => [
        'name'  => 'descricao',
        'id'    => 'descricao',
        'value' => set_value('descricao', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Descrição é Obrigatório',
];
?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $servico_label) ?>
            <?= view('field/form_input', $servico) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $preco_label) ?>
            <?= view('field/form_input', $preco) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $veiculo_label) ?>
            <?= view('field/form_dropdown', $veiculo) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $n_os_label) ?>
            <?= view('field/form_dropdown', $n_os) ?>
        </div>
    </div>
</div>
<div class="collapse" id="collapseService">
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="mb-12">
                <?= view('field/form_label', $descricao_label) ?>
                <?= view('field/form_textarea', $descricao) ?>
            </div>
        </div>
    </div>
</div>