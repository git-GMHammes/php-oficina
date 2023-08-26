<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\user\create\form_field.php', 'Line: 2', true)) : (NULL);
$classificacao = [
    'data' => [
        'type' => 'hidden',
        // 'type' => 'text',
        // 'type' => 'date',
        // 'type' => 'email',
        // 'type' => 'number',
        'name' => 'classificacao',
        'id' => 'classificacao',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'placeholder' => 'usuario',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        'required' => 'required'
    ],
    'field' => 'classificacao',
    'default' => 'user',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo _Label_ Obrigatório',
    'with_set' => true
];
$nome_label = [
    'label_text' => 'Nome Completo',
    'id' => 'nome',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$nome = [
    'data' => [
        'type' => 'text',
        'name' => 'nome',
        'id' => 'nome',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255',
        'required' => 'required'
    ],
    'field' => 'nome',
    'default' => 'Nome Completo',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Nome Obrigatório',
    'with_set' => true
];
$perfil_label = [
    'label_text' => 'Perfil',
    'id' => 'perfil',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$perfil = [
    'name' => 'perfil',
    'options' => [
        'administrador' => 'Administrador',
        'cliente' => 'Cliente',
        'colaborador' => 'Colaborador',
        'desconhecido' => 'Desconhecido',
        'funcionario' => 'Funcionário',
    ],
    'selected' => 'cliente',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'perfil',
        // 'readonly' => 'readonly'
    ]
];
$rg_label = [
    'label_text' => 'Registro Geral (RG)',
    'id' => 'rg',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$rg = [
    'data' => [
        'type' => 'text',
        'name' => 'rg',
        'id' => 'rg',
        'class' => 'form-control form-control-sm',
        'maxlength' => '10'
        // 'required' => 'required'
    ],
    'field' => 'rg',
    'default' => '123.123-11',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo RG Obrigatório',
    'with_set' => true
];
$cpf_label = [
    'label_text' => 'CPF',
    'id' => 'cpf',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$cpf = [
    'data' => [
        'type' => 'text',
        'name' => 'cpf',
        'id' => 'cpf',
        'class' => 'form-control form-control-sm',
        'maxlength' => '14',
        'required' => 'required'
    ],
    'field' => 'cpf',
    'default' => time() . '9',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo CPF Obrigatório',
    'with_set' => true
];
$cep_label = [
    'label_text' => 'CEP',
    'id' => 'cep',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$cep = [
    'data' => [
        'type' => 'text',
        'name' => 'cep',
        'id' => 'cep',
        'class' => 'form-control form-control-sm',
        'maxlength' => '10'
        // 'required' => 'required'
    ],
    'field' => 'cep',
    'default' => '00.111-222',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo CEP Obrigatório',
    'with_set' => true
];
$logradouro_label = [
    'label_text' => 'Endereço',
    'id' => 'endereco',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$logradouro = [
    'data' => [
        'type' => 'text',
        'name' => 'endereco',
        'id' => 'endereco',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255'
        // 'required' => 'required'
    ],
    'field' => 'endereco',
    'default' => 'Rua quatorze',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Endereço Obrigatório',
    'with_set' => true
];
$number_label = [
    'label_text' => 'Número',
    'id' => 'numero',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$number = [
    'data' => [
        'type' => 'text',
        'name' => 'numero',
        'id' => 'numero',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255'
        // 'required' => 'required'
    ],
    'field' => 'numero',
    'default' => '000',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Número Obrigatório',
    'with_set' => true
];
$bairro_label = [
    'label_text' => 'Bairro',
    'id' => 'bairro',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$bairro = [
    'data' => [
        'type' => 'text',
        'name' => 'bairro',
        'id' => 'bairro',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255'
        // 'required' => 'required'
    ],
    'field' => 'Bairro',
    'default' => 'Eng. Novo',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Bairro Obrigatório',
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
    'data' => [
        'type' => 'text',
        'name' => 'cidade',
        'id' => 'cidade',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255'
        // 'required' => 'required'
    ],
    'field' => 'cidade',
    'default' => 'Rio de Janeiro',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Cidade Obrigatório',
    'with_set' => true
];
$estado_label = [
    'label_text' => 'Estado',
    'id' => 'estado',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$estado = [
    'data' => [
        'type' => 'text',
        'name' => 'estado',
        'id' => 'estado',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255'
        // 'required' => 'required'
    ],
    'field' => 'estado',
    'default' => 'Rio de Janeiro',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Cidade Obrigatório',
    'with_set' => true
];
$uf_label = [
    'label_text' => 'UF',
    'id' => 'uf',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$uf = [
    'data' => [
        'type' => 'text',
        'name' => 'uf',
        'id' => 'uf',
        'class' => 'form-control form-control-sm',
        'maxlength' => '2'
        // 'required' => 'required'
    ],
    'field' => 'uf',
    'default' => 'RJ',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo UF Obrigatório',
    'with_set' => true
];
$email_label = [
    'label_text' => 'E-mail',
    'id' => 'email',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$email = [
    'data' => [
        'type' => 'mail',
        'name' => 'email',
        'id' => 'email',
        'class' => 'form-control form-control-sm',
        'maxlength' => '100',
        'required' => 'required'
    ],
    'field' => 'email',
    'default' => time() . '@server.com.br',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
$senha_label = [
    'label_text' => 'Senha',
    'id' => 'senha',
    'attributes' => [
        'class' => 'form-label label-left'
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
$senha_confirma_label = [
    'label_text' => 'Confirma Senha',
    'id' => 'senha2',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$senha_confirma = [
    'data' => [
        'name' => 'senha2',
        'id' => 'senha2',
        'class' => 'form-control form-control-sm',
        'required' => 'required'
    ],
    'value' => '******',
    'escape' => true
];
$telefone_label = [
    'label_text' => 'Telefone',
    'id' => 'telefone',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$telefone = [
    'data' => [
        'type' => 'telefone',
        'name' => 'telefone',
        'id' => 'telefone',
        'class' => 'form-control form-control-sm',
        'maxlength' => '20'
        // 'required' => 'required'
    ],
    'field' => 'email',
    'default' => '(21)2222-3333',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
$celular_label = [
    'label_text' => 'Celular',
    'id' => 'celular',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$celular = [
    'data' => [
        'type' => 'celular',
        'name' => 'celular',
        'id' => 'celular',
        'class' => 'form-control form-control-sm',
        'maxlength' => '20',
        'required' => 'required'
    ],
    'field' => 'email',
    'default' => '(21)9 ' . date('Y') . '-' . date('is'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
$status_label = [
    'label_text' => 'Status Ativo',
    'id' => 'status',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$status = [
    'name' => 'status',
    'options' => [
        'Y' => 'Sim',
        'N' => 'Não'
    ],
    'selected' => 'Y',
    'extra' => [
        'class' => 'form-control form-control-sm',
        'id' => 'status',
        // 'readonly' => 'readonly'
    ]
];
$data_registro_label = [
    'label_text' => 'Data do Registro',
    'id' => 'status',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$data_registro = [
    'data' => [
        'type' => 'date',
        'name' => 'data_registro',
        'id' => 'data_registro',
        'class' => 'form-control form-control-sm',
        'maxlength' => '20',
        'required' => 'required'
    ],
    'field' => 'data_registro',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
$expira_em_label = [
    'label_text' => 'Expira Em',
    'id' => 'expira_em',
    'attributes' => [
        'class' => 'form-label label-left'
    ]
];
$expira_em = [
    'data' => [
        'type' => 'date',
        'name' => 'expira_em',
        'id' => 'expira_em',
        'class' => 'form-control form-control-sm',
        'maxlength' => '20',
        'required' => 'required'
    ],
    'field' => 'expira_em',
    'default' => date('Y-m-d'),
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
?>
<?= view('field/form_input', $classificacao) ?>
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="mb-12">
            <?= view('field/form_label', $nome_label) ?>
            <?= view('field/form_input', $nome) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $perfil_label) ?>
            <?= view('field/form_dropdown', $perfil) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $rg_label) ?>
            <?= view('field/form_input', $rg) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $cpf_label) ?>
            <?= view('field/form_input', $cpf) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $cep_label) ?>
            <?= view('field/form_input', $cep) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $logradouro_label) ?>
            <?= view('field/form_input', $logradouro) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $number_label) ?>
            <?= view('field/form_input', $number) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $bairro_label) ?>
            <?= view('field/form_input', $bairro) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $cidade_label) ?>
            <?= view('field/form_input', $cidade) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $estado_label) ?>
            <?= view('field/form_input', $estado) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $uf_label) ?>
            <?= view('field/form_input', $uf) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $email_label) ?>
            <?= view('field/form_input', $email) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $senha_label) ?>
            <?= view('field/form_password', $senha) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $senha_confirma_label) ?>
            <?= view('field/form_password', $senha_confirma) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $telefone_label) ?>
            <?= view('field/form_input', $telefone) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $celular_label) ?>
            <?= view('field/form_input', $celular) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $status_label) ?>
            <?= view('field/form_dropdown', $status) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $data_registro_label) ?>
            <?= view('field/form_input', $data_registro) ?>
        </div>
        <div class="mb-12">
            <?= view('field/form_label', $expira_em_label) ?>
            <?= view('field/form_input', $expira_em) ?>
        </div>
    </div>
</div>