# Записные книжки

## Структура
Стандартная структура Laravel проекта с небольшими изменениями <br>
- Добавлена папка docker в корне проекта
- Добавлен файл docker-compose.yaml в корне проекта

Папка routes - маршруты для запросов <br>
app/Http/Controllers/ - папка с контроллером записной книжки (основые методы для работы с данными) <br>
app/Models - папка с моделью записной книжки <br>
storage/app/public/images - папка с изображениями (хранятся в файловой системе сервера) <br>
docker/nginx - папка с конфигурационным файлом nginx <br>
test/Unit - папка с юнит-тестами <br>
database/migrations - папка с миграциями

## Функционал
Все маршруты были составлены согласно ТЗ <br>
Методы расположены в файле app/Http/Controllers/NotebookController.php <br>
- index - получить первые 5 записных книжек
- store - создать записную книжку
- findById - получить записную книжку по id
- update - изменить сушествующую записную книжку по id
- delete - удалить записную книжку по id

## Как тестировал
- Через программное обеспечение Postman
- С помощью unit тестов (проверял работоспособность методов описанных выше)

## URL's для Postman
- GET http://localhost:8000/api/v1/notebook - получить первые 5 записных книжек <br>
- GET http://localhost:8000/api/v1/notebook?page={номер следующей страницы} - получить следующие 5 записных книжек
- POST http://localhost:8000/api/v1/notebook - создать записную книжку
- GET http://localhost:8000/api/v1/notebook/{id} - получить одну записную книжку
- POST http://localhost:8000/api/v1/notebook/{id} - обновить записную книжку
- DELETE http://localhost:8000/api/v1/notebook/{id} - удалить записную книжку

## Запуск приложения!!!
Для запуска приложения нужен установленный docker на рабочую машину <br>
- Находясь в корне проекта прописываем команду "docker compose up"
- Для миграции базы данных нужно прописать команду "docker exec -d notebook php artisan migrate" (контейнер notebook должен быть уже запущен)
- Используем url выше для проверки работоспособности приложения
