<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\message.php', 'Line: 2', true)) : (NULL);
if (session()->get('message')) {
    $message = session()->get('message');
    $notification = $message['message'];
    if (isset($notification['success'])) {
        $foreach_success = $notification['success'];
        foreach ($foreach_success as $key => $value_success) {
            // myPrint($value_success, 'app\Views\saotiago\message.php, 8', true);
        }
    }
    if (isset($notification['warning'])) {
        $foreach_warning = $notification['warning'];
        foreach ($foreach_warning as $key => $value_warning) {
            // myPrint($value_warning, 'app\Views\saotiago\message.php, 14', true);
        }
    }
    // myPrint($notification, 'app\Views\saotiago\message.php, 17', true);

}
if (session()->get('system_log')) {
    $system_log = session()->get('system_log');
    // myPrint($system_log);
}
// myPrint('FIM', 'app\Views\saotiago\message.php');
?>
<div class="container">
    <div class="container" style="background-color: #FFFFFF;">
        <div class="container">
            &nbsp;
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                <?php if (isset($notification['success'])) : ?>
                    <?php $foreach_success = $notification['success']; ?>
                    <?php foreach ($foreach_success as $key => $value_success) : ?>
                        <div class="alert alert-success d-flex justify-content-center" role="alert">
                            <?= $value_success; ?>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
                <?php if (isset($notification['warning'])) : ?>
                    <?php $foreach_warning = $notification['warning']; ?>
                    <?php foreach ($foreach_warning as $key => $value_warning) : ?>
                        <div class="alert alert-warning d-flex justify-content-center" role="alert">
                            <?= $value_warning; ?>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
                <?php if (isset($notification['danger'])) : ?>
                    <?php $foreach_danger = $notification['danger']; ?>
                    <?php foreach ($foreach_danger as $key => $value_danger) : ?>
                        <div class="alert alert-danger d-flex justify-content-center" role="alert">
                            <?= $value_danger; ?>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
                <?php if (isset($notification['light'])) : ?>
                    <?php $foreach_light = $notification['light']; ?>
                    <?php foreach ($foreach_light as $key => $value_light) : ?>
                        <div class="alert alert-light d-flex justify-content-center" role="alert">
                            <?= $value_light; ?>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
                <div class="container">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
</div>