<?php
use App\View;
?>
<table class="border border-collapse w-full">
    <thead>
    <tr>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">id</th>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Название машины</th>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Цена</th>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Цена со скидкой</th>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">Показывать на главной</th>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">&nbsp;</th>
        <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cars as $car) {?>
        <?php View::includeTemplate('blocks/admin_car_item.php', ['car' => $car])?>
    <?php }?>
    </tbody>
</table>
