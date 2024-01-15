## GitHub

https://github.com/yse-yoo/next_tweet_2023_ig22

## API 開発

-   React&Next.js（フロントエンド）と Laravel（サーバーサイド・API）について
-   Laravel プロジェクト作成
-   DB 設定
-   API プログラムの基本

## プロジェクト作成

1.「htdocs/」の中に「next_tweet」フォルダを作成

2.「next_tweet」を開く

3. Laravel「server」プロジェクト作成

```
composer create-project laravel/laravel server
```

4. 新しいウィンドウで「server」プロジェクトを開く

```
code server
```

-   code コマンドで開く場合※Mac では設定が必要

5. Laravel サーバを起動する

```
php artisan serve
```

6. アプリ起動確認

http://localhost:8000/

## ログイン認証機能作成（Breeze）

1. Breeze のダウンロード

```
composer require laravel/breeze --dev
```

2. Breeze のインストール

```
php artisan breeze:install blade
```

3. トップページを確認し、「Login」「Register」リンクが表示されることを確認

## DB 作成

1. XAMPP で、Apache と MySQL 起動

2. phpMyAdmin にアクセスして「next_tweet」データベース作成

3. 「server」プロジェクトの「.env」で DB 設定

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=next_tweet
DB_USERNAME=root
DB_PASSWORD=
```

-   Mac（MAMP）の場合

```
DB_PASSWORD=root
```

■ モデル作成

1. ターミナルで Tweet モデル作成

```
php artisan make:model Tweet -m
```

2. 「tweets」マイグレーションプログラムを開く

database/migrations/xxxxxx_create_tweets_table.php

3. テーブル定義

-   プログラムは GitHub 参照

3. DB マイグレーション

```
php artisan migrate
```

4. app/Models/Tweet.php にカラム設定（Fillable）

## API コントローラー作成

1. ターミナルでコントローラー「Api/TweetController」作成

```
php artisan make:controller Api/TweetController
```

2. ルーティング「routes/api.php」を設定

3. API にアクセス

http://localhost:8000/api/tweet/get

## Validate 処理

1. TweetRequest 作成

```
php artisan make:request Api/TweetRequest
```

2. authorize() の戻り値を「true」

3. rules() で、バリデーションの設定

4. failedValidation() を追加して、API アクセス時にエラーが発生した時のプログラムを追加

5. Api/TweetController.php の add() の引数に、作成した TweetRequest を指定

■API 開発ツール「Postman」

1. Postman のサイトにアクセス

https://www.postman.com/

2. 「Sign up for free」から Google アカウントでサインアップ

3. アカウント登録ができたら、PC アプリをダウンロード＆インストール

https://www.postman.com/downloads/

4. アプリが起動したら「Login」をクリックし、アカウントログイン

5. 学校の PC ユーザとパスワード
   ID: iggxx\ig
   PW: ig
