<?php
use App\View;

View::includeTemplate('layout/header.php', ['title' => 'Топ товары', 'pageTitle' => 'Главная страница', 'currentPage' => 'home']);
?>
<?php View::includeTemplate('blocks/car_catalog.php', ['cars' => $cars])?>


<p class="mt-6">
    <a href="/catalog" class="text-red-600 hover:text-gray-600 flex items-center space-x-2">
        <span>В каталог</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
    </a>
</p>

<hr class="my-6">

<div class="space-y-4">
    <p class="text-black text-xl font-bold">Структура сайта</p>

    <table class="border border-collapse">
        <thead>
            <tr>
                <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Страница</th>
                <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Верстка страницы</th>
                <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Описание страницы</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">Главная страница</td>
                <td class="border px-4 py-2"><a href="/" class="text-gray-600 hover:text-red-600">/</a></td>
                <td class="border px-4 py-2">Главная страница</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Каталог моделей</td>
                <td class="border px-4 py-2"><a href="/catalog" class="text-gray-600 hover:text-red-600">/catalog</a></td>
                <td class="border px-4 py-2">Отображается каталог моделей</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Административный раздел</td>
                <td class="border px-4 py-2"><a href="/admin" class="text-gray-600 hover:text-red-600">/admin</a></td>
                <td class="border px-4 py-2">Страница управления моделями, доступна только авторизованному пользователю</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Gui для веб-форм</td>
                <td class="border px-4 py-2"><a href="#" class="text-gray-600 hover:text-red-600">В разработке</a></td>
                <td class="border px-4 py-2">Страница с версткой элементов формы (вспомогательная страница)</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Форма авторизации</td>
                <td class="border px-4 py-2"><a href="/login" class="text-gray-600 hover:text-red-600">/login</a></td>
                <td class="border px-4 py-2">Страница с формой авторизации, не доступна для авторизованного пользователя</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Страница регистрации</td>
                <td class="border px-4 py-2"><a href="#" class="text-gray-600 hover:text-red-600">В разработке</a></td>
                <td class="border px-4 py-2">Страница с формой регистрации</td>
            </tr>
        </tbody>
    </table>
</div>
<?php View::includeTemplate('layout/footer.php')?>