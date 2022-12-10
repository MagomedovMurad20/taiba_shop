Этот проект написан на PHP.
Требования: PHP-7 и выше, MySQL or MariaDB-10.5-Win10,

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