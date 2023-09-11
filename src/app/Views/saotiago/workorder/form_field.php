<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\workorder\form_field.php', 'Line: 2', true)) : (NULL);
$numero_os_label = [
    'label_text' => 'Numero OS',
    'id' => 'numero_os',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$numero_os = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'numero_os',
        'id' => 'numero_os',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => '0000',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'required' => 'required',
        'disabled' => 'disabled'
    ],
    'field' => 'numero_os',
    'default' => time(),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Dados da Garantia Obrigatório',
    'with_set' => true
];
$usuario_cliente_empresa_label = [
    'label_text' => 'Cliente/Empresa/Usuário',
    'id' => 'usuario_cliente_empresa',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$usuario_cliente_empresa = [
    'name' => 'usuario_cliente_empresa',
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
        'id' => 'usuario_cliente_empresa',
        // 'readonly' => 'readonly'
    ]
];
$veiculo_label = [
    'label_text' => 'Veículo',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
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
$garantia_label = [
    'label_text' => 'Garantia',
    'id' => 'garantia',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$garantia = [
    'name' => 'garantia',
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
        'id' => 'garantia',
        // 'readonly' => 'readonly'
    ]
];
$data_entrada_label = [
    'label_text' => 'Data de Entrada',
    'id' => 'data_entrada',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_entrada = [
    'data' => [
        'type' => 'date',
        // 'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'data_entrada',
        'id' => 'data_entrada',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Data de Entrada',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        // 'readonly' => 'readonly'
        'required' => 'required'
    ],
    'field' => 'data_entrada',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Data de Entrada Obrigatório',
    'with_set' => true
];
$data_inicio_os_label = [
    'label_text' => 'Data Inicio',
    'id' => 'data_inicio_os',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_inicio_os = [
    'data' => [
        'type' => 'date',
        // 'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'data_inicio_os',
        'id' => 'data_inicio_os',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Data Inicio',
        'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'data_inicio_os',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Dados da Garantia Obrigatório',
    'with_set' => true
];
$data_fim_os_label = [
    'label_text' => 'Data do fim',
    'id' => 'data_fim_os',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_fim_os = [
    'data' => [
        'type' => 'date',
        // 'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'data_fim_os',
        'id' => 'data_fim_os',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Data do fim',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        // 'readonly' => 'readonly'
        'required' => 'required'
    ],
    'field' => 'data_fim_os',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Data do fim Obrigatório',
    'with_set' => true
];
$data_saida_label = [
    'label_text' => 'Data de Saída',
    'id' => 'data_saida',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_saida = [
    'data' => [
        'type' => 'date',
        // 'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'data_saida',
        'id' => 'data_saida',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Data de Saída',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        // 'readonly' => 'readonly'
        'required' => 'required'
    ],
    'field' => 'data_saida',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Data de Saída Obrigatório',
    'with_set' => true
];
$situacao_label = [
    'label_text' => 'Situação',
    'id' => 'situacao',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$situacao = [
    'name' => 'situacao',
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
        'id' => 'situacao',
        // 'readonly' => 'readonly'
    ]
];
$descricao_garantia_label = [
    'label_text' => 'Dados da Garantia',
    'id' => 'descricao_garantia',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$descricao_garantia = [
    'data' => [
        'name'  => 'descricao_garantia',
        'id'    => 'descricao_garantia',
        'value' => set_value('descricao_garantia', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Situação é Obrigatório',
];
$descricao_produto_label = [
    'label_text' => 'Dados de Produtos Utilizados',
    'id' => 'descricao_produto',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$descricao_produto = [
    'data' => [
        'name'  => 'descricao_produto',
        'id'    => 'descricao_produto',
        'value' => set_value('descricao_produto', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Dados de Produtos Utilizados é Obrigatório',
];
$descricao_defeito_label = [
    'label_text' => 'Situação',
    'id' => 'descricao_defeito',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$descricao_defeito = [
    'data' => [
        'name'  => 'descricao_defeito',
        'id'    => 'descricao_defeito',
        'value' => set_value('descricao_defeito', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Situação é Obrigatório',
];
$observacao_label = [
    'label_text' => 'Observação',
    'id' => 'observacao',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$observacao = [
    'data' => [
        'name'  => 'observacao',
        'id'    => 'observacao',
        'value' => set_value('observacao', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Observação é Obrigatório',
];
$relatorio_tecnico_label = [
    'label_text' => 'Relatório Técnico',
    'id' => 'relatorio_tecnico',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$relatorio_tecnico = [
    'data' => [
        'name'  => 'relatorio_tecnico',
        'id'    => 'relatorio_tecnico',
        'value' => set_value('relatorio_tecnico', 'Descreva os detalhes'),
        'maxlength' => '255',
        'class' => 'form-control form-control-sm'
    ],
    'Message_required_field' => 'Campo Relatório Técnico é Obrigatório',
];
$valor_total_label = [
    'label_text' => 'Valor Total',
    'id' => 'valor_total',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$valor_total = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'valor_total',
        'id' => 'valor_total',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Valor Total',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'valor_total',
    'default' => 'Valor Total',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Valor Total Obrigatório',
    'with_set' => true
];
$fatura_label = [
    'label_text' => 'Fatura',
    'id' => 'fatura',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$fatura = [
    'data' => [
        'type' => 'text',
        // 'type' => 'hidden',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'fatura',
        'id' => 'fatura',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'Fatura',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        // 'disabled' => 'disabled'
        'required' => 'required'
    ],
    'field' => 'fatura',
    'default' => 'Fatura',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Fatura Obrigatório',
    'with_set' => true
];
$faturado_label = [
    'label_text' => 'Faturado',
    'id' => 'faturado',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$faturado_sim = [
    'data' => [
        'name' => 'faturado',
        'id' => 'faturado',
        'value' => 'Y',
        // 'class' => 'form-control form-control-sm',
        'checked' => FALSE
    ],
    'escape' => true,
    'set' => [
        'label' => 'Sim',
    ]
];
$faturado_nao = [
    'data' => [
        'name' => 'faturado',
        'id' => 'faturado',
        'value' => 'N',
        // 'class' => 'form-control form-control-sm',
        'checked' => FALSE
    ],
    'escape' => true,
    'set' => [
        'label' => 'Não',
    ]
];
?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $numero_os_label) ?>
            <?= view('field/form_input', $numero_os) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $usuario_cliente_empresa_label) ?>
            <?= view('field/form_dropdown', $usuario_cliente_empresa) ?>
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
            <?= view('field/form_label', $garantia_label) ?>
            <?= view('field/form_dropdown', $garantia) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-3">
        <div class="mb-12">
            <?= view('field/form_label', $data_entrada_label) ?>
            <?= view('field/form_input', $data_entrada) ?>
        </div>
    </div>
    <div class="col-12 col-sm-3">
        <div class="mb-12">
            <?= view('field/form_label', $data_inicio_os_label) ?>
            <?= view('field/form_input', $data_inicio_os) ?>
        </div>
    </div>
    <div class="col-12 col-sm-3">
        <div class="mb-12">
            <?= view('field/form_label', $data_fim_os_label) ?>
            <?= view('field/form_input', $data_fim_os) ?>
        </div>
    </div>
    <div class="col-12 col-sm-3">
        <div class="mb-12">
            <?= view('field/form_label', $data_saida_label) ?>
            <?= view('field/form_input', $data_saida) ?>
        </div>
    </div>
</div>
<div class="collapse" id="collapseWorkOrder">
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $descricao_garantia_label) ?>
                <?= view('field/form_textarea', $descricao_garantia) ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $descricao_produto_label) ?>
                <?= view('field/form_textarea', $descricao_produto) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $descricao_defeito_label) ?>
                <?= view('field/form_textarea', $descricao_defeito) ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $observacao_label) ?>
                <?= view('field/form_textarea', $observacao) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="mb-12">
                <?= view('field/form_label', $relatorio_tecnico_label) ?>
                <?= view('field/form_textarea', $relatorio_tecnico) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="mb-12">
                <?= view('field/form_label', $situacao_label) ?>
                <?= view('field/form_dropdown', $situacao) ?>
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="mb-12">
                <?= view('field/form_label', $valor_total_label) ?>
                <?= view('field/form_input', $valor_total) ?>
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="mb-12">
                <?= view('field/form_label', $fatura_label) ?>
                <?= view('field/form_input', $fatura) ?>
            </div>
        </div>
        <div class="col-12 col-sm-3">
            <div class="mb-12">
                <div class="d-flex justify-content-center">
                    <?= view('field/form_label', $faturado_label) ?>
                </div>
                <?= view('field/form_radio', $faturado_sim) ?>
                <?= view('field/form_radio', $faturado_nao) ?>
            </div>
        </div>
    </div>
</div>