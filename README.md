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
6. php artisan make:model モデル名 -m
7. 作成されたマイグレーションファイルにてテーブルの作成及びモデルにてカラムの書き換え可不可の設定
8. php artisan migrate
9. php artisan make:seeder
10. 作成されたシーダーファイルを編集しテーブルに登録するデータを作成
11. DatabaseSeeder.phpに編集したシーダーファイルを登録
12. php artisan dbseed
## 使用技術
・PHP 7.4.9
・laravel 8.75
・MySQL 8.0.26
・nginx 1.21.1
・Livewire
## ER図
![ER図](./inquiry_form.drawio.png)
## URL
・開発環境: http://localhost/
・phpMyAdmin: http://localhost:8080/
### 補足
エクスポートは未実装です。

