# Laravel Contact Form Test

## アプリケーション名
Laravel Contact Form Test

## 環境構築
### Dockerのビルドからマイグレーション、シーディングまで

1. **リポジトリをクローン**
    ```bash
    git clone git@github.com:RyiMinatuki/KogaRina_20240808.git
    cd contact-form-test
    ```

2. **Dockerコンテナのビルドと起動**
    ```bash
    docker-compose up -d --build
    ```

3. **コンテナ内に入る**
    ```bash
    docker-compose exec php bash
    ```

4. **依存関係のインストール**
    ```bash
    composer install
    ```

5. **.envファイルのコピーと設定**
    ```bash
    cp .env.example .env
    ```

6. **アプリケーションキーの生成**
    ```bash
    php artisan key:generate
    ```

7. **データベースのマイグレーションとシーディング**
    ```bash
    php artisan migrate --seed
    ```

### 使用技術(実行環境)
- Laravel 8.x
- PHP 7.4+
- MySQL 8.0.26
- Nginx 1.21.1
- Docker
- Docker Compose

## ER図


## URL
- 開発環境: [http://localhost:81](http://localhost:81)



