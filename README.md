# Norel-it

A modern Laravel 12 application running in a fully containerized Docker development environment.

---

## Architecture & Services

The application runs using Docker Compose with the following services:

| Service | Technology | Host Port / URL | Internal Port | Description |
|---|---|---|---|---|
| **Web** | Nginx Alpine | [http://localhost:8000](http://localhost:8000) | `80` | Reverse proxy and static file server |
| **App** | PHP 8.3 FPM + Node 22 | [http://localhost:5173](http://localhost:5173) (Vite) | `9000`, `5173` | Application runner, Composer & Vite dev server |
| **Database** | MySQL 8.0 | `127.0.0.1:3307` | `3306` | Relational database (mapped to 3307 on host) |
| **Cache & Queue** | Redis Alpine | `127.0.0.1:6379` | `6379` | Cache, session, and queue driver |
| **Mailpit** | Mailpit | [http://localhost:8025](http://localhost:8025) (UI) | `8025` (UI), `1025` (SMTP) | Local email testing dashboard & sandbox SMTP |

> **Note:** Host port `3307` is used for MySQL to avoid conflicts with any local MySQL/MariaDB server running on default port `3306`. Inside Docker, services connect via standard port `3306` using hostname `db`.

---

## Prerequisites

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (Windows with WSL2 backend or macOS) or Docker Engine on Linux.
- Docker Compose v2+.

> You do **not** need PHP, Composer, or Node.js installed on your host machine — everything runs inside containers.

---

## Quick Start

### 1. Start the Containers

From the project root directory, run:

```bash
docker compose up -d --build
```

On first run, the container entrypoint will automatically:
- Copy `.env.example` to `.env` if `.env` does not exist.
- Install PHP dependencies with `composer install`.
- Generate an application key (`APP_KEY`).
- Set appropriate permissions on `storage` and `bootstrap/cache`.

### 2. Run Database Migrations

Once the database container is healthy, run migrations:

```bash
docker compose exec app php artisan migrate
```

### 3. Install Frontend Dependencies & Build Assets

```bash
# Install NPM packages
docker compose exec app npm install

# Build production assets
docker compose exec app npm run build
```

### 4. Access the Application

- **Web Application:** [http://localhost:8000](http://localhost:8000)
- **Mailpit Dashboard:** [http://localhost:8025](http://localhost:8025)

---

## Development Workflow

### Artisan Commands

Execute any `php artisan` command through the `app` container:

```bash
# Run migrations
docker compose exec app php artisan migrate

# Seed the database
docker compose exec app php artisan db:seed

# Create a model with migration
docker compose exec app php artisan make:model Post -m

# Run Laravel Tinker (interactive REPL)
docker compose exec app php artisan tinker

# Run test suite
docker compose exec app php artisan test
```

### Composer Commands

Manage PHP packages without needing PHP installed locally:

```bash
# Require a new package
docker compose exec app composer require <vendor/package>

# Require a dev package
docker compose exec app composer require --dev <vendor/package>

# Update dependencies
docker compose exec app composer update
```

### Frontend & Vite (Hot Module Replacement)

Run the Vite development server with hot reloading inside the container:

```bash
docker compose exec app npm run dev
```

Vite is preconfigured to bind to `0.0.0.0` and communicate with `localhost:5173`. Any changes in `resources/` will automatically hot-reload in your browser.

To compile assets for production:

```bash
docker compose exec app npm run build
```

### Shell Access

To open a bash terminal inside the application container:

```bash
docker compose exec app bash
```

To connect to MySQL via the CLI:

```bash
docker compose exec db mysql -u norel_user -psecret norel_it
```

---

## Connecting from GUI Database Clients

You can connect to the database using tools like TablePlus, DBeaver, HeidiSQL, or VS Code Database Client using:

- **Host:** `127.0.0.1` (or `localhost`)
- **Port:** `3307`
- **Database:** `norel_it`
- **Username:** `norel_user`
- **Password:** `secret`
- **Root Password:** `rootsecret`

---

## Useful Docker Commands

```bash
# View live logs of all services
docker compose logs -f

# View live logs of a specific service
docker compose logs -f app
docker compose logs -f web
docker compose logs -f db

# Check container status
docker compose ps

# Restart containers
docker compose restart

# Stop containers
docker compose down

# Stop containers and erase database volumes (full reset)
docker compose down -v
```

---

## Environment Variables

Default environment variables configured in `.env.example`:

| Key | Default Value | Description |
|---|---|---|
| `APP_URL` | `http://localhost:8000` | App URL |
| `DB_CONNECTION` | `mysql` | Database driver |
| `DB_HOST` | `db` | Docker internal MySQL hostname |
| `DB_PORT` | `3306` | Docker internal MySQL port |
| `DB_DATABASE` | `norel_it` | Database name |
| `DB_USERNAME` | `norel_user` | Database user |
| `DB_PASSWORD` | `secret` | Database password |
| `REDIS_HOST` | `redis` | Docker internal Redis hostname |
| `REDIS_PORT` | `6379` | Redis port |
| `MAIL_MAILER` | `smtp` | Mail driver |
| `MAIL_HOST` | `mailpit` | Mailpit container hostname |
| `MAIL_PORT` | `1025` | Mailpit SMTP port |

If you need to change the host forwarded ports, you can set the following in your `.env`:
- `APP_PORT=8000` (Nginx web port)
- `FORWARD_DB_PORT=3307` (MySQL host port)
- `FORWARD_REDIS_PORT=6379` (Redis host port)
- `FORWARD_MAILPIT_DASHBOARD_PORT=8025` (Mailpit web dashboard)
- `VITE_PORT=5173` (Vite dev server port)
