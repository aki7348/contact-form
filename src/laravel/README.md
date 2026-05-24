# Contact Form

## 環境構築

### Dockerビルド

```bash
docker compose up -d --build
```

### Laravel環境構築

```bash
docker compose exec php bash
cd laravel
composer install
```

### マイグレーション

```bash
php artisan migrate
```

### シーディング

```bash
php artisan db:seed --class=CategorySeeder
```

## 使用技術

- PHP 8.1
- Laravel 10
- MySQL
- Docker

## URL

- 開発環境：http://localhost:8088