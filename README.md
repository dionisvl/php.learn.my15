<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

#Пятняшки
[Игра в 15](https://ru.wikipedia.org/wiki/%D0%98%D0%B3%D1%80%D0%B0_%D0%B2_15 )

### Функционал сервиса:
* Хранение пользователей (коробочное от laravel)
* Создание и хранение игр, для упрощения мы пока оперируем только символами, а не картинками
* Решение созданных пользователями игр
##### P.S в игру может играть только пользователь, от имени которого игра создавалась

#Установка
- git clone THIS_REPO
- cp .env.example .env
- composer install
- php artisan key:generate
- create empty DB and config it into .env
- php artisan migrate

#Как играть
- Регистрируемся
- В личном кабинете жмем "создать игру"
