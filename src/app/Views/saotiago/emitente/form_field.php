<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\emitente\form_field.php', 'Line: 2', true)) : (NULL);
// myPrint(FORM_DEFAULT, 'Teste', true);
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
        'placeholder' => 'empresa',
        // 'min' => date('Y-m-d'),
        // 'max' => '2023-12-31',
        'required' => 'required'
    ],
    'field' => 'classificacao',
    'default' => 'emitente',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo _Label_ Obrigatório',
    'with_set' => true
];
$nome_label = [
    'label_text' => 'Nome da Empresa',
    'id' => 'name',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$nome = [
    'data' => [
        'type' => 'text',
        'name' => 'name',
        'id' => 'name',
        'class' => 'form-control form-control-sm',
        'maxlength' => '255',
        'required' => 'required'
    ],
    'field' => 'name',
    'default' => 'Nome da Empresa',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Nome Obrigatório',
    'with_set' => true
];
$cnpj_label = [
    'label_text' => 'CNPJ',
    'id' => 'cnpj',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$cnpj = [
    'data' => [
        'type' => 'text',
        'name' => 'cnpj',
        'id' => 'cnpj',
        'class' => 'form-control form-control-sm',
        'maxlength' => '45',
        'required' => 'required'
    ],
    'field' => 'cnpj',
    'default' => '44.999.000/0001-00',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo CNPJ Obrigatório',
    'with_set' => true
];
$ie_label = [
    'label_text' => 'Incrição Estadual',
    'id' => 'ie',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$ie = [
    'data' => [
        'type' => 'text',
        'name' => 'ie',
        'id' => 'ie',
        'class' => 'form-control form-control-sm',
        'maxlength' => '50',
        'required' => 'required'
    ],
    'field' => 'ie',
    'default' => '555.777.888.000',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Inscrição Estadual Obrigatório',
    'with_set' => true
];
$endereco_label = [
    'label_text' => 'Endereço',
    'id' => 'endereco',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$endereco = [
    'data' => [
        'type' => 'text',
        'name' => 'endereco',
        'id' => 'endereco',
        'class' => 'form-control form-control-sm',
        'maxlength' => '70',
        'required' => 'required'
    ],
    'field' => 'endereco',
    'default' => 'Rua da Fortuna',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Endereço Obrigatório',
    'with_set' => true
];
$numero_label = [
    'label_text' => 'No.',
    'id' => 'numero',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$numero = [
    'data' => [
        'type' => 'text',
        'name' => 'numero',
        'id' => 'numero',
        'class' => 'form-control form-control-sm',
        'maxlength' => '11',
        'required' => 'required'
    ],
    'field' => 'numero',
    'default' => '0',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Número Obrigatório',
    'with_set' => true
];
$bairro_label = [
    'label_text' => 'Bairro',
    'id' => 'bairro',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$bairro = [
    'data' => [
        'type' => 'text',
        'name' => 'bairro',
        'id' => 'bairro',
        'class' => 'form-control form-control-sm',
        'maxlength' => '45',
        'required' => 'required'
    ],
    'field' => 'bairro',
    'default' => 'Engenho Novo',
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
    'label_text' => 'uf',
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
        'maxlength' => '2',
        'required' => 'required'
    ],
    'field' => 'uf',
    'default' => 'RJ',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Estado (UF) Obrigatório',
    'with_set' => true
];
$telefone_label = [
    'label_text' => 'Telefone',
    'id' => 'telefone',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$telefone = [
    'data' => [
        'type' => 'text',
        'name' => 'telefone',
        'id' => 'telefone',
        'class' => 'form-control form-control-sm',
        'maxlength' => '20',
        'required' => 'required'
    ],
    'field' => 'telefone',
    'default' => '+55(21)9999-8888',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo Telefone Obrigatório',
    'with_set' => true
];
$email_label = [
    'label_text' => 'E-mail',
    'id' => 'telefone',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$email = [
    'data' => [
        'type' => 'mail',
        'name' => 'email',
        'id' => 'email',
        'class' => 'form-control form-control-sm',
        'maxlength' => '2255',
        'required' => 'required'
    ],
    'field' => 'email',
    'default' => 'user@servidor.com.br',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
$cep_label = [
    'label_text' => 'CEP',
    'id' => 'cep',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$cep = [
    'data' => [
        'type' => 'text',
        'name' => 'cep',
        'id' => 'cep',
        'class' => 'form-control form-control-sm',
        'maxlength' => '2255',
        'required' => 'required'
    ],
    'field' => 'cep',
    'default' => '99.000-11',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
$site_label = [
    'label_text' => 'Site',
    'id' => 'site',
    'attributes' => [
        'class' => 'form-label label-left label-left'
    ]
];
$site = [
    'data' => [
        'type' => 'text',
        'name' => 'site',
        'id' => 'site',
        'class' => 'form-control form-control-sm',
        'maxlength' => '2255',
        'required' => 'required'
    ],
    'field' => 'site',
    'default' => 'www.empresa.com.br',
    'html_escape' => true,
    'escape' => true,
    'Message_required_field' => 'Campo E-mail Obrigatório',
    'with_set' => true
];
?>
<?= view('field/form_input', $classificacao) ?>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $nome_label) ?>
            <?= view('field/form_input', $nome) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $cnpj_label) ?>
            <?= view('field/form_input', $cnpj) ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $telefone_label) ?>
            <?= view('field/form_input', $telefone) ?>
        </div>
    </div>
    <div class="col-12 col-sm-6">
        <div class="mb-12">
            <?= view('field/form_label', $bairro_label) ?>
            <?= view('field/form_input', $bairro) ?>
        </div>
    </div>
</div>
<div class="collapse" id="collapseEmitente">
    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="mb-12">
                <?= view('field/form_label', $ie_label) ?>
                <?= view('field/form_input', $ie) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $endereco_label) ?>
                <?= view('field/form_input', $endereco) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $numero_label) ?>
                <?= view('field/form_input', $numero) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $cidade_label) ?>
                <?= view('field/form_dropdown', $cidade) ?>
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
                <?= view('field/form_label', $cep_label) ?>
                <?= view('field/form_input', $cep) ?>
            </div>
            <div class="mb-12">
                <?= view('field/form_label', $site_label) ?>
                <?= view('field/form_input', $site) ?>
            </div>
        </div>
    </div>
</div>