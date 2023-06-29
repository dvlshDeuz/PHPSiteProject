## Описание проекта

Данный проект представляет собой сайт магазина автомобилей

## Описание страниц

|   Страница   |      Назначение      |
|:------------:|:--------------------:|
|   /account   |    Личный кабинет    |
|   /basket    |       Корзина        |
|   /catalog   |   Каталог моделей    |
| /catalog/id/ |   Страница модели    |
|    /form     |   Gui для веб-форм   |
|    /index    |   Главная страница   |
|    /login    |  Форма авторизации   |
|  /register   | Страница регистрации |

## Описание реализованного функционала

На сайте реализована маршрутизация, все данные машин подключаются через базу данных MySQL,
реализована авторизация (Пока что не через БД), в Административном разделе также реализован вывод
списка машин находящихся в базе данных (Нет доступа неавторизированным пользователям).

## Для тестирования

1. Интегрировать себе базу данных использованную в проекте, при помощи database_dump.sql
2. Создать .env файл по примеру .env.example с данными вашей импортированной БД
3. Запустить проект на своем локальном устройстве
4. Для полноценного тестирования можно войти в аккаунт email: admin@example.com | pass: 123
- Я использую встроенный сервер phpstorm (php -S localhost:8000), в программах подобным OpenServerPanel редиркт может работать не корректно 