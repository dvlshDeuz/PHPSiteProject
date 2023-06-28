<?php
use App\View;

View::includeTemplate('layout/header.php', ['title' => '404 - Страница не найдена', 'pageTitle' => 'Страница не найдена', 'currentPage' => '404']);
?>
<p>Запрашиваемая вами страница не существует</p>
<?php View::includeTemplate('layout/footer.php')?>
