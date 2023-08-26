<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\car\form_field_os.php', 'Line: 2', true)) : (NULL);
// myPrint(FORM_DEFAULT, 'Teste', true);
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
$cliente_label = [
    'label_text' => 'Cliente',
    'id' => 'cliente',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$cliente = [
    'name' => 'cliente',
    'options' => [
        '001' => 'Gustavo Hammes',
        '002' => 'Maria Joaoa',
        '003' => 'Empresa Coca Cola',
        '004' => 'Jose Silva',
        '005' => 'João Rodrigo',
    ],
    'selected' => '004',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'cliente',
        // 'readonly' => 'readonly'
    ]
];
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
    'options' => [
        '001' => 'Voksvagem',
        '002' => 'Fiat',
        '003' => 'Ford',
        '004' => 'Chevrolet',
        '005' => 'Hiunday',
    ],
    'selected' => '004',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'fabricante',
        // 'readonly' => 'readonly'
    ]
];
$modelo_label = [
    'label_text' => 'Moldelo',
    'id' => 'modelo',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$modelo = [
    'name' => 'modelo',
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
        'id' => 'modelo',
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
    'data' => [
        'type' => 'text',
        'name' => 'cor',
        'id' => 'cor',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        'required' => 'required'
    ],
    'field' => 'cor',
    'default' => 'Descreva a cor do veículo',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Cor Obrigatório',
    'with_set' => true
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
$excluido_label = [
    'label_text' => 'Excluído',
    'id' => 'criado_em',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$excluido = [
    'data' => [
        'type' => 'date',
        'name' => 'excluido_em',
        'id' => 'excluido_em',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        // 'required' => 'required',
        'disabled' => 'disabled'
    ],
    'field' => 'excluido_em',
    'default' => '',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Excluído em  Obrigatório',
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
            <?= view('field/form_label', $cliente_label) ?>
            <?= view('field/form_dropdown', $cliente) ?>
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
<div class="collapse" id="collapseCarOs">
    <div class="row">
        <div class="col-12 col-sm-12">
            <?= view('field/form_label', $descricao_label) ?>
            <?= view('field/form_textarea', $descricao) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $placa_label) ?>
                <?= view('field/form_input', $placa) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $cor_label) ?>
                <?= view('field/form_input', $cor) ?>
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
                <?= view('field/form_label', $atualizado_label) ?>
                <?= view('field/form_input', $atualizado) ?>
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
            <div class="mb-12">
                <?= view('field/form_label', $criado_label) ?>
                <?= view('field/form_input', $criado) ?>
            </div>
        </div>
    </div>
</div>