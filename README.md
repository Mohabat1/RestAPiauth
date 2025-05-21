# RestAPiauth

Простой REST API на Laravel для авторизации и регистрации.

##  Возможности

- Регистрация пользователей  
- Авторизация (вход)  
- Аутентификация через токен (Laravel Sanctum или Passport)  
- JSON-ответы  
- Чистый код на Laravel

##  Установка

```bash
git clone https://github.com/Mohabat1/RestAPiauth.git
cd RestAPiauth

composer install
cp .env.example .env
php artisan key:generate

# Укажи параметры подключения к БД в .env
php artisan migrate
```

##  Запуск

```bash
php artisan serve
```

Откроется по адресу, например:  
http://127.0.0.1:8000

##  Примеры API

- `POST /api/register` – регистрация  
- `POST /api/login` – вход  
- `GET /api/user` – получить данные текущего пользователя (требуется токен)
