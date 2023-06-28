<?php
use App\View;

View::includeTemplate('layout/header.php', ['title' => 'Административный раздел', 'pageTitle' => 'Административный раздел', 'currentPage' => 'admin']);
?>

            <div>
                <a href="/admin" class="inline-block bg-red-600 hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded" title="Редактировать">
                    <span class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Добавить модель</span>
                    </span>
                </a>
            </div>
            <?php View::includeTemplate('blocks/admin_car_table.php', ['cars' => $cars])?>
            <h1 class="text-black text-3xl font-bold">Заказы</h1>

            <table class="border border-collapse w-full">
                <thead>
                <tr>
                    <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">№ Заказа</th>
                    <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Цена</th>
                    <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Состав</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">1 394 901 ₽</td>
                    <td class="border px-4 py-2">Seed 1 шт, Cerato 2 шт.</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">90 394 901 ₽</td>
                    <td class="border px-4 py-2">K5 101 шт</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">1 000 901 ₽</td>
                    <td class="border px-4 py-2">Seed 1 шт</td>
                </tr>
                </tbody>
            </table>
<?php View::includeTemplate('layout/footer.php')?>