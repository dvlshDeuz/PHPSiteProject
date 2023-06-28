<?php
use App\View;

View::includeTemplate('layout/header.php', ['title' => 'Топ товары', 'pageTitle' => 'Каталог', 'currentPage' => 'catalog']);
?>
<?php View::includeTemplate('blocks/car_catalog.php', ['cars' => $cars])?>
<?php View::includeTemplate('layout/footer.php')?>
