# Inquiry_form
## 環境構築
### Dockerビルド
1.　git clone gitファイルのリンク
2.　mv 元のリポジトリ名 新しいリポジトリ名
3.　GitHabにてリモートリポジトリの新規作成
4.　git remote set-url origin 新規作成したリモートリポジトリのSSH
5. git add .
6. git commit -m "メッセージ"
7. git push origin main
8. docker-compose up -d --build
### laravel環境構築
1. docker-compose exec php bash
2. composer install
3. cp .env.example .env
4. 作成された.envファイルの環境変数を変更
5. php artisan key:generate
6. php artisan migrate
7. DatabaseSeeder.phpにcategoriesテーブルのseederファイルとcontactsテーブルのfactoryファイルの登録用コードが記述してあります。現在factoryファイルのコードを"//"で伏せてありますのでfactoryファイルの登録コードを使用する際には"//"を消してseederファイルの先頭に”//”を付けて有効なコードを切り替えてください。
8. php artisan dbseed
## 使用技術
・PHP 7.4.9
・laravel 8.75
・MySQL 8.0.26
・nginx 1.21.1
・Livewire
・LaravelExcel
## ER図
![ER図](./inquiry_form.drawio.png)
## URL
・開発環境: http://localhost/
・phpMyAdmin: http://localhost:8080/
### 補足
エクスポートは全てのお問い合わせ内容の取得のみ可能です。

