<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\title.php', 'Line: 2', true)) : (NULL);
$dateTime = new DateTime();
$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$formatter->setPattern("EEEE, d 'de' MMMM 'de' yyyy");
$dataAtual = $formatter->format($dateTime);
$diaSemana = $dateTime->format('l');
$semana = $dateTime->format('W');
?>
<div class="row titulo-site">
    <div class="col-12 col-sm-2 text-center">
        <img src="<?= base_url(); ?>assets/img/saotiago/logo/st.png" alt="assets/img/saotiago/logo/st.png" height="100px">
    </div>
    <div class="col-12 col-sm-5">
        <div class="container titulo-center">
            <h1>
                OFICINA SÃO TIAGO
            </h1>
        </div>
    </div>
    <div class="col-12 col-sm-5" style="align-items: center; justify-content: center;">
        <button class="btn btn-outline-light custom-btn" type="button" data-bs-toggle="modal" data-bs-target="#staticModalHorario">
            <?= view('icon/calendar3', ['height' => '12px', 'width' => '12px']); ?> &emsp;
        </button>
        <?= "Hoje é " . $dataAtual; ?><br>
        <button class="btn btn-outline-light custom-btn" type="button">
            <?= view('icon/telephone', ['height' => '12px', 'width' => '12px']); ?> &emsp;
        </button>
        (21) 2581-6218<br>
        <button class="btn btn-outline-light custom-btn" type="button">
            <?= view('icon/gear_wide_connected', ['height' => '15px', 'width' => '15px']); ?> &emsp;
        </button>
        Serviços: Troca de óleo, Regulagem de GNV 3ª geração, carga de gás com contraste<br>
        <button class="btn btn-outline-light custom-btn" type="button">
            <?= view('icon/geo_alt_fill', ['height' => '12px', 'width' => '12px']); ?> &emsp;
        </button>
        R. Cabuçu, 155 - Engenho Novo, Rio de Janeiro - RJ, 20710-300<br>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticModalHorario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header titulo-site">
                <h5 class="modal-title" id="staticBackdropLabel">Horários</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        segunda-feira 08:00–18:00 <br>
                        terça-feira 08:00–18:00 <br>
                        quarta-feira 08:00–18:00 <br>
                        quinta-feira 08:00–18:00 <br>
                        sexta-feira 08:00–18:00 <br>
                        sábado 08:00–12:00 <br>
                        domingo Fechado <br>
                    </div>
                    <div class="col-12 col-sm-6">
                        <a href="https://goo.gl/maps/vWpjDk8ct14w5yKDA" target="_blank" rel="noopener noreferrer">
                            <figure class="figure">
                                <img src="<?= base_url(); ?>assets/img/saotiago/maps.png" class="figure-img img-fluid rounded" alt="public\assets\img\saotiago\maps.png">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>