# laravel-todo
## 教材
- [Laravel&Bootstrapで作るTodoアプリケーション開発(入門編)](https://zenn.dev/ponta/books/164bb277874f1e607f97)

## 環境構築
- コンテナの作成と開始
```
docker compose up -d
```

- サーバーの起動
```
docker-compose exec php php artisan serve --host=0.0.0.0 --port=8000
```

- コンテナに入る
```
docker-compose exec php bash 
```

### リファレンス
- [docker-composeコマンド概要](https://docs.docker.jp/v1.12/compose/reference/overview.html)

### バージョン情報

name|version
--|--
PHP | 8.2.10
Laravel | 8.83.27