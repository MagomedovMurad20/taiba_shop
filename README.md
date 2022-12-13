## При клонировании данного репозитория запустите git bash в директории, куда хотите клонировать проект и введите команду:  
#### " git clone https://github.com/MagomedovMurad20/taiba_shop.git . "
## Проект можно запустить в docker. Подробные инструкции в конце этого файла README.
# Этот проект написан на чистом PHP без использования фреймворков и библиотек. 

### Требования: PHP-7 и выше, MySQL or MariaDB-10.5-Win10, Appache-2.4 or NGINX. Используйте Docker или OpenServer/mamp/wamp/xamp;

### Код отвечающий за подключение к базе данных находится в /db/dbconnect.php;

### Код отвечающий за создание таблиц в базе данных находится в /db/dbconnect/create_tables.php:
- чтобы посмотреть какие поля в таблицах  для регистрации пользователей и для добавления продуктов
откройте файл /db/create_tables.php.
- чтобы создать таблицы для регистрации пользователей и хранения продуктов
перейдите в браузере по ссылке названиепроекта/db/create_tables.php. Если таблицы созданы на странице выведется текст: "table users created
table products created";

### Код отвечающий за логику находится в includes/logic:
- код отвечающий за логику страниц находится в includes/logic/pages/;
- код отвечающий за логику форм находится в includes/logic/formes/;
- код отвечающий за логику корзины находится в includes/logic/cart/;

### Код отвечающий за представление находится в includes/html:
- код отвечающий за представление страниц находится в includes/html/pages/;
- код отвечающий за представление форм находится в includes/html/formes/;
- код отвечающий за представление корзины находится в includes/html/cart/;
- код отвечающий за шаблоны находится в includes/html/templates/;

### Код отвечающий за подключение к базе данных для выборки товаров из базы данных находится в:
- includes/logic/cart/db.php;


### Файлы отвечающие за сборку всего кода для вывода на странице находятся в корне проекта и называются соответственно страницам;

### Код отвечающий за docker находится в /docker/app.dockerfile.php;

### Код отвечающий за nginx для docker находится в /docker/nginx;

### Код отвечающий за js находится в /js;

### Код отвечающий за css находится в /css;

### Если вам понадобятся фото они находится в /media;

### Код отвечающий за autoloader находится в /core/autoloader;

### Дамп базы данных отправлю в доп файле;


## Running the project with Docker Compose

### After cloning the repository from gitHub:

Copy .env.example (if `.env` file not exists):

```bash
cp .env.example .env
```

and set some parameters in `.env` file,
for example, `FORWARD_DB_PORT`, `FORWARD_REDIS_PORT`, `DB_PASSWORD`, `DB_HOST` etc,
if needed!

Then run:

```bash
docker-compose up -d
```
Проект открывайте по адресу http://localhost:58080/

## Если у вас windows: запустите docker desktop, прежде чем следовать инструкциям