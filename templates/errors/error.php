<?php
use App\View;

$code = $code ?? 500;
$message = $message ?? 'Упс, что то пошло не так';

View::includeTemplate('layout/header.php', ['title' => "$code - Возникла ошибка", 'pageTitle' => 'Возникла ошибка', 'currentPage' => 'error']);
?>
<p><?=htmlspecialchars($message)?></p>
<?php View::includeTemplate('layout/footer.php')?>
