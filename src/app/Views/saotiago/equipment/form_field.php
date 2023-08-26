<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\warrantie\form_field.php', 'Line: 2', true)) : (NULL);
// myPrint(FORM_DEFAULT, 'Teste', true);
$equipamento_label = [
    'label_text' => 'Equipamento',
    'id' => 'equipamento',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$equipamento = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'equipamento',
        'id' => 'equipamento',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Equipamento',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'equipamento',
    'default' => 'Equipamento',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Equipamento Obrigatório',
    'with_set' => true
];
$ns_equipamento_label = [
    'label_text' => 'Nº de Série',
    'id' => 'ns_equipamento',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$ns_equipamento = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'ns_equipamento',
        'id' => 'ns_equipamento',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Nº de Série',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'ns_equipamento',
    'default' => 'Nº de Série',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Nº de Série Obrigatório',
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
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'modelo',
        'id' => 'modelo',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Modelo',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'modelo',
    'default' => 'Modelo',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Modelo Obrigatório',
    'with_set' => true
];
$cor_label = [
    'label_text' => 'Cor',
    'id' => 'cor',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$cor = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'cor',
        'id' => 'cor',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Cor',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'cor',
    'default' => 'Cor',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Cor Obrigatório',
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
$aplicacao_label = [
    'label_text' => 'Aplicação',
    'id' => 'aplicacao',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$aplicacao = [
    'data' => [
        'name'  => 'aplicacao',
        'id'    => 'aplicacao',
        'value' => set_value('aplicacao', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Aplicação é Obrigatório',
];
$voltagem_label = [
    'label_text' => 'Voltagem',
    'id' => 'voltagem',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$voltagem = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'voltagem',
        'id' => 'voltagem',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Voltagem',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'voltagem',
    'default' => 'Voltagem',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Voltagem Obrigatório',
    'with_set' => true
];
$tensao_label = [
    'label_text' => 'Tensão',
    'id' => 'tensao',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$tensao = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'tensao',
        'id' => 'tensao',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Tensão',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'tensao',
    'default' => 'Tensão',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Tensão Obrigatório',
    'with_set' => true
];
$forca_label = [
    'label_text' => 'Força',
    'id' => 'forca',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$forca = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'forca',
        'id' => 'forca',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Força',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'forca',
    'default' => 'Força',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Força Obrigatório',
    'with_set' => true
];
$data_fabricacao_label = [
    'label_text' => 'Data de Fabricação',
    'id' => 'data_fabricacao',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_fabricacao = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'data_fabricacao',
        'id' => 'data_fabricacao',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Data de Fabricação',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'data_fabricacao',
    'default' => 'Data de Fabricação',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Data de Fabricação Obrigatório',
    'with_set' => true
];
$criado_em_label = [
    'label_text' => 'Criado Em',
    'id' => 'criado_em',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$criado_em = [
    'data' => [
        'type' => 'date',
        // 'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'criado_em',
        'id' => 'criado_em',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Criado Em',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'criado_em',
    'default' => 'Criado Em',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Criado Em Obrigatório',
    'with_set' => true
];
?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $equipamento_label) ?>
            <?= view('field/form_input', $equipamento) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $ns_equipamento_label) ?>
            <?= view('field/form_input', $ns_equipamento) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $modelo_label) ?>
            <?= view('field/form_input', $modelo) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $cor_label) ?>
            <?= view('field/form_input', $cor) ?>
        </div>
    </div>
</div>
<div class="collapse" id="collapseEquipament">
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $descricao_label) ?>
                <?= view('field/form_textarea', $descricao) ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $aplicacao_label) ?>
                <?= view('field/form_textarea', $aplicacao) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $voltagem_label) ?>
                <?= view('field/form_input', $voltagem) ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $tensao_label) ?>
                <?= view('field/form_input', $tensao) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $forca_label) ?>
                <?= view('field/form_input', $forca) ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $criado_em_label) ?>
                <?= view('field/form_input', $criado_em) ?>
            </div>
        </div>
    </div>
</div>