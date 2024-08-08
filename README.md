# 20240707koga
# KogaRina_20240808
# KogaRina_20240808

# アプリケーション名
My Laravel Contact Form App

## 環境構築
1. Dockerのセットアップ
    ```sh
    docker-compose up -d --build
    ```

2. .envファイルの設定
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

3. データベースのマイグレーション
    ```sh
    docker-compose exec app php artisan migrate
    ```

4. シーディングの実行
    ```sh
    docker-compose exec app php artisan db:seed
    ```

## 使用技術(実行環境)
- PHP 8.x
- Laravel 8.x
- MySQL 8.x
- Docker

## ER図


## URL
- 開発環境: [http://localhost:81/]