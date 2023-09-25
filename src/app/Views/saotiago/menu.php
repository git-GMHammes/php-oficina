<?php
(DEBUG_MY_PRINT) ? (myPrint('www\oficina\app\Views\saotiago\menu.php', 'Line: 2', true)) : (NULL);
if (session()->get('profileMenu')) {
    $foreach_menu = session()->get('profileMenu');
    //  myPrint($profileMenu, '');
} else {
    $foreach_menu = session()->get('profileMenu');
}
// $foreach_menu = (isset($result['menu_profile'])) ? ($result['menu_profile']) : (array());
// $foreach_menu = (isset($result['menu_profile'])) ? ($result['menu_profile']) : (array());
$count = 0;
// myPrint($foreach_menu, 'app\Views\saotiago\menu.php, 8', true);
if ($foreach_menu !== array()) {
    foreach ($foreach_menu as $key => $value_menu) {
        foreach ($foreach_menu as $key => $value_sub) {
            if (in_array($value_sub['slug_menu_id'], $value_menu)) {
            } else {
            }
            if ($value_sub['menu_position'] == $value_menu['slug_menu_id']) {
                $define[$value_menu['slug_menu_id']] = $count++;
            }
        }
        $count = 0;
        if ($value_menu['menu_position'] == 'main') {
            $menu_main[] = $value_menu['id_slug_menu'];
        }
    }
    $menu_sub[] = array_keys($define);
}
$menu_main = (isset($menu_main)) ? ($menu_main) : (array());
$menu_sub = (isset($menu_sub[0])) ? ($menu_sub[0]) : (array());
$menu_dif = array_diff($menu_main, $menu_sub);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar scroll</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <!-- Inicio do Menu -->
                <?php if ($foreach_menu !== array()) : ?>
                    <?php foreach ($foreach_menu as $key => $value_menu) : ?>
                        <?php if (!in_array($value_menu['id_slug_menu'], $menu_dif)) : ?>
                            <li class="nav-item dropdown">
                                <?php if ($value_menu['menu_position'] == 'main') : ?>
                                    <a class="nav-link dropdown-toggle" href="<?= base_url(); ?><?= (isset($value_menu['menu_url'])) ? ($value_menu['menu_url']) : ("#"); ?>" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <?= (isset($value_menu['menu_label'])) ? ($value_menu['menu_label']) : (NULL); ?>
                                    </a>
                                <?php endif ?>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <?php // myPrint($foreach_menu, '', true); 
                                    ?>
                                    <?php foreach ($foreach_menu as $key => $value_sub) : ?>
                                        <?php // myPrint($value_menu, '', true);
                                        ?>
                                        <?php if ($value_sub['menu_position'] == $value_menu['slug_menu_id']) : ?>
                                            <li><a class="dropdown-item" href="<?= base_url(); ?><?= (isset($value_sub['menu_url'])) ? ($value_sub['menu_url']) : ("#"); ?>"><?= $value_sub['menu_label'] ?></a></li>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif ?>
                    <?php endforeach; ?>
                    <?php foreach ($foreach_menu as $key => $value_menu) : ?>
                        <?php if (in_array($value_menu['id_slug_menu'], $menu_dif)) : ?>
                            <li class="nav-item dropdown">
                                <?php if ($value_menu['menu_position'] == 'main') : ?>
                                    <a class="nav-link" href="<?= base_url(); ?><?= (isset($value_menu['menu_url'])) ? ($value_menu['menu_url']) : ("#"); ?>">
                                        <?= (isset($value_menu['menu_label'])) ? ($value_menu['menu_label']) : (NULL); ?>
                                    </a>
                                <?php endif ?>
                            </li>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endif ?>
                <!-- Fim do Menu -->
            </ul>
            <form class="d-flex">
                <input class="form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sm btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>