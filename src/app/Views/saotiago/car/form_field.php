<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\car\form_field.php', 'Line: 2', true)) : (NULL);
// myPrint(FORM_DEFAULT, 'Teste', true);
// myPrint($result['color'], 'www\oficina\app\Views\saotiago\car\form_field.php', true);
// myPrint($result['manufacturer'], 'www\oficina\app\Views\saotiago\car\form_field.php', true);
// myPrint($result['model'], 'www\oficina\app\Views\saotiago\car\form_field.php');
$foreach_cor = (isset($result['color'])) ? ($result['color']) : (array());
$dropdown_cor[''] = 'Escolha a Cor';
foreach ($foreach_cor as $key => $value_cor) {
    $dropdown_cor[$value_cor['color_br']] = $value_cor['color_br'];
}
$foreach_manufactorer = (isset($result['manufacturer'])) ? ($result['manufacturer']) : (array());
$dropdown_manufactorer[''] = 'Escolha o Fabricante';
foreach ($foreach_manufactorer as $key => $value_manufactorer) {
    $dropdown_manufactorer[$value_manufactorer['manufacturer']] = $value_manufactorer['manufacturer'];
}
$dropdown_model[''] = 'Escolha um modelo';
$foreach_model = (isset($result['model'])) ? ($result['model']) : (array());
foreach ($foreach_model as $key => $value_model) {
    $dropdown_model[$value_model['car_model_description']] = $value_model['car_model_description'];
}
$descricao_label = [
    'label_text' => 'Descrição do Veículo',
    'id' => 'descricao',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$descricao = [
    'data' => [
        'name'  => 'descricao',
        'id'    => 'descricao',
        'value' => set_value('descricao', 'Descreva os detalhes do veículo: Possui Rack, Pneu Careca, Volante Original, Acessórios, Falta Estep. '),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Descrição é Obrigatório',
];
$placa_label = [
    'label_text' => 'Placa',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$placa = [
    'data' => [
        'type' => 'text',
        'name' => 'placa',
        'id' => 'placa',
        'class' => 'form-control form-control-sm',
        'maxlength' => '9',
        'required' => 'required'
    ],
    'field' => 'placa',
    'default' => 'AAA-A0AAA',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Placa Obrigatório',
    'with_set' => true
];
$fabricante_label = [
    'label_text' => 'Fabricante',
    'id' => 'fabricante',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$fabricante = [
    'name' => 'fabricante',
    'options' => $dropdown_manufactorer,
    'selected' => '004',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'fabricante',
        // 'readonly' => 'readonly'
    ]
];
$ano_fabricacao_label = [
    'label_text' => 'Ano de Fabricação',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$ano_fabricacao = [
    'data' => [
        'type' => 'text',
        'name' => 'ano_fabricacao',
        'id' => 'ano_fabricacao',
        'class' => 'form-control form-control-sm',
        'maxlength' => '4',
        'required' => 'required'
    ],
    'field' => 'ano_fabricacao',
    'default' => '0000',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Ano Obrigatório',
    'with_set' => true
];
$modelo_label = [
    'label_text' => 'Modelo',
    'id' => 'modelo',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$modelo = [
    'name' => 'modelo',
    'options' => $dropdown_model,
    'selected' => '003',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'modelo',
        // 'readonly' => 'readonly'
    ]
];
$ano_modelo_label = [
    'label_text' => 'Ano do Modelo',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$ano_modelo = [
    'data' => [
        'type' => 'text',
        'name' => 'ano_modelo',
        'id' => 'ano_modelo',
        'class' => 'form-control form-control-sm',
        'maxlength' => '4',
        'required' => 'required'
    ],
    'field' => 'ano_modelo',
    'default' => '0000',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Ano Obrigatório',
    'with_set' => true
];
$cor_label = [
    'label_text' => 'Cor',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$cor = [
    'name' => 'cor',
    'options' => $dropdown_cor,
    'selected' => '003',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'cor',
        // 'readonly' => 'readonly'
    ]
];
$chassis_label = [
    'label_text' => 'Chassi',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$chassis = [
    'data' => [
        'type' => 'text',
        'name' => 'chassis',
        'id' => 'chassis',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        'required' => 'required'
    ],
    'field' => 'chassis',
    'default' => 'Informe o chassis',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Chassis Obrigatório',
    'with_set' => true
];
$cidade_label = [
    'label_text' => 'Cidade',
    'id' => 'cidade',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$cidade = [
    'name' => 'cidade',
    'options' => [
        '001' => 'Angra',
        '002' => 'Caxias',
        '003' => 'Cantagalo',
        '004' => 'Silva Jardim',
        '005' => 'Petrópolis',
    ],
    'selected' => '003',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'cidade',
        // 'readonly' => 'readonly'
    ]
];
$uf_label = [
    'label_text' => 'UF',
    'id' => 'uf',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$uf = [
    'data' => [
        'type' => 'text',
        'name' => 'uf',
        'id' => 'uf',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        'required' => 'required'
    ],
    'field' => 'uf',
    'default' => 'RJ',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo UF Obrigatório',
    'with_set' => true
];
$status_label = [
    'label_text' => 'Status',
    'id' => 'status',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$status = [
    'name' => 'status',
    'options' => [
        '001' => 'Novo',
        '002' => 'Antigo',
        '003' => 'Usado',
        '004' => 'Semi-novo'
    ],
    'selected' => '003',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'status',
        // 'readonly' => 'readonly'
    ]
];
$criado_label = [
    'label_text' => 'Criado em',
    'id' => 'criado_em',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$criado = [
    'data' => [
        'type' => 'date',
        'name' => 'criado_em',
        'id' => 'criado_em',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        'required' => 'required'
    ],
    'field' => 'criado_em',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Atualizado em  Obrigatório',
    'with_set' => true
];
$atualizado_label = [
    'label_text' => 'Atualizado',
    'id' => 'criado_em',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$atualizado = [
    'data' => [
        'type' => 'date',
        'name' => 'atualizado_em',
        'id' => 'atualizado_em',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        // 'required' => 'required'
    ],
    'field' => 'atualizado_em',
    'default' => '',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Atualizado em  Obrigatório',
    'with_set' => true
];
?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $placa_label) ?>
            <?= view('field/form_input', $placa) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $cor_label) ?>
            <?= view('field/form_dropdown', $cor) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $fabricante_label) ?>
            <?= view('field/form_dropdown', $fabricante) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $modelo_label) ?>
            <?= view('field/form_dropdown', $modelo) ?>
        </div>
    </div>
</div>
<div class="collapse" id="collapseCar">
    <div class="row">
        <div class="col-12 col-sm-12">
            <?= view('field/form_label', $descricao_label) ?>
            <?= view('field/form_textarea', $descricao) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $cor_label) ?>
                <?= view('field/form_dropdown', $cor) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $chassis_label) ?>
                <?= view('field/form_input', $chassis) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $uf_label) ?>
                <?= view('field/form_input', $uf) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $criado_label) ?>
                <?= view('field/form_input', $criado) ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $ano_fabricacao_label) ?>
                <?= view('field/form_input', $ano_fabricacao) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $ano_modelo_label) ?>
                <?= view('field/form_input', $ano_modelo) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $cidade_label) ?>
                <?= view('field/form_dropdown', $cidade) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $status_label) ?>
                <?= view('field/form_dropdown', $status) ?>
            </div>
        </div>
    </div>
</div>